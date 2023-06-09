<?php

namespace App\Http\Controllers;

use App\Models\CidadeEstado\Cidade;
use App\Models\CidadeEstado\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function __invoke(){}



    public  function listCity(): void
    {

        $resp =   Cidade::query()
               ->where('id_estado',$_REQUEST['id'])
               ->get();

        echo json_encode($resp);

    }
}
