<?php

namespace App\Models;


use App\Models\Traits\HasUuid;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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
class Doadores extends Model
{
    use SoftDeletes,HasFactory;

    protected $table = 'doadores';

    public const INTERVALO_DOACAO_ENUM = [
        'UNICO' => 'Unico',
        'BIMESTRAL' => 'Bimestral' ,
        'SEMESTRAL' => 'Semestral',
        'ANUAL' => 'Anual',

    ];

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'data_nascimento',
        'data_cadastro',
        'intervalo_doacao',
        'valor_doacao',
        'forma_pgto',
        'info_pgto',
        'endereco',
    ];

    protected $casts = [
        'id' => 'integer' ,
    ];


}
