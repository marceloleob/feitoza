<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('form', function ($app) {
            $form = new Form($app['html'], $app['url'], $app['view'], $app['session.store']->token(), $app['request']);

            return $form->setSessionStore($app['session.store']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
