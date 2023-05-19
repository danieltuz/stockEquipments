<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>

<link href="{{ asset('assets/css/pages/wizard/wizard-2.css') }}" rel="stylesheet" type="text/css" />
<br>
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="card card-custom">
            <div class="card-body p-0">
                <!--begin: Wizard-->
                <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="first" data-wizard-clickable="false">
                    <!--begin: Wizard Nav-->
                    <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                        <!--begin::Wizard Step 1 Nav-->
                        <div class="wizard-steps">

                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <!--begin::Section-->
                                <h4 class="mb-10 font-weight-bold text-dark">Equipo a dar de Baja</h4>
                                <h6 class="font-weight-bolder mb-3">Ubicación:</h6>
                                <div class="text-dark-50 line-height-lg">
                                    <div><li>{{ $equipos[0]['edificio'] }}</li></div>
                                    <div><li>{{ $equipos[0]['direccion'] }}</li></div>

                                    @switch($equipos[0]['subdireccion'])
                                        @case("Seleccione")
                                        <div></div>
                                        @break

                                        @case("-")
                                        <div></div>
                                        @break

                                        @default
                                        <div><li>{{ $equipos[0]['subdireccion'] }}</li></div>
                                    @endswitch

                                    @switch($equipos[0]['coordinacion'])
                                        @case("Seleccione")
                                        <div></div>
                                        @break

                                        @case("-")
                                        <div></div>
                                        @break

                                        @default
                                        <div><li>{{ $equipos[0]['coordinacion'] }}</li></div>
                                    @endswitch

                                </div>
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <h6 class="font-weight-bolder mb-3">Equipo:</h6>
                                <div class="text-dark-50 line-height-lg">
                                    <div><li>{{ $equipos[0]['TipoCpu'] }}</li></div>
                                    <div><li>{{ $equipos[0]['marca'] }}</li></div>
                                    <div><li>{{ $equipos[0]['modelo'] }}</li></div>
                                    <div><li>{{ $equipos[0]['procesador'] }}</li></div>
                                    <div><li>Total RAM: {{ $equipos[0]['total_ram'] }}</li></div>
                                    <div><li>Total HDD: {{ $equipos[0]['total_hdd'] }}</li></div>
                                    <div><li>{{ $equipos[0]['windows'] }}</li></div>
                                    <div><li>{{ $equipos[0]['so'] }}</li></div>
                                </div>
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <h6 class="font-weight-bolder mb-3">Usuario:</h6>
                                <div class="text-dark-50 line-height-lg">
                                    <div><li>{{ $equipos[0]['usuario'] }}</li></div>
                                    <div><li>#Inventario - {{ $equipos[0]['inventaro'] }}</li></div>
                                    <div><li>#Serie - {{ $equipos[0]['serie'] }}</li></div>
                                    <div><li>Condicion - {{ $equipos[0]['condicion'] }}</li></div>
                                </div>
                                <!--end::Section-->
                            </div>

                        </div>
                    </div>
                    <!--end: Wizard Nav-->
                    <!--begin: Wizard Body-->
                    <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                        <!--begin: Wizard Form-->
                        <form id="form">
                            <div class="row">

                                <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $id }}"/>
                                <div class="offset-xxl-2 col-xxl-8">
                                    {{----}}

                                    <h4 class="mb-10 font-weight-bold text-dark">Información de la Baja</h4>
                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label id="bk_fecha_reporte">Fecha del Reporte</label>

                                        <div class="input-group date">
                                            <input type="text" class="form-control"
                                                   id="kt_datepicker_1"
                                                   readonly="readonly"
                                                   placeholder="Seleccione Fecha">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                   <i class="ki ki-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input-->

                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label id="bk_fecha_baja">Fecha Baja</label>

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
                                    <!--end::Input-->

                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label id="bk_n_orden"># de Orden</label>
                                        <input type="text" class="form-control" id="n_orden">
                                    </div>
                                    <!--end::Input-->

                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label>Observaciones de la Baja</label>
                                        <textarea class="form-control" rows="4" id="obs_baja"></textarea>
                                    </div>
                                    <!--end::Input-->

                                    <!--begin::Input-->
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label id="bk_descripcion_baja">Descripción de la Baja</label>
                                        <textarea class="form-control" rows="4" id="descripcion_baja"></textarea>
                                    </div>
                                    <!--end::Input-->

                                    <div class="text-center">

                                        <div class="alert alert-custom alert-outline-danger fade show mb-5" role="alert" id="msg_error" style="display: none">
                                            <div class="alert-icon">
                                                <i class="flaticon-warning"></i>
                                            </div>
                                            <div class="alert-text">
                                                <label  id="error_server"></label>
                                            </div>
                                            <div class="alert-close">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">
                                                        <i class="ki ki-close"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                        <a href="javascript:void(0);" onclick="cargarformulario(14,0,1);" class="btn btn-primary">Cancelar</a>
                                        <a href="#" name="action_button" id="action_button" class="btn btn-success">Aplicar la Baja</a>
                                    </div>
                                    {{----}}
                                </div>
                                <!--end: Wizard-->
                            </div>
                        </form>
                        <!--end: Wizard Form-->
                    </div>
                    <!--end: Wizard Body-->
                </div>
                <!--end: Wizard-->
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>

@include('includes.msg_error')     {{-- pantalla modal menaje de error --}}
<script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/pages/custom/wizard/wizard-2.js') }}"></script>
<script src="{{ asset('blockUI/jquery.blockUI.js') }}"></script>
<script src="{{ asset('propias/msg_errores.js') }}"></script>

<script>

    var CSRF_TOKEN = $('meta[name="_token"]').attr('content');

    $("#action_button").on('click', function() {

        var id=$("#hidden_id").val();
        debugger;

        errores = 0;
        validaCtls();

        if (errores > 0) {
            $("#msj_errores").html();
            $('#formModal').modal('show');

        } else {

            $.ajax({
                url: '/equipos/cpu/getBaja',
                method: 'get',
                data: {
                    '_token': CSRF_TOKEN,
                    'id': id,
                    'fecha_reporte'     : $('#kt_datepicker_1').val(),
                    'fecha_baja'        : $('#kt_datepicker_2').val(),
                    'n_orden'           : $('#n_orden').val(),
                    'obs_baja'          : $('#obs_baja').val(),
                    'descripcion_baja'  : $('#descripcion_baja').val(),
                },
                success: function (data) {
                    debugger;
                    if ((data.error === 'Error')) {
                        $('#error_server').html('ERROR: ' + data.messaje.errorInfo[2]);
                        document.getElementById("msg_error").style.display = "";
                    } else {
                        Swal.fire(
                            'El Equipo ha sido dado de Baja!',
                            '',
                            'success'
                        );
                        cargarformulario(14,0,1);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError);
                },
            })

        }
    });

</script>