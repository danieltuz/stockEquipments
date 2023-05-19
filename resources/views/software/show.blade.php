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
                                <h4 class="mb-10 font-weight-bold text-dark">Equipo dado de Baja</h4>
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
                                    <div><li>{{ $equipos[0]['TipoMonitor'] }}</li></div>
                                    <div><li>{{ $equipos[0]['marca'] }}</li></div>
                                    <div><li>{{ $equipos[0]['modelo'] }}</li></div>
                                    <div><li>{{ $equipos[0]['tamanio'] }}</li></div>
                                    <div><li>{{ $equipos[0]['fecha_compra'] }}</li></div>
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
                        <div class="row">
                            <div class="offset-xxl-2 col-xxl-8">
                                {{----}}
                                <h4 class="mb-10 font-weight-bold text-dark">Información de la Baja</h4>

                                <!--begin::Input-->
                                <div class="form-group fv-plugins-icon-container has-success">
                                    <label>Fecha del Reporte</label>
                                    <input type="text"
                                           class="form-control has-feedback-left" id="fecha_reporte"
                                           value="{{ $equipos[0]['fecha_reporte'] }}"
                                           disabled>
                                </div>
                                <!--end::Input-->

                                <!--begin::Input-->
                                <div class="form-group fv-plugins-icon-container has-success">
                                    <label>Fecha de la Baja</label>
                                    <input type="text"
                                           class="form-control has-feedback-left"
                                           value="{{ $equipos[0]['fecha_baja'] }}"
                                           disabled>
                                </div>
                                <!--end::Input-->

                                <!--begin::Input-->
                                <div class="form-group fv-plugins-icon-container has-success">
                                    <label># de Orden</label>
                                    <input type="text" class="form-control" value="{{ $equipos[0]['n_orden'] }}" disabled>
                                </div>
                                <!--end::Input-->

                                <!--begin::Input-->
                                <div class="form-group fv-plugins-icon-container has-success">
                                    <label>Observaciones de la Baja</label>
                                    <textarea class="form-control" rows="3" disabled>{{ $equipos[0]['obs_baja'] }}</textarea>
                                </div>
                                <!--end::Input-->

                                <!--begin::Input-->
                                <div class="form-group fv-plugins-icon-container has-success">
                                    <label>Descripción de la Baja</label>
                                    <textarea class="form-control" rows="3" disabled >{{ $equipos[0]['descripcion'] }}</textarea>
                                </div>
                                <!--end::Input-->

                                <div class="text-center">
                                    <a href="javascript:void(0);" onclick="cargarformulario(15,0,1);" class="btn btn-primary">Cerrar</a>
                                </div>
                                {{----}}
                            </div>
                            <!--end: Wizard-->
                        </div>
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

<script src="{{ asset('assets/js/pages/custom/wizard/wizard-2.js') }}"></script>
