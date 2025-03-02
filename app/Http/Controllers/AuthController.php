<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function processRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:30|regex:/^[a-zA-Z\s\']+$/',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|min:4|max:10|unique:users,username',
            'password' => ['required', 'string', 'min:6', 'max:12', 'confirmed', 'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/'],
            'terms' => 'accepted',
        ], [
            'required' => ':attribute wajib diisi.',
            'min' => ':attribute minimal harus :min karakter.',
            'max' => ':attribute maksimal :max karakter.',
            'unique' => ':attribute sudah digunakan, gunakan yang lain.',
            'email' => ':attribute harus dalam format email yang valid.',
            'confirmed' => ':attribute konfirmasi tidak cocok.',
            'regex' => ':attribute tidak valid.',
        ]);

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'exists:users,username'],
            'password' => ['required'],
        ], [
            'username.required' => 'Username wajib diisi.',
            'username.exists' => 'Username tidak terdaftar.',
            'password.required' => 'Kata sandi wajib diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = Auth::user();

            $hasPreferences = DB::table('preferences')->where('user_id', $user->id)->exists();

            if (!$hasPreferences) {
                return redirect()->route('preferences')->with('success', 'Berhasil login sebagai Admin!');
            }

            switch ($user->role) {
                case 'admin':
                    return 'Berhasil login sebagai Admin!';
                case 'event_owner':
                    return 'Berhasil login sebagai Event Owner!';
                case 'participant':
                    return 'Silahkan pilih event';
                default:
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['role' => 'Role tidak valid.'])->withInput();
            }
        }

        return back()->withErrors(['password' => 'Kata sandi salah.'])->withInput();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
