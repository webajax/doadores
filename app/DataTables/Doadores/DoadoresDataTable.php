<?php

namespace App\DataTables\Doadores;

use App\Models\Doadores;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Services\DataTable;

class DoadoresDataTable extends DataTable
{
    /**
     * @param $query
     * @return EloquentDataTable
     */
    public function dataTable($query): EloquentDataTable
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
            ->addColumn('action','doadores.datatables_actions');
    }


    /**
     * @param  Doadores  $model
     * @return EloquentBuilder
     */
    public function query(Doadores $model): EloquentBuilder
    {
        return $model->newQuery();
    }


    /**
     * @return Builder
     */
    public function html(): Builder
    {

        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false], false)
            ->parameters([
                'dom' => 'Bfrtip',
                'stateSave' => true,
                'order' => [[0, 'desc']],
                'buttons' => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }


    /**
     * @return \string[][]
     */
    protected function getColumns():array
    {
        return [
            'nome' => ['nome' => 'nome', 'title' =>'nome'],
            'email' => ['email' => 'email', 'title' =>'email'],
        ];
    }
}
