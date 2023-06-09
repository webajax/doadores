<script>

    var idEmpresa;

    $(document).ready(function() {


        const Toast = Swal.mixin({
            toast: true,
            iconColor: 'green',
            customClass: {
                popup: 'colored-toast'
            },
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        })

        $("#select-produto-modal").select2();

        $('.bt-ass-empresa-produto').on('click', function () {
            idEmpresa = $(this).data('value');
            getEmpresaProduto($(this).data('value'));
        });


        $(document).on("click",".bt-del-empresa-produto" ,function(e){

            var url=window.location.href;
            url = url.replace("empresa","empresa-produto/destroyAjax");

            e.preventDefault();
            Swal.fire({
                customClass : {
                    container : 'pop-up'
                },
                title: 'Deseja Excluir?',
                text: "Tem Certeza?",
                icon: 'warning',
                showCancelButton: true,
                // timer: 4000,
                timerProgressBar: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim!'
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        cache: false,
                        type: 'POST',
                        url: url,
                        data: {id: $(this).data('value')},
                        dataType: "json",

                        success: function (data) {
                            getEmpresaProduto($('#id-empresa').val());
                        }
                    });


                }
            })

        })


    })

    function rowProd(id){
        idEmpresa = id;
        getEmpresaProduto(id);
    }

    function addProduto()
    {

        const Toast = Swal.mixin({
            toast: true,
            iconColor: 'green',
            customClass: {
                popup: 'colored-toast'
            },
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        })

        let idProduto = $('#select-produto-modal').val()

        var url = window.location.href;
        url = url.replace("empresa", "empresa-produto/storeAjax");

        $.ajax({
            cache: false,
            type: 'POST',
            url: url,
            data: {id_empresa: idEmpresa, id_produto: idProduto},
            dataType: "json",

            success: function (data) {


                if (data.success) {
                    Toast.fire({
                        type: 'success',
                        title: data.message,
                        icon: 'success',
                    })

                    getEmpresaProduto(idEmpresa);

                }  else{
                    Toast.fire({
                        type: 'warning',
                        title: data.message,
                        icon: 'warning',
                    })
                    getEmpresaProduto(idEmpresa);
                }

            }
        });
    }



    function getEmpresaProduto(idEmpresa) {

        var url = window.location.href;

        url = url.replace("empresa", "empresa-produto/indexAjax");


        $.ajax({
            cache: false,
            type: 'POST',
            url: url,
            data: {id: idEmpresa},
            dataType: "json",

            success: function (data) {

                var rows ;

                if(data.success){

                    $.each(data['data'], function (key, value) {

                        // return;
                        rows = rows + '<tr>'
                        rows = rows + '<td>'+value['produto']['descricao']+'</td>';
                        rows = rows + '<td style="text-align: center"><button type="button" class="btn btn-default btn-sm bt-del-empresa-produto"  data-value="'+value.id+'">'
                        rows = rows + '<span className="svg-icon svg-icon-3">' +
                            '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ' +
                            ' fill="none">' +
                            '<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />' +
                            '<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />' +
                            '<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />' +
                            '</svg>' +
                            '</span>'
                        rows = rows +  '</button></td>';
                        rows = rows + '</tr>';

                    })

                }else{

                    rows = rows + '<tr style="position: relative;max-height: -5px">';
                    rows = rows + '<td colSpan="2">Não há produtos cadastrados </td>';
                    rows = rows + '</tr>';

                }


                $('#tableempresaprodutomodal').html(rows);

            }
        });
    }

</script>