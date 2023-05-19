
<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>

<link href="{{ asset('assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />

<br>

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom card-transparent">
            <div class="card-body p-0">
                <!--begin::Wizard-->
                <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">

                    <!--begin::Wizard Nav-->
                    <div class="wizard-nav">
                        <div class="wizard-steps">
                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                <div class="wizard-wrapper">
                                    <div class="wizard-number">1</div>
                                    <div class="wizard-label">
                                        <div class="wizard-title">Edificio</div>
                                        <div class="wizard-desc">Dirección, Coordinación,...</div>
                                    </div>
                                </div>
                            </div>

                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-number">2</div>
                                    <div class="wizard-label">
                                        <div class="wizard-title">Monitor</div>
                                        <div class="wizard-desc">Tipo de Monitor, Marca...</div>
                                    </div>
                                </div>
                            </div>

                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-number">3</div>
                                    <div class="wizard-label">
                                        <div class="wizard-title">Usuario</div>
                                        <div class="wizard-desc">#Inventario, #Serie...</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end::Wizard Nav-->

                    <!--begin::Card-->
                    <div class="card card-custom card-shadowless rounded-top-0">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                <div class="col-xl-12 col-xxl-10">
                                    <!--begin::Wizard Form-->
                                    <form class="form" id="kt_form">
                                        @csrf
                                        <div class="row justify-content-center">
                                            <div class="col-xl-12">

                                                {{--EDIFICIO--}}
                                                <!--begin::Wizard Step 1-->
                                                <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">

                                                    <!--begin::Group EDIFICIO-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label" id="bk_edificios_create_id">Edificio</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select  id="edificios_create_id"
                                                                     class="form-control"
                                                                     data-size="7">
                                                                @foreach($edificios as $edificio)
                                                                    <option {{ $edificio->nombre=='Seleccione' ? "selected" : "" }}
                                                                            value="{{ $edificio->id }}">{{ $edificio->nombre }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end::Group EDIFICIO-->

                                                    <!--begin::Group DIRECCION-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label" id="bk_direccions_create_id">Dirección</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select id="direccions_create_id" class="form-control" data-size="7">
                                                                @foreach($direcciones as $direccion)
                                                                    <option {{ $direccion->nombre == 'Seleccione' ? "selected" : "" }}
                                                                            value="{{ $direccion->id }}">{{ $direccion->nombre }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end::Group DIRECCION-->

                                                    <!--begin::Group SUBDIRECCION-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label" id="bk_subdireccion_create_id">Subdirección</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select id="subdireccion_create_id" class="form-control" data-size="7">
                                                                <option value="Seleccione">Seleccione</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end::Group SUBDIRECCION-->

                                                    <!--begin::Group COORDINACION-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label" id="bk_coordinacions_create_id">Coordinación</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select id="coordinacions_create_id" class="form-control" data-size="7">
                                                                <option value="Seleccione">Seleccione</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end::Group COORDINACION-->

                                                </div>
                                                <!--end::Wizard Step 1-->

                                                {{--EQUIPO--}}
                                                <!--begin::Wizard Step 2-->
                                                <div class="my-5 step" data-wizard-type="step-content">

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label" id="bk_tipo_monitor_create_id">Tipo de Monitor</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select id="tipo_monitor_create_id" class="form-control">
                                                            <option value="Seleccione">Seleccione</option>
                                                                @foreach($monitors as $tipo)
                                                                    <option {{ $tipo->nombre == 'Seleccione' ? "selected" : "" }}
                                                                            value="{{ $tipo->id }}">{{ $tipo->nombre }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label" id="bk_markas_create_id">Marca</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input type="hidden" id="hidden_marca_tipoEquipo" value="MONITOR">
                                                            <select id="markas_create_id" class="form-control" data-size="7">
                                                                @foreach($marcas as $marca)
                                                                    <option {{ $marca->nombre == 'Seleccione' ? "selected" : "" }}
                                                                            value="{{ $marca->id }}">{{ $marca->nombre }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label" id="bk_modelos_create_id">Modelo</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input type="hidden" id="hidden_marca_tipoEquipo" value="MONITOR">
                                                            <select id="modelos_create_id" class="form-control" data-size="7">
                                                                <option value="Seleccione">Seleccione</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label" id="bk_tamanio">Tamaño</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input type="text" id="tamanio" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row fv-plugins-icon-container has-success">
                                                        <label class="col-xl-3 col-lg-3 col-form-label" id="bk_fecha_compra">Fecha de Compra</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group date">
                                                                <input type="text" class="form-control"
                                                                       id="kt_datepicker_2"
                                                                       readonly="readonly"
                                                                       placeholder="Seleccione Fecha">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">
                                                                        <i class="ki ki-calendar"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end::Wizard Step 2-->

                                                {{--USUARIO--}}
                                                <!--begin::Wizard Step 3-->
                                                <div class="my-5 step" data-wizard-type="step-content">

                                                    <!--begin::Group USUARIO-->
                                                    <div class="form-group row">

                                                        <label class="col-xl-3 col-lg-3 col-form-label"  id="bk_usuario_create">Usuario</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input type="text" id="usuario_create" class="form-control">
                                                        </div>
                                                    </div>
                                                    <!--end::Group USUARIO-->

                                                    <!--begin::Group #INVENTARIO-->
                                                    <div class="form-group row">

                                                        <label class="col-xl-3 col-lg-3 col-form-label"   id="bk_inventario_create">#Inventario</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input type="text"
                                                                   id="inventario_create"
                                                                   class="form-control"
                                                                   placeholder="Nota: si no tiene #Inventario escribir S/N">
                                                            <label id="inventario_duplicado"
                                                                   style="color: red">El # de Inventario ingresado ya existe en el sistema</label>
                                                        </div>
                                                    </div>
                                                    <!--end::Group #INVENTARIO-->

                                                    <!--begin::Group #SERIE-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label"  id="bk_serie_create">#Serie</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input type="text" id="serie_create" class="form-control">
                                                        </div>
                                                    </div>
                                                    <!--end::Group #SERIE-->

                                                    <!--begin::Group #CONDICION-->
                                                    <div class="form-group row">

                                                        <label class="col-xl-3 col-lg-3 col-form-label"  id="bk_condicions_create_id">Condición</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select id="condicions_create_id" class="form-control" data-size="7">
                                                                @foreach($condiciones as $condicion)
                                                                    <option {{ $condicion->nombre == 'Seleccione' ? "selected" : "" }}
                                                                            value="{{ $condicion->id }}">{{ $condicion->nombre }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end::Group #CONDICION-->

                                                    <!--begin::Group OBSERVACIONES-->
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label"  >Observaciones</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <textarea class="form-control" rows="4" id="observaciones_create"></textarea>
                                                        </div>
                                                    </div>
                                                    <!--end::Group OBSERVACIONES-->

                                                    <div class="text-right">
                                                        <a href="#"
                                                           name="action_button"
                                                           id="action_button"
                                                           class="btn btn-success font-weight-bolder px-9 py-4">GUARDAR</a>
                                                    </div>

                                                </div>
                                                <!--end::Wizard Step 3-->

                                                <!--begin::Wizard Actions-->
                                                <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                                    <div class="mr-2">
                                                        <button type="button" id="prev-step" class="btn btn-light-primary font-weight-bolder px-9 py-4" data-wizard-type="action-prev">Anterior</button>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="next-step" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">Siguiente</button>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Actions-->

                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Wizard Form-->
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Wizard-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

<script src="{{ asset('assets/js/pages/custom/user/add-user.js') }}"></script>
<script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}"></script>
<!--end::Page Scripts-->

@include('includes.msg_error')     {{-- pantalla modal menaje de error --}}
<script src="{{ asset('blockUI/jquery.blockUI.js') }}"></script>
<script src="{{ asset('propias/msg_errores.js') }}"></script>
<script src="{{ asset('propias/funciones_comunes.js') }}"></script>

<script>


    debugger;
    var CSRF_TOKEN = $('meta[name="_token"]').attr('content');
    var coordinacion_id = $('#hidden_coordinacion_id').val();
    var es_seleccion = $('#hidden_seleccion').val();

    document.getElementById("inventario_duplicado").style.display = "none";

    //este codigo selecciona el select de coordinacion en 'Seleccione'
    if (es_seleccion =='Seleccione') {
        $("#coordinacions_create_id").val(coordinacion_id);
    }

    $("#action_button").on('click', function () {

        debugger;
        errores = 0;

        //usado solo para agregar los CPUS
        n_rams=0;
        n_hdds=0;

        validaCtls(n_rams,n_hdds);

        if (errores > 0) {
            $("#msj_errores").html();
            $('#formModal').modal('show');

        } else {
            $.ajax({
                type: 'POST',
                '_token': CSRF_TOKEN,
                url: '/equipos/display/store',
                data: {
                    '_token': CSRF_TOKEN,
                    'edificios_id'      : $('#edificios_create_id').val(),
                    'direccions_id'     : $('#direccions_create_id').val(),
                    'subdireccions_id'  : $('#subdireccion_create_id').val(),
                    'coordinacions_id'  : $('#coordinacions_create_id').val(),

                    'monitors_id'       : $('#tipo_monitor_create_id').val(),
                    'marcas_id'         : $('#markas_create_id').val(),
                    'modelos_id'        : $('#modelos_create_id').val(),
                    'tamanio'           : $('#tamanio').val(),
                    'fecha_compra'      : $('#kt_datepicker_2').val(),

                    'usuario'           : $('#usuario_create').val(),
                    'inventaro'         : $('#inventario_create').val(),
                    'serie'             : $('#serie_create').val(),
                    'condicions_id'     : $('#condicions_create_id').val(),
                    'observaciones'     : $('#observaciones_create').val(),

                   },
                success: function (data) {

                    if ((data.errors)) {
                        console.log('error');
                    } else {
                        Swal.fire(
                            'Registro Creado!',
                            '',
                            'success'
                        );
                        cargarformulario(15,0,1);
                    }
                },
            })
        }
    });


    {{-- caragar subdirecciones --}}
    $('#direccions_create_id').change(function(){
        debugger;
        cargarSubdireccion($('#direccions_create_id').val(),'CreaEdita');
        cargarCoordinacion($('#direccions_create_id').val(),$('#subdireccion_create_id').val(),'CreaEdita');
    });

    {{-- caragar coordinaciones --}}
    $('#subdireccion_create_id').change(function(){
        cargarCoordinacion($('#direccions_create_id').val(),$('#subdireccion_create_id').val(),'CreaEdita');
    });

    {{-- caragar modelo --}}
    $('#markas_create_id').change(function(){

        /* Para obtener el valor */
        // var cod = document.getElementById("producto").value;
        // alert(cod);

        /* Para obtener el texto */
        // var combo = document.getElementById("marca_id");
        // var selected = combo.options[combo.selectedIndex].text;

        let mar_id = $('#markas_create_id').val();
        let vieneDePantalla = 'CreaEdita';
        let tipoEquipo = $('#hidden_marca_tipoEquipo').val();   //CPU, MONITOR

        debugger;

        cargarModelo(mar_id,tipoEquipo,vieneDePantalla);
    });


    {{-- valida que el #inventario no se repita --}}
    $('#inventario_create').change(function () {

        debugger;
        let n_inventario = $('#inventario_create').val();
        n_inventario=n_inventario.trim();

        if (n_inventario.length > 0){

            if(n_inventario != 'S/N'){
                buscaDuplicado('inventario');
            }
            //se activa el boton de aceptar
            if(n_inventario == 'S/N'){
                document.getElementById("action_button").style.display = "";
            }
        }

        //se oculta el mensaje de duplicidad
        if (n_inventario.length == 0) {
            document.getElementById("inventario_duplicado").style.display = "none";
            $('#inventario_create').val('');
        }
    });

    function buscaDuplicado($opcion) {

        // $("#element").hide();  // hide
        // $("#element").show();  // show

        // .hidden {display:none}
        // $("div").addClass("hidden");  // hide
        // $("div").removeClass("hidden"); // show

        if ($opcion == 'serie')     { $nombre = $('#serie_create').val();      }
        if ($opcion == 'inventario'){ $nombre = $('#inventario_create').val(); }



        duplicado='NO';

        if ($nombre.length > 0) {

            debugger;
            $.ajax({
                url: '/equipos/cpu/buscaDuplicado',
                data: {
                    'nombre': $nombre
                },
                success: function (data) {

                    if (data > 0) {
                        duplicado = 'SI';
                        document.getElementById("action_button").style.display = "none";
                        document.getElementById("inventario_duplicado").style.display = "block";
                    } else {

                        duplicado = 'NO';
                        document.getElementById("action_button").style.display = "";
                        document.getElementById("inventario_duplicado").style.display = "none";
                    }
                },
            })

        } else {

            duplicado = 'NO';
            errores = 1;

        }

        return duplicado;
    }

</script>

