{!! Form::hidden('id', null, ['id' => 'id-pessoa']) !!}
<div class="row" >
     <div class="form-group col-sm-12 container-fluid bg-primary ">
         <h5 class="text-bold">
             Doadores
         </h5>
     </div>
 </div>
 <div class="row">

        <!-- Name Field -->
        <div class="form-group col-sm-5 ">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>

         <!-- Email Field -->
         <div class="form-group col-sm-3">
             {!! Form::label('email', 'Email') !!}
             {!! Form::email('email', null, ['class' => 'form-control']) !!}
         </div>

         <!-- CPF  Field -->
         <div class="form-group col-sm-3">
             {!! Form::label('cpf', 'CPF') !!}
             {!! Form::text('cpf', null, ['class' => 'form-control' ]) !!}
         </div>




 </div>

<div class="row" >

    <!-- Telefone Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('telefone', 'Telefone') !!}
        {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Senha Eca Field -->
    <div class="form-group col-sm-5">
        {!! Form::label('data_nascimento', 'Data de Nascimento') !!}
        {!! Form::text('data_nascimento', null, ['class' => 'form-control']) !!}(Formato YYYY-MM-DD não deu tempo de formatar para data Brasil)
    </div>


</div>


<div class="row" >

    <!-- INtervalo Doação Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('intervalo_doacao', 'Intervalo de Doação') !!}
        {!! Form::select('intervalo_doacao', [$doadores], null, ['class' => 'form-select form-select-solid ', 'id' => 'select-intervalo-doacao']) !!}
    </div>

    <!-- Endereco Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('valor_doacao', 'Valor Doação') !!}
        {!! Form::text('valor_doacao', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Forma Pgto Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('forma_pgto', 'Forma de Pagamento') !!}
        {!! Form::select('forma_pgto', [ 'Débito','Crédito'], null, ['class' => 'form-select form-select-solid ', 'id' => 'select-forma-pgto']) !!}
    </div>


   {!! Form::hidden('info_pgto', null, ['class' => 'form-control', 'id' => 'info-pgto']) !!}


    <!-- Endereço Field -->
    <div class="form-group col-sm-2">
        {!! Form::label('endereco', 'Endereço') !!}
        {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
    </div>

</div>



<!-- Submit Field -->
<div class="form-group col-sm-12 modal-footer " >
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('doadores.index') !!}" class="btn btn-default">Cancelar</a>
</div>

 <script src="<?php echo URL::to('system/js/doadores/doadores.js') ?>"></script><!--validate fields-->


