<?php

namespace App\Providers;


use App\Models\Doadores;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        $this->setTenantView();
    }

    protected function setTenantView()
    {
        View::composer('doadores.fields', static function ($view): void {

            $doadores = collect(Doadores::INTERVALO_DOACAO_ENUM)
                ->prepend('Selecione', '')
                ->toArray();

            $view->with(compact(
                'doadores',

            ));
        });




    }

}
