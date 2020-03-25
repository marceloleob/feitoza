<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use JeroenNoten\LaravelAdminLte\AdminLte;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(AdminLte $adminlte)
    {
        // Retorna a localizacao do usuario
        View::composer('*', function ($view) {
            $view->with('locale', str_replace('_', '-', strtolower(App::getLocale())));
        });

        // binda os arquivos do dashboard
        View::composer('admin.*', function () use ($adminlte) {
            //dd($adminlte);
            // envia o parametro do menu default
            View::share('adminlte', $adminlte);
        });
    }
}
