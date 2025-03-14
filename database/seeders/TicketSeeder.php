<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'name' => 'Basic Ticket',
                'price' => 125000,
                'description' => 'Mulailah dengan kecocokan dasar untuk menemukan siapa yang paling sesuai dengan preferensi awalmu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular Ticket',
                'price' => 150000,
                'description' => 'Bangun koneksi lebih dalam dengan seseorang yang memahami cara terbaik untuk berkomunikasi dan mengekspresikan kasih sayang.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gold Ticket',
                'price' => 200000,
                'description' => 'Ciptakan hubungan yang lebih personal dan bermakna dengan pasangan yang memiliki minat sejalan denganmu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
