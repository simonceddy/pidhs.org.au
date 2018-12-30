<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'exhibition' => 1,
            'title' => str_random(32),
            'content' => str_random(322)
        ]);
        DB::table('sections')->insert([
            'exhibition' => 1,
            'title' => str_random(32),
            'content' => str_random(322)
        ]);
        DB::table('sections')->insert([
            'exhibition' => 1,
            'title' => str_random(32),
            'content' => str_random(322)
        ]);
        DB::table('sections')->insert([
            'exhibition' => 2,
            'title' => str_random(32),
            'content' => str_random(322)
        ]);
        DB::table('sections')->insert([
            'exhibition' => 2,
            'title' => str_random(32),
            'content' => str_random(322)
        ]);
        DB::table('sections')->insert([
            'exhibition' => 2,
            'title' => str_random(32),
            'content' => str_random(322)
        ]);
    }
}
