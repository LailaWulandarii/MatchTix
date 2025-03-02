<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register | MatchTix</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4 logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">MatchTix</span>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pb-2">
                                        <h5 class="card-title text-center pt-2 pt-0 fs-5">Buat Akun Baru</h5>
                                        <p class="text-center small">Buat akun baru dan temukan perfect match mu!
                                        </p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ route('processRegister') }}"
                                        method="POST">
                                        @csrf

                                        <div class="col-12 pb-0">
                                            <label for="name" class="form-label fs-9">Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Masukkan nama lengkapmu" value="{{ old('name') }}"
                                                required>
                                            @error('name')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Masukkan email aktif" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="username" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="username" class="form-control"
                                                    id="username" placeholder="Masukkan username"
                                                    value="{{ old('username') }}" required>
                                            </div>
                                            @error('username')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Kata Sandi</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Masukkan kata sandimu" required>
                                            @error('password')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="password_confirmation" class="form-label">Konfirmasi Kata
                                                Sandi</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="password_confirmation" placeholder="Masukkan kata sandimu" required>
                                            @error('password_confirmation')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox"
                                                    value="1" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">Saya menyetujui dan
                                                    menerima
                                                    <a href="#">syarat & ketentuan</a></label>
                                            </div>
                                            @error('terms')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                                        </div>

                                        <div class="col-12">
                                            <p class="small mb-0 mt-0 text-center">Sudah punya akun?
                                                <a href="{{ route('login') }}">Masuk</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
