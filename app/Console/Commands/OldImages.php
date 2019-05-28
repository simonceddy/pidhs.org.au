<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Helpers\ImageHelper;
use App\Item;

class OldImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'old:images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $items = Item::all(['id', 'thumbnail']);

        foreach ($items as $item) {
            
            $old = storage_path('gallery/images/' . $item->id . '.jpg');

            if (!file_exists($old)) {
                $this->error($old . ' not found');
                return;
            }

            $thumbnail = ImageHelper::relocate($old);
            $item->thumbnail = $thumbnail;
            $item->save();

            /* 
            if (!Storage::exists(
                'public/collection/'.($fn = $item->thumbnail)
            )) {
                dump($item->thumbnail);
               
                $thumbnail = ImageHelper::relocate($old);
                $item->thumbnail = $thumbnail;
                $item->save();
            } */
        }
    }
}
