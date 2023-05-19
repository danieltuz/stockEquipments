<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

<br>
<!--begin::Container-->
{{--<div class="container">
ESTA CLASE CENTRA TODO L QUE ESTE DENTRO de ella
</div>--}}

<input type="hidden" id="hidden_tipoEquipo" value="SOFTWARE">

<!--begin::Card-->
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                {{--<i class="icon-xl fas fa-microchip text-primary"></i>--}}
                <img src="{{ asset('img/monitor.svg') }}" width="40px">
                Total Monitores:
                <label id="totalEquipos">
                </label>
            </span>
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5"></h5>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
        </div>
        <div class="card-toolbar">
            <!--begin::Button-->
            <a href="javascript:;" class="btn btn-primary btn-sm box-sombra" onclick="cargarformulario(18.2,0,1);">
                <i class="la la-plus"></i>
                Nuevo Registro
            </a>
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-hover table-sm" id="kt_datatable">
            <thead>
            <tr>

                <td style="width: 1px" class="text-center"></td>
                {{--PROGRAMA--}}
                <td style="color: #0f0f0f" class="text-left col_programas">
                    <b>Programa</b>
                    <div class="input-group">
                        <select name="programas_id" id="programas_id" class="form-control form-control-sm">
                            @foreach($programas as $dato)
                                <option {{ $dato->id==1 ? "selected" : "" }}
                                        value="{{ $dato->id }}">{{ $dato->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_programas" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>
                {{--DESCRIPCION--}}
                <td style="color: #0f0f0f" class="text-left col_descripcion" >
                    <b>Descripción</b>
                    <div class="input-group">
                        <input class="form-control form-control-sm form-filter datatable-input" type="text" id="descripcion" name="descripcion">
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_descripcion" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>
                {{--TIPO DE CPU--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_equipo">
                    <b>Tipo CPU</b>
                    <div class="input-group">
                        <select name="tipo_equipos_id" id="tipo_equipos_id" class="form-control form-control-sm form-filter datatable-input">
                            <option value="1" selected>Seleccione</option>
                            @foreach($tipo_equipos as $dato)
                                <option value="{{ $dato->id }}">{{ $dato->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_tipo_equipo" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>
                {{--MARCA--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_marcas">
                    <b>Marca</b>
                    <div class="input-group">
                        <input type="hidden" id="hidden_marca_tipoEquipo" value="CPU">
                        <select name="marcas_id" id="marcas_id" class="form-control form-control-sm form-filter datatable-input">
                            @foreach($marcas as $dato)
                                <option {{ $dato->id==1 ? "selected" : "" }}
                                        value="{{ $dato->id }}">{{ $dato->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_marcas" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>
                {{--MODELO--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_modelos">
                    <b>Modelo</b>
                    <div class="input-group">
                        <select name="modelos_index_id" id="modelos_index_id" class="form-control form-control-sm form-filter datatable-input">
                            <option value="Seleccione">Seleccione</option>
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_modelos" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>
                {{--DIRECCION--}}
                <td style="color: #0f0f0f" class="text-left col_direccion" >

                    <b>Dirección</b>
                    <div class="input-group">
                        <select name="direccion_id" id="direccion_id" class="form-control form-control-sm form-filter datatable-input">
                            @foreach($direcciones as $dato)
                                <option {{ $dato->id==16 ? "selected" : "" }}
                                        value="{{ $dato->id }}">{{ $dato->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_direccion" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>

                {{--SUBDIRECCION--}}
                <td style="color: #0f0f0f" class="text-left col_subdireccion">
                    <b>Subdirección</b>
                    <div class="input-group">
                        <select name="subdireccion_id" id="subdireccion_id" class="form-control form-control-sm form-filter datatable-input">
                            <option value="Seleccione">Seleccione</option>
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_subdireccion" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>

                {{--INVENTARIO--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_inventario">
                    <b>#Inventario</b>
                    <div class="input-group">
                        <input class="form-control form-control-sm form-filter datatable-input" type="text" id="inventario" name="inventario">
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_inventario" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>

                {{--SERIE--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_serie">
                    <b>#Serie</b>
                    <div class="input-group">
                        <input class="form-control form-control-sm form-filter datatable-input" type="text" id="serie" name="serie">
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_serie" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>

                {{--USUARIO--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_usuario">
                    <b>Usuario</b>
                    <div class="input-group">
                        <input class="form-control form-control-sm form-filter datatable-input" type="text" id="usuario" name="usuario">
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_usuario" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>
                {{--BOTON DESCARGAR--}}
                <td class="text-center">
                    <b>Acciones</b>
                    <ul class="nav navbar-right panel_toolbox">

                        <a href="javascript:void(0);"
                           class="btn btn-success btn-sm box-sombra"
                           data-toggle="modal"
                           data-target="#formModalDescargar"
                           type="button">
                            Descargar
                        </a>

                    </ul>
                </td>
            </tr>
            </thead>
        </table>
        <!--end: Datatable-->
    </div>
</div>
<!--end::Card-->

{{--PANTALLA MODAL DE DESCARGA DEL ARCHIVO EXCEL--}}
<div class="modal fade" id="formModalDescargar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Descargar Archivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">


                    <div class="text-center">
                        <div class="btn btn-block-btn-secondary" id="btn-exportar-todos"></div>
                    </div>


                </div>
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--end::Container-->

<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('blockUI/jquery.blockUI.js') }}"></script>
<script src="{{ asset('propias/funciones_comunes.js') }}"></script>
<script src="{{ asset('propias/eventos_select.js') }}"></script>

<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

<script>

    pleasWait();

    var KTDatatables = function() {

        var initTable1 = function() {
            // begin first table

            var lst_programas_id = $('#programas_id').val();

            if ($('#descripcion').val().length === 0){

                var txt_descripcion = 'disabled';

            }else{

                var txt_descripcion = $('#descripcion').val();

            }

            var lst_tipo_equipo_id = $('#tipo_equipos_id').val();

            var lst_marca_id = $('#marcas_id').val();

            var combo_mod = document.getElementById("modelos_index_id");
            var sel_mod = combo_mod.options[combo_mod.selectedIndex].text;
            var lst_modelos_txt = sel_mod;
            var lst_modelos_id = $('#modelos_index_id').val();

            var lst_direccion_id = $('#direccion_id').val();

            if ($('#subdireccion_id').val() != null) {

                var combo_sub = document.getElementById("subdireccion_id");
                var sel_sub = combo_sub.options[combo_sub.selectedIndex].text;
                var lst_subdireccion_txt = sel_sub;
                var lst_subdireccion_id = $('#subdireccion_id').val();

            }else{

                var lst_subdireccion_txt = 'Seleccione';
                var lst_subdireccion_id = null;
            }

            if ($('#inventario').val().length === 0){

                var txt_inventario = 'disabled';

            }else{

                var txt_inventario = $('#inventario').val();

            }

            if ($('#serie').val().length === 0){

                var txt_serie = 'disabled';

            }else{

                var txt_serie = $('#serie').val();

            }

            if ($('#usuario').val().length === 0){

                var txt_usuario = 'disabled';

            }else{

                var txt_usuario = $('#usuario').val();

            }


            var html = '';
            html += `<div class="btn btn-success"  type="button">`;
            html += `<a href="{{ url('/software/excel') }}/${lst_programas_id}/${txt_descripcion}/${lst_tipo_equipo_id}/${lst_marca_id}/${lst_modelos_id}/${lst_modelos_txt}/${lst_direccion_id}/${lst_subdireccion_id}/${lst_subdireccion_txt}/${txt_inventario}/${txt_serie}/${txt_usuario}">`;
            html += `<i class="fa fa-download" style="color:white">&nbsp; </i>`;
            html += `<label style="color: white">&nbsp;Descargar</label>`;
            html += `</a>`;
            html += `<div/>`;

            $('#btn-exportar-todos').html(html);

            var table = $('#kt_datatable').DataTable({
                responsive: true,

                dom: `<'row'<'col-sm-12'tr>>
                     <'row'<'col-sm-12 col-md-5'i>
                     <'col-sm-12 col-md-7 dataTables_pager'lp>>`,


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
                    url: '/software/getSoftware?programas_id=' + lst_programas_id +
                        "&descripcion=" + txt_descripcion +
                        "&tipo_equipo_id=" + lst_tipo_equipo_id +
                        "&marca_id=" + lst_marca_id +
                        "&modelos_txt=" + lst_modelos_txt +
                        "&modelos_id=" + lst_modelos_id +
                        "&direccion_id=" + lst_direccion_id +
                        "&subdireccion_txt=" + lst_subdireccion_txt +
                        "&subdireccion_id=" + lst_subdireccion_id +
                        "&inventario=" + txt_inventario +
                        "&serie=" + txt_serie +
                        "&usuario=" + txt_usuario,

                    type: 'GET',
                },
                columnDefs:[{
                    targets: "_all",
                    sortable: false
                }],
                columns: [
                    {"data": "id"},
                    {"data": "programa"},
                    {"data": "Descripcion"},
                    {"data": "tipoCpu"},
                    {"data": "marca"},
                    {"data": "modelo"},
                    {"data": "direccion"},
                    {"data": "subdireccion"},
                    {"data": "inventario"},
                    {"data": "serie"},
                    {"data": "usuario"},
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
        };

        return {

            //main function to initiate the module
            init: function() {
                initTable1();
            },

        };

    }();

    jQuery(document).ready(function() {
        KTDatatables.init();
    });

    getTotalEquipos('SOFTWARE');

    cambiarAllColorBordes('SOFTWARE');

</script>
