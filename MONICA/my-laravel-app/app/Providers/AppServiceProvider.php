<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ////-----< For SQLite >-----
        // if (\DB::getDriverName() === 'sqlite') {
        //     \DB::statement(\DB::raw('PRAGMA foreign_keys=1'));
        // }
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
