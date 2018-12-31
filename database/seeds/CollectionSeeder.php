<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Collection::class, 15)->create()->each(function ($coll) {
            $coll->items()->saveMany(factory(App\Item::class, 20)->make());
        });
    }
}
