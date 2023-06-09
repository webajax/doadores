{{--@section('css')--}}
    @include('layouts.datatables_css')
{{--@endsection--}}

{!! $dataTable->table(['width' => '100%', 'class' => 'dt-complex-header table table-bordered tableContent']) !!}

@include('layouts.datatables_js')

{!! $dataTable->scripts() !!}

<script src="<?php echo URL::to('system/js/doadores/doadores.js') ?>"></script><!--validate fields-->

<script>
    $("#dataTableBuilder_next").on('click',function(){
        $("#kt_wrapper").css({'margin-top':'-30%'});

    });
</script>



