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
                'status_lulus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '103012300052',
                'status_lulus' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '11223344',
                'status_lulus' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
