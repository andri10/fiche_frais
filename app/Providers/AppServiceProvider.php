<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        /**
         * Blade directive to format number to currency
         */
        Blade::directive('money', function ($expression) {
            /* return "<?php echo money_format('%+n', $expression); ?>"; */
            return "<?php echo number_format($expression, 2); ?>";
        });
    }
}
