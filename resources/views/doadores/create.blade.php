@extends('templates.default')

@section('content')
<!--begin::Header-->
@include('doadores.header')
<!-- end::Header -->

<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">

        <div class="card" style="width:100%">
            <!--begin::Card header-->
            <div class="card-header  border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <h4 style="color: black">Adicionar Doador</h4>
                </div>
            </div>
        </div>
        <br>

        <div class="card" style="width: 100%">
            <!--begin::Card header-->
            <div class="card-header  border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    @include('flash::message')
                    <div style="color: black" class="ibox-content">
                        @include('adminlte-templates::common.errors')
                        {!! Form::open(['route' => ['doadores.store']]) !!}
                        @include('doadores.fields')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection