<?php

namespace App\Models\ContadorCartao;


use Carbon\Carbon;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;


/**
* @property-read int $id

* @property-read string $nome
* @property-read string $cpf
* @property-read string $email
* @property-read Carbon  $data_nascimento
* @property-read Carbon $data_cadastro
* @property-read string $intervalo_doacao
* @property-read float $valor_doacao
* @property-read string forma_pgto
* @property-read string $endereco
**/
class ContadorCartao extends Model
{
    use SoftDeletes;

    protected $table = 'contador_cartao';


    protected $fillable = [
        'tipo_cartao',
        'qtde',
    ];

    protected $casts = [
        'id' => 'integer' ,
    ];


}
