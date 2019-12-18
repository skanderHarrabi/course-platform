<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Dusk\DuskServiceProvider;
use View;
use App\User;
use App\Setting;
use App\Categorie;
use App\Formation;
use App\Profile;
use App\Tag;
use App\Order;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('formateurs',User::where('role_id',2)->take(3)->get());
        View::share('title',Setting::first()->site_name);
        view::share('settings',Setting::first());
        view::share('categories',Categorie::all());
        view::share('formations',Formation::orderBy('created_at','desc')->take(3)->get());
        view::share('cources',Formation::orderBy('created_at','desc')->take(8)->get());
       

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        
        if ($this->app->environment('local', 'testing')) {
            $this->app->register(DuskServiceProvider::class);
        }

    }
}
