<br>
<!--begin::Container-->
{{--<div class="container">
ESTA CLASE CENTRA TODO L QUE ESTE DENTRO de ella
</div>--}}

<input type="hidden" id="hidden_tipoEquipo" value="MONITOR">

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

            {{--<li class="nav-item mb-2" id="kt_demo_panel_toggle" data-toggle="tooltip" title="Check out more demos" data-placement="right">--}}
            <a href="javascript:;"
               class="btn btn-success btn-sm box-sombra" id="kt_demo_panel_toggle" data-placement="right">
                <i class="la la-eye"></i>
                Ver Columnas
            </a>
            &nbsp;
            <a href="javascript:;" class="btn btn-primary btn-sm box-sombra" onclick="cargarformulario(15.2,0,1);">
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
                {{--EDIFICIO--}}
                <td style="color: #0f0f0f" class="text-left col_edificio">
                    <b>Edificio</b>
                    <div class="input-group">
                        <select name="edificio_id" id="edificio_id" class="form-control form-control-sm form-filter datatable-input">
                            @foreach($edificios as $dato)
                                <option {{ $dato->id==1 ? "selected" : "" }}
                                        value="{{ $dato->id }}">{{ $dato->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_edificio" class="btn btn-default btn-sm" value="X">
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

                {{--COORDINACION--}}
                <td style="color: #0f0f0f" class="text-left col_coordinacion">
                    <b>Coordinación</b>
                    <div class="input-group">
                        <select name="coordinacion_id" id="coordinacion_id" class="form-control form-control-sm">
                            <option value="Seleccione">Seleccione</option>
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_coordinacion" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>

                {{--TIPO MONITOR--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_monitor">
                    <b>Tipo</b>
                    <div class="input-group">
                        <select name="tipo_monitor_id" id="tipo_monitor_id" class="form-control form-control-sm form-filter datatable-input">
                            <option value="1" selected>Seleccione</option>
                            @foreach($monitors as $dato)
                                <option value="{{ $dato->id }}">{{ $dato->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_tipo_monitor_id" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>

                {{--MARCAS--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_marcas">
                    <b>Marca</b>
                    <div class="input-group">
                        <input type="hidden" id="hidden_marca_tipoEquipo" value="MONITOR">
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

                {{--MODELOS--}}
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

                {{--TAMAÑO--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_tamanio">
                    <b>#Tamaño</b>
                    <div class="input-group">
                        <input class="form-control form-control-sm form-filter datatable-input" type="text" id="tamanio" name="tamanio">
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_tamanio" class="btn btn-default btn-sm" value="X">
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

                {{--ESTATUS--}}
                <td style="color: #0f0f0f" class="text-left">
                    <b>Estatus</b>
                    <div class="input-group">
                        <select name="estatus_id" id="estatus_id" class="form-control form-control-sm form-filter datatable-input">
                            <option value="Seleccione">Seleccione</option>
                            <option value="Activo" >Activo</option>
                            <option value="Baja">Baja</option>
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_estatus" class="btn btn-default btn-sm" value="X">
                        </div>
                    </div>
                </td>

                {{--CONDICION--}}
                <td style="color: #0f0f0f" class="text-left col_tipo_condicion">
                    <b>Condicion</b>
                    <div class="input-group">
                        <select name="condicion_id" id="condicion_id" class="form-control form-control-sm form-filter datatable-input">
                            @foreach($condiciones as $dato)
                                <option {{ $dato->id==1 ? "selected" : "" }}
                                        value="{{ $dato->id }}">{{ $dato->nombre }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-btn">
                            <input type="button" id="btn_close_condicion" class="btn btn-default btn-sm" value="X">
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

<!--begin::Demo Panel-->
<div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
        <h4 class="font-weight-bold m-0">Columnas a Mostrar</h4>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content">

        <div class="form-group row">

            {{--EDIFICIO--}}
            <label class="col-6 col-form-label">Edificio</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeEdificio" name="hiddeEdificio" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkEdificio" name="ChkEdificio"  value="0">
                 <span></span>
                </label>
               </span>
            </div>

            {{--DIRECCION--}}
            <label class="col-6 col-form-label">Dirección</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeDireccion" name="hiddeDireccion" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkDireccion" name="ChkDireccion" value="0">
                 <span></span>
                </label>
               </span>
            </div>

            {{--SUBDIRECCION--}}
            <label class="col-6 col-form-label">Subdirección</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeSubdireccion" name="hiddeSubdireccion" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkSubdireccion" name="ChkSubdireccion" value="0">
                 <span></span>
                </label>
               </span>
            </div>

            {{--COORDINACION--}}
            <label class="col-6 col-form-label">Coordinación</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeCoordinacion" name="hiddeCoordinacion" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox"  id="ChkCoordinacion" name="ChkCoordinacion" value="1">
                 <span></span>
                </label>
               </span>
            </div>

            {{--TIPO MONITOR--}}
            <label class="col-6 col-form-label">Tipo de Monitor</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeTipoMonitor" name="hiddeTipoMonitor" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkTipoMonitor" name="ChkTipoMonitor" value="0">
                 <span></span>
                </label>
               </span>
            </div>

            {{--MARCA--}}
            <label class="col-6 col-form-label">Marca</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeMarca" name="hiddeMarca" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkMarca" name="ChkMarca" value="0">
                 <span></span>
                </label>
               </span>
            </div>

            {{--MODELO--}}
            <label class="col-6 col-form-label">Modelo</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeModelo" name="hiddeModelo" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkModelo" name="ChkModelo" value="0">
                 <span></span>
                </label>
               </span>
            </div>

            {{--TAMAÑO--}}
            <label class="col-6 col-form-label">Tamaño</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeTamanio" name="hiddeTamanio" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkTamanio" name="ChkTamanio" value="0">
                 <span></span>
                </label>
               </span>
            </div>

            {{--#INVENTARIO--}}
            <label class="col-6 col-form-label"># Inventario</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeInventario" name="hiddeInventario" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkInventario" name="ChkInventario"  value="0">
                 <span></span>
                </label>
               </span>
            </div>

            {{--#SERIE--}}
            <label class="col-6 col-form-label"># Serie</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeSerie" name="hiddeSerie" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkSerie" name="ChkSerie" value="0">
                 <span></span>
                </label>
               </span>
            </div>


            {{--USUARIO--}}
            <label class="col-6 col-form-label">Usuario</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeUsuario" name="hiddeUsuario" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkUsuario" name="ChkUsuario"  value="0">
                 <span></span>
                </label>
               </span>
            </div>


            {{--ESTATUS--}}
            <label class="col-6 col-form-label">Estatus</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeEstatus" name="hiddeEstatus" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox" checked id="ChkEstatus" name="ChkEstatus" value="0">
                 <span></span>
                </label>
               </span>
            </div>

            {{--CONDICION DEL EQUIPO--}}
            <label class="col-6 col-form-label">Condición del Equipo</label>
            <div class="col-3">
                <input type="text"  hidden="true" id="hiddeCondicion" name="hiddeCondicion" value="0">
                <span class="switch switch-sm switch-icon">
                <label>
                    <input type="checkbox"  id="ChkCondicion" name="ChkCondicion">
                 <span></span>
                </label>
               </span>
            </div>
        </div>
    </div>
    <!--end::Content-->
</div>
<!--end::Demo Panel-->


<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('blockUI/jquery.blockUI.js') }}"></script>
<script src="{{ asset('propias/funciones_comunes.js') }}"></script>
<script src="{{ asset('propias/eventos_select.js') }}"></script>

<script>

    pleasWait();


    var KTDatatables = function() {

        var initTable1 = function() {
            // begin first table


            var lst_edificio_id = $('#edificio_id').val();
            var lst_direccion_id = $('#direccion_id').val();

            debugger;

            if ($('#subdireccion_id').val() != null) {

                var combo_sub = document.getElementById("subdireccion_id");
                var sel_sub = combo_sub.options[combo_sub.selectedIndex].text;
                var lst_subdireccion_txt = sel_sub;
                var lst_subdireccion_id = $('#subdireccion_id').val();

            }else{

                var lst_subdireccion_txt = 'Seleccione';
                var lst_subdireccion_id = null;
            }

            if ($('#coordinacion_id').val() != null) {
                var combo_cor = document.getElementById("coordinacion_id");
                var sel_cor = combo_cor.options[combo_cor.selectedIndex].text;
                var lst_coordinacion_txt = sel_cor;
                var lst_coordinacion_id = $('#coordinacion_id').val();

            }else{

                var lst_coordinacion_txt = 'Seleccione';
                var lst_coordinacion_id = null;
            }

            var lst_tipo_monitor_id = $('#tipo_monitor_id').val();
            var lst_marca_id = $('#marcas_id').val();

            var combo_mod = document.getElementById("modelos_index_id");
            var sel_mod = combo_mod.options[combo_mod.selectedIndex].text;
            var lst_modelos_txt = sel_mod;
            var lst_modelos_id = $('#modelos_index_id').val();

            var txt_tamanio = $('#tamanio').val();
            var txt_inventario = $('#inventario').val();
            var txt_serie = $('#serie').val();
            var txt_usuario = $('#usuario').val();
            var lst_estatus = $('#estatus_id').val();
            var lst_condicion_id = $('#condicion_id').val();

            //evita que la ruta dinamica que se genera para exportar a excel arroje 404 por los
            //txt_tamanio, txt_inventario, txt_serie, txt_usuario

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

            if ($('#tamanio').val().length === 0){

                var txt_tamanio = 'disabled';

            }else{

                var txt_tamanio = $('#tamanio').val();

            }

            debugger;

            var html = '';
            html += `<div class="btn btn-success"  type="button">`;
            html += `<a href="{{ url('/equipos/display/excel') }}/${lst_edificio_id}/${lst_direccion_id}/${lst_subdireccion_id}/${lst_subdireccion_txt}/${lst_coordinacion_id}/${lst_coordinacion_txt}/${lst_tipo_monitor_id}/${lst_marca_id}/${lst_modelos_id}/${lst_modelos_txt}/${txt_tamanio}/${txt_inventario}/${txt_serie}/${txt_usuario}/${lst_estatus}/${lst_condicion_id}">`;
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
                    url: '/equipos/display/getDisplay?edificio_id=' + lst_edificio_id +
                        "&direccion_id=" + lst_direccion_id +
                        "&subdireccion_id=" + lst_subdireccion_id +
                        "&subdireccion_txt=" + lst_subdireccion_txt +
                        "&coordinacion_id=" + lst_coordinacion_id +
                        "&coordinacion_txt=" + lst_coordinacion_txt +
                        "&monitor_id=" + lst_tipo_monitor_id +
                        "&marca_id=" + lst_marca_id +
                        "&modelos_id=" + lst_modelos_id +
                        "&tamanio_txt=" + txt_tamanio +
                        "&modelos_txt=" + lst_modelos_txt +
                        "&inventario=" + txt_inventario +
                        "&serie=" + txt_serie +
                        "&usuario=" + txt_usuario +
                        "&estatus_id=" + lst_estatus +
                        "&condicion_id=" + lst_condicion_id,

                    type: 'GET',
                },
                columnDefs:[{
                    targets: "_all",
                    sortable: false
                }],
                columns: [
                    {data: 'id'},
                    {data: 'edificio'},
                    {data: 'direccion'},
                    {data: 'subdireccion'},
                    {data: 'coordinacion'},
                    {data: 'TipoMonitor'},
                    {data: 'marca'},
                    {data: 'modelo'},
                    {data: 'tamanio'},
                    {data: 'inventaro'},
                    {data: 'serie'},
                    {data: 'usuario'},
                    {data: 'estatus'},
                    {data: 'condicion'},
                    {data: 'action', orderable:false, searchable: false,className: "text-center"},
                ],
            });


            //coordinacion - oculto
            if( $('#ChkCoordinacion').prop('checked') )
            {
                table.column(4).visible( true );
            }else{
                table.column(4).visible( false );
            }

            //condicion - oculto
            if( $('#ChkCondicion').prop('checked') )
            {
                table.column(13).visible( true );
            }else{
                table.column(13).visible( false );
            }


            $('#kt_reset').on('click', function(e) {
                e.preventDefault();
                $('.datatable-input').each(function() {
                    $(this).val('');
                    table.column($(this).data('col-index')).search('', false, false);
                });
                table.table().draw();
            });

            $('#ChkEdificio').on('click', function () {
                debugger;
                if( $('#ChkEdificio').prop('checked') )
                {
                    table.column(1).visible( true );
                }else{
                    table.column(1).visible( false );
                }
            });

            $('#ChkDireccion').on('click', function () {
                if( $('#ChkDireccion').prop('checked') )
                {
                    table.column(2).visible( true );
                }else{
                    table.column(2).visible( false );
                }
            });

            $('#ChkSubdireccion').on('click', function () {
                if( $('#ChkSubdireccion').prop('checked') )
                {
                    table.column(3).visible( true );
                }else{
                    table.column(3).visible( false );
                }
            });

            $('#ChkCoordinacion').on('click', function () {
                if( $('#ChkCoordinacion').prop('checked') )
                {
                    table.column(4).visible( true );
                }else{
                    table.column(4).visible( false );
                }
            });

            $('#ChkTipoMonitor').on('click', function () {
                if( $('#ChkTipoMonitor').prop('checked') )
                {
                    table.column(5).visible( true );
                }else{
                    table.column(5).visible( false );
                }
            });

            $('#ChkMarca').on('click', function () {
                if( $('#ChkMarca').prop('checked') )
                {
                    table.column(6).visible( true );
                }else{
                    table.column(6).visible( false );
                }
            });

            $('#ChkModelo').on('click', function () {
                if( $('#ChkModelo').prop('checked') )
                {
                    table.column(7).visible( true );
                }else{
                    table.column(7).visible( false );
                }
            });

            $('#ChkTamanio').on('click', function () {
                if( $('#ChkTamanio').prop('checked') )
                {
                    table.column(8).visible( true );
                }else{
                    table.column(8).visible( false );
                }
            });

            $('#ChkInventario').on('click', function () {
                if( $('#ChkInventario').prop('checked') )
                {
                    table.column(9).visible( true );
                }else{
                    table.column(9).visible( false );
                }
            });

            $('#ChkSerie').on('click', function () {
                if( $('#ChkSerie').prop('checked') )
                {
                    table.column(10).visible( true );
                }else{
                    table.column(10).visible( false );
                }
            });

            $('#ChkUsuario').on('click', function () {
                if( $('#ChkUsuario').prop('checked') )
                {
                    table.column(11).visible( true );
                }else{
                    table.column(11).visible( false );
                }
            });

            $('#ChkEstatus').on('click', function () {
                if( $('#ChkEstatus').prop('checked') )
                {
                    table.column(12).visible( true );
                }else{
                    table.column(12).visible( false );
                }
            });

            $('#ChkCondicion').on('click', function () {
                if( $('#ChkCondicion').prop('checked') )
                {
                    table.column(13).visible( true );
                }else{
                    table.column(13).visible( false );
                }

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

     getTotalEquipos('MONITOR');

    cambiarAllColorBordes('MONITOR');

</script>