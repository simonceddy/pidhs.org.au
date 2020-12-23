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
        factory(App\Exhibitions\Exhibition::class, 15)
            ->create()
            ->each(function ($coll) {
                $coll->sections()
                    ->saveMany(
                        factory(App\Exhibitions\Section::class, 10)->make()
                    );
            });
    }
}
