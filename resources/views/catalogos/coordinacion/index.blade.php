<!--begin::Container-->
<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="icon-xl fa fa-bookmark text-primary"></i>
                </span>
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ $nivel3 }}</h5>
                        <!--end::Page Title-->

                    </div>
                    <!--end::Page Heading-->
                </div>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="javascript:;" class="btn btn-primary font-weight-bolder" onclick="cargarformulario(3.2,0,2);">
                    <i class="la la-plus"></i>Nuevo Registro</a>
                <!--end::Button-->
            </div>
        </div>

        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <td style="width: 5px"></td>
                    <td style="width: 400px" class="text-left" ><b>Dirección_id</b></td>
                    <td style="width: 400px">
                        <b>Dirección</b>
                        <select class="form-control datatable-input" data-col-index="1" id="direcciones" >
                            <option value="">Seleccione</option>
                        </select>
                    </td>
                    <td style="width: 400px"><b>SubDirección_id</b></td>
                    <td style="width: 400px">
                        <b>SubDirección</b>
                        <select class="form-control datatable-input" data-col-index="3" id="subdirecciones" >
                            <option value="">Seleccione</option>
                        </select>
                    </td>
                    <td style="width: 400px">
                        <b>Coordinación</b>
                        <select class="form-control datatable-input" data-col-index="0" id="coordinaciones">
                            <option value="">Seleccione</option>
                        </select>
                    </td>
                    <td style="width: 150px">
                        <b>Acciones</b>
                        <button type="button" class="btn btn-light-primary font-weight-bolder" id="kt_reset">
                         <span>
                            <i class="la la-close"></i>
                            <span>
                                Borrar
                            </span>
                        </span>
                        </button>
                    </td>
                </tr>
                </thead>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
</div>
<!--end::Container-->


