<?php
namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Agent\Facades\Agent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Resource::withoutWrapping();

        Paginator::defaultView('vendor.pagination.default');
        
        Paginator::defaultSimpleView('vendor.pagination.simple-default');

        Blade::include('shared.component.buttons.cancel', 'cancel');
        Blade::include('shared.component.buttons.submit', 'submit');
        Blade::include('shared.component.ckeditor', 'ckeditor');
        Blade::include('shared.component.publicationDate', 'published');
        Blade::include('shared.component.form.delete', 'deleteForm');
        Blade::include('shared.component.buttons.edit', 'editButton');
        Blade::include('shared.component.buttons.create', 'createButton');

        Blade::directive('itemUrl', function (string $thumb) {
            return Storage::url('collection/'.$thumb);
        });

        Blade::directive('itemThumb', function (string $thumb) {
            return Storage::url('collection/thumb/th_'.$thumb);
        });

        Blade::directive('sectionThumb', function (string $thumb) {
            return Storage::url('exhibitions/thumb/th_'.$thumb);
        });

        Blade::if('isMobile', function () {
            return Agent::isMobile();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
