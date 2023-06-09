@extends('templates.default')
@section('content')
@include('doadores.header')

    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content" >
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
        <!--begin::Card-->
            <div class="card" style="width: 100%">
                <!--begin::Card header-->
                <div class="card-header " >


                    <!--begin::Card title-->
                    <div class="card-title contentHeader pt-3">
                        <h1 class="text-dark fw-bolder my-0 fs-2">Gestão de Doadores</h1>
                        <a  class="float-right btnNewService"  href="{!! route('doadores.create') !!}">
                            Cadastrar Doadores
                        </a>
                    </div>
                </div>
            </div>

            <br>
            <!--begin::Card-->
            <div class="card" style="width: 100%">
                <!--begin::Card header-->
                <div class="card-header contentPessoa">
                    <!--begin::Card title-->
                    <div class="card-title">
                        @include('flash::message')
                        <div class="ibox-content" style="border-style: none">
                            <div class="table-responsive" style="color: black;">
                                @include('doadores.list')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