<script>

    cargarDirecciones();

    var KTDatatablesSearchOptionsAdvancedSearch = function() {

        var initTable1 = function() {
            // begin first table
            var table = $('#kt_datatable').DataTable({
                responsive: true,

                // dom: `<'row'<'col-sm-12'tr>>
			    // <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

                lengthMenu: [5, 10, 25, 50],

                pageLength: 10,

                language: {
                    info: "_TOTAL_ registros",
                    search: "Escriba un Texto a Buscar",
                    paginate: {
                        next: "Siguiente",
                        previous: "Anterior",
                    },
                    lengthMenu: 'Mostrar &nbsp;&nbsp;<select>'+
                        '<option value="10">10</option>'+
                        '<option value="25">25</option>'+
                        '<option value="30">30</option>'+
                        '<option value="50">50</option>'+
                        '<option value="-1">Todos</option>'+
                        '</select>&nbsp;&nbsp; registros',
                    loadingRecords: "Cargando...",
                    processing: "Procesando...",
                    emptyTable: "No hay datos",
                    zeroRecords: "No hay coincidencias",
                    infoEmpty: "",
                    infoFiltered:""

                },

                searchDelay: 500,
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/catalogos/coordinacion/getCoordinacion',
                    type: 'GET',
                },
                columnDefs:[{
                    targets: "_all",
                    sortable: false
                }],
                columns: [
                    {data: 'id'},
                    {data: 'direccion_id'},
                    {data: 'direccion'},
                    {data: 'subdireccion_id'},
                    {data: 'subdireccion'},
                    {data: 'coordinacion'},
                    {data: 'action', orderable:false, searchable: false,className: "text-center"},
                ],

            });

            $('#kt_reset').on('click', function(e) {
                e.preventDefault();
                $('.datatable-input').each(function() {
                    $(this).val('');
                    table.column($(this).data('col-index')).search('', false, false);
                });
                table.table().draw();
            });

            $("#direcciones").change(function(e) {
                e.preventDefault();

                var id=$("#direcciones").val();
                cargarSubdirecciones(id);

                var params = {};
                $('.datatable-input').each(function() {
                    var i = $(this).data('col-index');
                    if (params[i]) {
                        params[i] += '|' + $(this).val();
                    }
                    else {
                        params[i] = $(this).val();
                    }
                });
                $.each(params, function(i, val) {
                    debugger;
                    // apply search params to datatable
                    table.column(i).search(val ? val : '', false, false);
                });
                table.table().draw();

            });

            $("#subdirecciones").change(function(e) {
                e.preventDefault();

                var direcciones_id   =$("#direcciones").val();
                var subdirecciones_id=$("#subdirecciones").val();

                cargarCoordinaciones(direcciones_id,subdirecciones_id);

                var params = {};
                $('.datatable-input').each(function() {
                    var i = $(this).data('col-index');
                    if (params[i]) {
                        params[i] += '|' + $(this).val();
                    }
                    else {
                        params[i] = $(this).val();
                    }
                });
                $.each(params, function(i, val) {
                    // apply search params to datatable
                    table.column(i).search(val ? val : '', false, false);
                });
                table.table().draw();

            });

            $("#coordinaciones").change(function(e) {
                e.preventDefault();

                var params = {};
                $('.datatable-input').each(function() {
                    var i = $(this).data('col-index');
                    if (params[i]) {
                        params[i] += '|' + $(this).val();
                    }
                    else {
                        params[i] = $(this).val();
                    }
                });
                $.each(params, function(i, val) {
                    // apply search params to datatable
                    table.column(i).search(val ? val : '', false, false);
                });
                table.table().draw();

            });

            //se oculta la columna direccion_id
             table.column(1).visible( false );
             table.column(3).visible( false );
        };

        return {

            //main function to initiate the module
            init: function() {
                initTable1();
            },

        };

    }();

    function cargarDirecciones() {

        url="/catalogos/coordinacion/getDireccion";
        $.get(url, function (response) {
            if (response.status == 200) {

                tipo = response.response;

                /************************************************
                 * direcciones
                 ************************************************/
                html = '';
                html += `<option value="0" disabled selected >Seleccione</option>`;

                $.each(tipo, function (i, item){
                    html += `<option value="${item.id}">${item.nombre}</option>`
                });

                $('#direcciones').html(html);
            }
            else {
                toastr.error('{{ 'Ocurrió un error al comunicarse con el servidor' }}');
            }
        }).fail(function (err) {
            toastr.error(err);
        }).always(function () {
            $.blockUI({ css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                } });
            setTimeout($.unblockUI, 500);
        });
    }

    function cargarSubdirecciones(select) {

        value = select;
        debugger;
        if (!isNaN(parseInt(value))) {
            url="/catalogos/coordinacion/"+value+"/getSubdireccionSeleccion";
            $.get(url, function (response) {
                if (response.status == 200) {

                    tipo = response.response;

                    /************************************************
                     * Subdirecciones
                     ************************************************/
                    html = '';
                    html += `<option value="0" disabled selected >Seleccione</option>`;

                    $.each(tipo, function (i, item){
                        html += `<option value="${item.id}">${item.nombre}</option>`
                    });

                    $('#subdirecciones').html(html);
                }
                else {
                    toastr.error('{{ 'Ocurrió un error al comunicarse con el servidor' }}');
                }
            }).fail(function (err) {
                toastr.error(err);
            }).always(function () {
                $.blockUI({ css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    } });
                setTimeout($.unblockUI, 500);
            });
        }
        else {
            let html = '';
            html += '<option value="">{{ 'Seleccione' }}</option>';

        }

    }

    function cargarCoordinaciones(direccions_id,subdireccions_id) {

        url="/catalogos/coordinacion/"+direccions_id+"/"+subdireccions_id+"/getCoordinacionSeleccion";
        $.get(url, function (response) {
            if (response.status == 200) {

                tipo = response.response;

                /************************************************
                 * coordinaciones
                 ************************************************/
                html = '';
                html += `<option value="0" disabled selected >Seleccione</option>`;

                $.each(tipo, function (i, item){
                    html += `<option value="${item.id}">${item.nombre}</option>`
                });

                $('#coordinaciones').html(html);
            }
            else {
                toastr.error('{{ 'Ocurrió un error al comunicarse con el servidor' }}');
            }
        }).fail(function (err) {
            toastr.error(err);
        }).always(function () {
            $.blockUI({ css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                } });
            setTimeout($.unblockUI, 500);
        });
    }

    jQuery(document).ready(function() {
        KTDatatablesSearchOptionsAdvancedSearch.init();
    });


</script>

