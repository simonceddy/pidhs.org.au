<?php
namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Resource::withoutWrapping();

        Paginator::defaultView('vendor.pagination.default');
        Paginator::defaultSimpleView('vendor.pagination.simple-default');

        Blade::directive('article', function (string $slug) {
            return route('article.show', $slug);
        });

        Blade::include('shared.component.ckeditor', 'ckeditor');

        Blade::include('shared.component.form.delete', 'deleteForm');

        Blade::directive('shortDate', function ($date) {
            dd($date);
        });

        Blade::directive('itemUrl', function (string $thumb) {
            return Storage::url('collection/'.$thumb);
        });

        Blade::directive('itemThumb', function (string $thumb) {
            return Storage::url('collection/thumb/th_'.$thumb);
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
