<?php

namespace App\Console\Commands\Convert;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

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
                //dd($crawler->images());
                foreach ($imgs as $node) {
                    $this->handleImgTag($node);
                    //dump($article->id, file_exists(storage_path($fn)));
                    // hash image and copy to dir
                    // update article with new img src
                }
                $content = $crawler->getNode(0);
                $content = $this->stripOuterTagsFromContent(
                    $content->ownerDocument->saveHTML($content)
                );
                if (!$content) {
                    $this->error('Image not found');
                    return;
                }
                try {
                    DB::table($table)
                        ->where('id', $article->id)
                        ->update(['content' => $content]);
                } catch (\Exception $e) {
                    throw $e;
                }
            }
        }
    }

    private function stripOuterTagsFromContent(string $content)
    {
        $content = preg_replace('/^(\<html\>\<body\>)/', '', $content);
        $content = preg_replace('/(\<\/body\>\<\/html\>)$/', '', $content);
        return $content;
    }

    private function handleImgTag(\DOMElement $node)
    {
        if (!file_exists($fn = storage_path($node->getAttribute('src')))) {
            return;
        }
        try {
            //dd($fn);
            $img = Image::make($fn);
            $img->save(
                storage_path('app/public/assets').'/'.Str::random(40).'.'.$img->extension
            );
        } catch (\Exception $e) {
            throw $e;
        }
        $node->setAttribute('src', '/storage/assets/'.$img->basename);
    }
}
