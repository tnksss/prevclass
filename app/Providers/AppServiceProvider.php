<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;

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
        
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('pt_BR');
        });
        //
        \DB::listen(function($sql){
           error_log($sql->sql);
        });
    }

}
