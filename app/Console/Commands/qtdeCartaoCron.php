<?php

namespace App\Console\Commands;

use App\Repositories\Doadores\DoadoresRepository AS Doadores;

use Illuminate\Console\Command;

class qtdeCartaoCron extends Command
{

     protected $qtdecartao ;

     #signature cron 
     protected $signature = 'qtdecartao:cron';


    public function __construct(Doadores $doadores)
    {
        #change service construct
        $this->doadores  = $doadores;
        parent::__construct();
    }


    public function handle()
    {
        $this->doadores->qtdeTipoCartao();
    }
}
