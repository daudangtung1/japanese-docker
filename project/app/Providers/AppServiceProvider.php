<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Foundation\AliasLoader;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $loader = AliasLoader::getInstance();
        $loader->alias('Laravel\Fortify\Actions\AttemptToAuthenticate', 'App\Actions\AttemptToAuthenticate');
        $loader->alias('Laravel\Jetstream\Routes\Livewire', 'Routes\Livewire');
        $loader->alias('Laravel\Jetstream\Livewire\UserProfileController', 'App\Http\Controllers\UserProfileController');

        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
