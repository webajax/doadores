<?php

namespace App\Http\Controllers\Doadores;

use App\DataTables\Doadores\DoadoresDataTable;
use App\Http\Controllers\AppBaseController;

use App\Http\Requests\Doadores\CreateDoadoresRequest;
use App\Models\Doadores; #OBS tive que deixar esse model fora da pasta Doadores pois o seeders estava dando erro
use App\Repositories\Doadores\DoadoresRepository;
use Flash;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Log;

class DoadoresController extends AppBaseController
{
    /** @var $doadoresRepository DoadoresRepository */
    private $doadoresRepository;

    public function __invoke(){}

    public function __construct(DoadoresRepository $doadoresRepo)
    {
        $this->doadoresRepository = $doadoresRepo;
    }

    /**
     * @param  DoadoresDataTable  $doadoresDataTable
     * @return DoadoresDataTable
     */
    public function index(DoadoresDataTable $doadoresDataTable)
    {
        return $doadoresDataTable->render('doadores.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
      return view('doadores.create');
    }


    /**
     * @param CreateDoadoresRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateDoadoresRequest $request)
    {
        $input = $request->all();


        /** @var Doadores $doadores */
        $doadores = Doadores::query()
            ->where('forma_pgto', 1)
            ->where('info_pgto',$request->info_pgto)
            ->first();

        if ($doadores){
            Flash::warning('Cartão já cadastrado(a) em nosso banco');
            return redirect(route('doadores.index'));
        }

        try{
        $this->doadoresRepository->create($input);

            #grava a ação no arquivo de log dentro da pasta storage
            Log::build([
                'driver' => 'single',
                'path' => storage_path('logs/custom.log'),
            ])->info('Cadastrado com sucesso!');

        }catch (\Exception $e){
            Flash::error('Erro: ' . $e->getMessage());
            return redirect(route('doadores.index'));

        }

        Flash::success('Registro criado com sucesso.');

        return redirect(route('doadores.index'));
    }

    public function show(){
        $this->doadoresRepository->qtdeTipoCartao();
    }

}
