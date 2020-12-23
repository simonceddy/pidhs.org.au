<?php

use Illuminate\Database\Seeder;

class EssaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Essay::class, 10)->create();
    }
}
