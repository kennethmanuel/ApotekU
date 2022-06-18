<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'ANALGESIK NON NARKOTIK', 'description' => '1.2. ANALGESIK NON NARKOTIK']);
        DB::table('categories')->insert(['name' => 'ANTIPIRAI', 'description' => '1.3. ANTIPIRAI']);
        DB::table('categories')->insert(['name' => 'ANESTETIK LOKAL', 'description' => '2.1 ANESTETIK LOKAL']);
        DB::table('categories')->insert(['name' => 'ANTIMIGREN', 'description' => '7.1 ANTIMIGREN']);
        DB::table('categories')->insert(['name' => 'ANTIVERTIGO', 'description' => '7.2 ANTIVERTIGO']);
        DB::table('categories')->insert(['name' => 'IMUNOSUPRESAN', 'description' => '8.2 IMUNOSUPRESAN']);
        DB::table('categories')->insert(['name' => 'SITOTOKSIK', 'description' => '8.3 SITOTOKSIK']);
        DB::table('categories')->insert(['name' => 'DIURETIK', 'description' => '15.1 DIURETIK']);
        DB::table('categories')->insert(['name' => 'OBAT untuk HIPERTROFI PROSTAT', 'description' => '15.2 OBAT untuk HIPERTROFI PROSTAT']);
        DB::table('categories')->insert(['name' => 'HORMON ANTIDIURETIK', 'description' => '16.1 HORMON ANTIDIURETIK']);
        DB::table('categories')->insert(['name' => 'ANTIDIABETES', 'description' => '16.2 ANTIDIABETES']);
        DB::table('categories')->insert(['name' => 'TROMBOLITIK', 'description' => '17.5 TROMBOLITIK']);
    }
}
