<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Cocur\Slugify\Slugify;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $slugify = new Slugify();
        $articles = include dirname(__DIR__, 2).'/storage/db/articles.php';
        foreach ($articles as $article) {
            $data = ['title' => $article['title'], 'content' => $article['content']];
            if (isset($article['slug'])) {
                $data['slug'] = $article['slug'];
            } else {
                $data['slug'] = $slugify->slugify($data['title']);
            }
            DB::table('articles')->insert($data);
        }
    }
}
