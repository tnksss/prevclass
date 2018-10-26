<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {

        Route::resourceVerbs([
            'create' => 'criar',
            'edit' => 'editar',
        ]);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
        //\DB::listen(function($sql){
        //    error_log($sql->sql);
        //});
    }

}
