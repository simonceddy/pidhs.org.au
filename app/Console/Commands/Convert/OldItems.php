<?php

namespace App\Console\Commands\Convert;

use Illuminate\Console\Command;
use App\Item;
use Illuminate\Support\Facades\Storage;
use App\Helpers\ImageHelper;

class OldItems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convert:old';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rehash old Collection assets';

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
        
            if (!Storage::exists(
                'public/collection/'.($fn = $item->thumbnail)
            )) {
                dump($item->thumbnail);
                if (!file_exists(
                    $resolved = storage_path('gallery/images').'/'.$fn)
                ) {
                    $this->error($fn.' not found');
                    return;
                }
                $thumbnail = ImageHelper::relocate($resolved);
                $item->thumbnail = $thumbnail;
                $item->save();
            }
        }
    }

    private function locateImage(string $path)
    {
        
    }
}
