<?php

namespace App\Repositories\Doadores;


use App\Models\ContadorCartao\ContadorCartao;
use App\Models\Doadores;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Log;
use Nette\Utils\DateTime;
use phpDocumentor\Reflection\Types\Collection;


class DoadoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'nome',
        'email',
        'telefone',
        'data_nascimento',
        'data_cadastro',
        'intervalor_doacao',
        'valor_doacao',
        'forma_pgto',
        'endereco',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Doadores::class;
    }

    public function qtdeTipoCartao(){

        try {

            #verifica se tem algum valor
            $response = ContadorCartao::query()
                ->where('tipo_cartao', 0)
                ->first();


            if (!$response) {
                ContadorCartao::query()->create(['tipo_cartao' => 0, 'qtde' => 0]);
            }

            $response = ContadorCartao::query()
                ->where('tipo_cartao', 1)
                ->first();


            if (!$response) {
                ContadorCartao::query()->create(['tipo_cartao' => 1, 'qtde' => 0]);
            }
            #fim verificação

            #pega os cartoes que nao foram contabilizados na tabela de doadores
            $qtde = Doadores::query()
                ->select('contador', 'forma_pgto')
                ->where('contador', null)
                ->get();

            if ($qtde) {

                $qtde = collect($qtde);
                $x = 1;
                $y = 1;

                $qtde->each(static function ($query) use ($x,$y) {

                    $contadorcartao = ContadorCartao::query()
                        ->select('id', 'tipo_cartao', 'qtde')
                        ->where('tipo_cartao', $query->forma_pgto)
                        ->first();

                    if($query->forma_pgto == 1){ #se for cartao de credito
                        $input = [
                            'qtde' => $x++
                        ];
                    }else{ #se for debito
                        $input = [
                            'qtde' => $y++
                        ];
                    }

                    #soma a quantidade
                    ContadorCartao::query()
                    ->where('tipo_cartao', $query->forma_pgto)
                    ->update($input, $contadorcartao->id) ;

                    #faz um update no campo contador
                    $input = [
                        'contador' => 1
                    ];

                    #faz um update na tabela doadores na coluna contador colocando um true
                    # para nao contabilizar novamente
                    Doadores::query()
                    ->where('id',$query->id)
                    ->update($input,$query->id);


                });

                #grava a ação no arquivo de log dentro da pasta storage
                Log::build([
                    'driver' => 'single',
                    'path' => storage_path('logs/custom.log'),
                ])->info('Soma de quantidade de cartoes gerada!');

            }

        }catch (\Exception $e){
            echo $e->getMessage();
        }


    }




}
