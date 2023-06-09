<?php ?>
<!-- Datatables -->
<script src="{{ URL::to('assets/plugins/jquery/jquery.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('assets/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL::to('assets/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::to('assets/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ URL::to('assets/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::to('vendor/datatables/buttons.server-side.js') }}"></script>

<script>
    $.fn.DataTable.defaults.oLanguage = {
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sThousands": ".",
        "sDecimal": ",",
        "sInfoPostFix": "",
        "sLengthMenu": "_MENU_ resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": "Processando...",
        "sSearch": "Pesquisar",
        "sSearchPlaceholder": "",
        "sUrl": "",
        "sZeroRecords": "Nenhum registro encontrado",
        "oPaginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior",
            "sFirst": "Primeiro",
            "sLast": "Último",
            "_hungarianMap": {
                "first": "sFirst",
                "last": "sLast",
                "next": "sNext",
                "previous": "sPrevious"
            }
        },
        "oAria": {
            "sSortAscending": ": Ordenar colunas de forma ascendente",
            "sSortDescending": ": Ordenar colunas de forma descendente",
            "_hungarianMap": {
                "sortAscending": "sSortAscending",
                "sortDescending": "sSortDescending"
            }
        },
        "_hungarianMap": {
            "aria": "oAria",
            "paginate": "oPaginate",
            "emptyTable": "sEmptyTable",
            "info": "sInfo",
            "infoEmpty": "sInfoEmpty",
            "infoFiltered": "sInfoFiltered",
            "infoPostFix": "sInfoPostFix",
            "decimal": "sDecimal",
            "thousands": "sThousands",
            "lengthMenu": "sLengthMenu",
            "loadingRecords": "sLoadingRecords",
            "processing": "sProcessing",
            "search": "sSearch",
            "searchPlaceholder": "sSearchPlaceholder",
            "url": "sUrl",
            "zeroRecords": "sZeroRecords"
        },
        "buttons": {

                "create": "Cadastrar",
                "export": "Exportar",
                "print": "Imprimir",
                "reset": "Visão padrão",
                "reload": "Atualizar",
                "copy": "Copiar para a área de transferência",
                "copyTitle": "Cópia bem sucedida",
                "copySuccess": {
                    "1": "Uma linha copiada com sucesso",
                    "_": "%d linhas copiadas com sucesso"
                }
            }

    };

</script>
