<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticleSeeder::class);
        $this->call(ExhibitionsTableSeeder::class);
        $this->call(CollectionSeeder::class);
        $this->call(EssaysTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}
