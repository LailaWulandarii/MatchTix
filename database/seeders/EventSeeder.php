<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'name'       => 'Date & Chill: Temukan Koneksi Baru',
                'description' => 'Kenalan tanpa canggung di Discuss Space n Coffee Jember! Blind date santai dengan suasana nyaman dan obrolan seru. Temukan kecocokan dari preferensi yang sudah dipilih.',
                'photo'       => 'events/event-discuss.png',
                'date'        => '2025-05-10',
                'location'    => 'Discuss  Space  & Coffee, Jl. Jawa II G, Jember',
                'start_time'  => '18:00:00',
                'end_time'    => '21:00:00',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'       => 'Brew & Bond: Blind Date Over Coffee',
                'description' => 'Blind date tanpa awkward moment di Kattapa Coffee Jember! Ngobrol santai sambil menikmati kopi dan menemukan koneksi baru yang benar-benar nyambung.',
                'photo'       => 'events/event-kattapa.png',
                'date'        => '2025-08-15',
                'location'    => 'Kattapa Coffee, JL. Kaliurang No 148 Jember',
                'start_time'  => '18:00:00',
                'end_time'    => '21:00:00',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
