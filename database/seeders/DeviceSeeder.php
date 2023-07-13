<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('devices')->insert([
                'name' => 'Device-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'address' => '10.10.10.' . $i
            ]);
        }
    }
}
