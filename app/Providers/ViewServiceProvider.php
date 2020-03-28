<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Jenssegers\Agent\Agent;


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
    public function boot()
    {
        // Retorna a localizacao do usuario
        View::composer('*', function ($view) {
            $view->with('locale', str_replace('_', '-', strtolower(App::getLocale())));
        });

        // instancia a verificacao do device
        $agent = new Agent();

        // binda os arquivos do dashboard
        View::composer('site.*', function () use ($agent) {
            // seta um valor default
            $device = null;
            // verifica se o site esta abrindo no celular
            if ($agent->isMobile()) {
                $device = 'mobile';
            }
            // verifica se o site esta abrindo no tablet
            if ($agent->isTablet()) {
                $device = 'tablet';
            }
            // compartilha o resultado
            View::share('device', $device);
        });
    }
}
