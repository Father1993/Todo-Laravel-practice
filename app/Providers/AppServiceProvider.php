<?php

namespace App\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Collection::macro('toUpper', function (){
            return $this->map(function($item) {
                return \Illuminate\Support\Str::upper($item);
            });
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layout.sidebar', function ($view){
            $view->with('tagsCloud', \App\Models\Tag::tagsCloud());
        });
    /*
        \Blade::component('components.alert', 'alert');
        \Blade::directive('datetime', function ($value) {
            return "<?php echo ($value)->toFormattedDateString ?>";
        });
    */
    } 
}
