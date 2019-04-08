<?php

namespace App\Console\Commands\Convert;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;

class ImgTags extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert:imgtags {--T|table=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert img tags';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($table = $this->option('table')) {
            $articles = DB::table($table)
            ->where('content', 'regexp', '\<img')
            ->get(['id', 'content']);

            foreach ($articles as $article) {
                $crawler = new Crawler($article->content);
                $imgs = $crawler->filter('img');
                foreach ($imgs as $node) {
                    dump($node->getAttribute('src'));
                    // hash image and copy to dir
                    // update article with new img src
                }
            }
        }
    }
}
