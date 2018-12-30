<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhibitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exhibitions')->insert([
            'id' => 1,
            'title' => str_random(32)
        ]);
        DB::table('exhibitions')->insert([
            'id' => 2,
            'title' => str_random(32)
        ]);
    }
}
