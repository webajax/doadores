$(document).ready(function() {

    $( "#select-forma-pgto" ).change(function() {

        //numero de conta e cartao foram chumbados aki
        if($(this).val() == 0){
            $("#info-pgto").val('BANCO: ITAU - AG: 0411 - CC: 778899-0');
        }else{
            $("#info-pgto").val('9999 9999 2222 4444');
        }

    });

});
