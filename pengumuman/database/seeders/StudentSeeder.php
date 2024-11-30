<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'nim' => '12345678',
                'nama' => 'Reyhan Yoga',
                'status_lulus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '103012300052',
                'nama' => 'Ardi Cahyanto',
                'status_lulus' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '11223344',
                'nama' => 'Afara ifania',
                'status_lulus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
