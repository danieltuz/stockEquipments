<!-- CSFR token for ajax call -->
<meta name="_token" content="{{ csrf_token() }}"/>

<link href="{{ asset('assets/css/pages/wizard/wizard-4.css') }}" rel="stylesheet" type="text/css" />

<br>

<div class="content d-flex flex-column flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
            <!--Begin::Header-->
            <div class="card-header card-header-tabs-line">
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">

                        {{--EDIFICIO--}}
                        <li class="nav-item mr-3">
                            <a class="nav-link active" data-toggle="tab" href="#kt_apps_edificio">
                                    <span class="nav-icon mr-2">
                                        <span class="svg-icon mr-3">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" fill="#000000"/>
                                                    <rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
                                                    <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                <span class="nav-text font-weight-bold">Edificio</span>
                            </a>
                        </li>
                        {{--EQUIPOS--}}
                        <li class="nav-item mr-3">
                            <a class="nav-link" data-toggle="tab" href="#kt_apps_equipo">
                                    <span class="nav-icon mr-2">
                                        <span class="svg-icon mr-3">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3"/>
                                                    <path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                <span class="nav-text font-weight-bold">Equipo</span>
                            </a>
                        </li>
                        {{--USUARIOS--}}
                        <li class="nav-item mr-3">
                            <a class="nav-link" data-toggle="tab" href="#kt_apps_usuarios">
                                    <span class="nav-icon mr-2">
                                        <span class="svg-icon mr-3">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                    <path d="M12,13 C10.8954305,13 10,12.1045695 10,11 C10,9.8954305 10.8954305,9 12,9 C13.1045695,9 14,9.8954305 14,11 C14,12.1045695 13.1045695,13 12,13 Z" fill="#000000" opacity="0.3"/>
                                                    <path d="M7.00036205,18.4995035 C7.21569918,15.5165724 9.36772908,14 11.9907452,14 C14.6506758,14 16.8360465,15.4332455 16.9988413,18.5 C17.0053266,18.6221713 16.9988413,19 16.5815,19 C14.5228466,19 11.463736,19 7.4041679,19 C7.26484009,19 6.98863236,18.6619875 7.00036205,18.4995035 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                <span class="nav-text font-weight-bold">Usuario</span>
                            </a>
                        </li>
                        {{--CONECTIVIDAD--}}
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_apps_conectividad">
                                    <span class="nav-icon mr-2">
                                        <span class="svg-icon mr-3">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M3.5,3 L5,3 L5,19.5 C5,20.3284271 4.32842712,21 3.5,21 L3.5,21 C2.67157288,21 2,20.3284271 2,19.5 L2,4.5 C2,3.67157288 2.67157288,3 3.5,3 Z" fill="#000000"/>
                                                    <path d="M6.99987583,2.99995344 L19.754647,2.99999303 C20.3069317,2.99999474 20.7546456,3.44771138 20.7546439,3.99999613 C20.7546431,4.24703684 20.6631995,4.48533385 20.497938,4.66895776 L17.5,8 L20.4979317,11.3310353 C20.8673908,11.7415453 20.8341123,12.3738351 20.4236023,12.7432941 C20.2399776,12.9085564 20.0016794,13 19.7546376,13 L6.99987583,13 L6.99987583,2.99995344 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                <span class="nav-text font-weight-bold">Conectividad</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!--end::Header-->
            <!--Begin::Body-->
            <div class="card-body">
                <div class="tab-content pt-5">

                {{--EDIFICIO CONTENIDO--}}
                <!--begin::Tab Content-->
                    <div class="tab-pane active" id="kt_apps_edificio" role="tabpanel">
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 text-right col-form-label" id="bk_edificios_create_id">Edificio</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select  id="edificios_create_id"
                                             class="form-control"
                                             data-size="7">
                                            @foreach($edificios as $edificio)
                                                <option {{ $equipos->edificios_id==$edificio->id ? "selected" : "" }}
                                                        value="{{ $edificio->id }}">{{ $edificio->nombre }} </option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 text-right col-form-label" id="bk_direccions_create_id">Dirección</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select name="direccions_create_id" id="direccions_create_id" class="form-control">
                                        @foreach($direccions as $direccion)
                                            <option {{ $equipos->direccions_id==$direccion->id ? "selected" : "" }}
                                                    value="{{ $direccion->id }}">{{ $direccion->nombre }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 text-right col-form-label" id="bk_subdireccion_create_id">Subdirección</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select name="subdireccion_create_id" id="subdireccion_create_id" class="form-control">
                                        @foreach($subdireccions as $subdireccion)
                                            <option {{ $equipos->subdireccions_id==$subdireccion->id ? "selected" : "" }}
                                                    value="{{ $subdireccion->id }}">{{ $subdireccion->nombre }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 text-right col-form-label" id="bk_coordinacions_create_id">Coordinación</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select name="coordinacions_create_id" id="coordinacions_create_id" class="form-control">
                                        @foreach($coord as $coordinacion)
                                            <option {{ $equipos->coordinacions_id==$coordinacion['id'] ? "selected" : "" }}
                                                    value="{{ $coordinacion['id'] }}">{{ $coordinacion['nombre'] }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="text-center">
                            <a href="javascript:void(0);" onclick="cargarformulario(14,0,1);"
                               class="btn btn-primary font-weight-bold btn-pill box-sombra">
                                Regresar
                            </a>
                        </div>
                    </div>
                    <!--end::Tab Content-->

                {{--EQUIPO CONTENIDO--}}
                <!--begin::Tab Content-->
                    <div class="tab-pane" id="kt_apps_equipo" role="tabpanel">
                        <form class="form">
                            <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $id }}"/>
                            <!--end::Heading-->
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="control-label" id="bk_tipo_cpus_create_id">CPU</label>
                                </div>
                                <div class="col-md-4">
                                    <select id="tipo_cpus_create_id" class="form-control" data-size="7">
                                        <option value="Seleccione">Seleccione</option>
                                        @foreach($tipoCpus as $tipoCpu)
                                            <option {{ $equipos->tipo_equipos_id==$tipoCpu->id ? "selected" : "" }}
                                                    value="{{ $tipoCpu->id }}">{{ $tipoCpu->nombre }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label class="control-label" id="bk_markas_create_id">Marca</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="hidden" id="hidden_marca_tipoEquipo" value="CPU">
                                    <select id="markas_create_id" class="form-control" data-size="7">
                                        @foreach($marcas as $marca)
                                            <option {{ $equipos->marcas_id==$marca->id ? "selected" : "" }}
                                                    value="{{ $marca->id }}">{{ $marca->nombre }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-2">
                                        <label class="control-label" id="bk_modelos_create_id">Modelo</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="hidden" id="hidden_marca_tipoEquipo" value="CPU">
                                        <select id="modelos_create_id" class="form-control" data-size="7">
                                            @foreach($modelos as $modelo)
                                                <option {{ $equipos->modelos_id == $modelo->id ? "selected" : "" }}
                                                        value="{{ $modelo->id }}">{{ $modelo->nombre }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="control-label" id="bk_procesadors_create_id">Procesador</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="procesadors_create_id" class="form-control">
                                            @foreach($procesadors as $procesador)
                                                <option {{ $equipos->procesadors_id == $procesador->id ? "selected" : "" }}
                                                        value="{{ $procesador->id }}">{{ $procesador->nombre }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <label class="control-label" id="bk_windows_create_id">Windows</label>
                                </div>
                                <div class="col-md-4">
                                    <select id="windows_create_id" class="form-control" data-size="7">
                                        @foreach($windows as $window)
                                            <option {{ $equipos->windows_id == $window->id ? "selected" : "" }}
                                                    value="{{ $window->id }}">{{ $window->win_version }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <label class="control-label" id="bk_sos_create_id">SO</label>
                                </div>
                                <div class="col-md-4">
                                    <select id="sos_create_id" class="form-control" data-size="7">
                                        @foreach($sos as $so)
                                            <option {{ $equipos->sos_id == $so->id ? "selected" : "" }}
                                                    value="{{ $so->id }}">{{ $so->nombre }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-4">

                                </div>

                                <div class="col-md-2">
                                    <label class="control-label" id="bk_fecha_compra">Fecha de Compra</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="fecha_compra" class="form-control" {{ $equipos->fecha_compra }}>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ram-tab" data-toggle="tab" href="#ram">
                                                <span class="nav-icon">
                                                    <i class="fa fa-memory"></i>
                                                </span>
                                                <span class="nav-text">Memoria RAM</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5" id="myTabContent">
                                        <div class="tab-pane fade show active" id="ram" role="tabpanel" aria-labelledby="ram-tab">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <label class="control-label" id="bk_n_bancos">#Bancos</label>
                                                    </td>
                                                    <td>
                                                        <select id="n_bancos" class="form-control">
                                                            <option value="Seleccione">Seleccione</option>
                                                            <option value="1" @if ($equipos->n_bancos==1) {{ 'selected' }} @endif>{{ 1 }}</option>
                                                            <option value="2" @if ($equipos->n_bancos==2) {{ 'selected' }} @endif>{{ 2 }}</option>
                                                            <option value="3" @if ($equipos->n_bancos==3) {{ 'selected' }} @endif>{{ 3 }}</option>
                                                            <option value="4" @if ($equipos->n_bancos==4) {{ 'selected' }} @endif>{{ 4 }}</option>
                                                        </select>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label" id="bk_tipo_frecuencia1">Banco1</label>
                                                    </td>
                                                    <td style="width: 150px">
                                                        <select id="tipo_frecuencia1" class="form-control">
                                                            @foreach($rams as $ram)
                                                                <option {{ $equipos->tipo_frecuencia1 == $ram->id ? "selected" : "" }}
                                                                        value="{{ $ram->id }}">{{ $ram->tipo_frecuencia }} </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <label class="control-label" id="bk_tamanio_ram1">Tamaño</label>
                                                    </td>
                                                    <td  style="width: 100px;">
                                                        <input type="number"
                                                               id="tamanio_ram1"
                                                               class="form-control"
                                                               value="{{ $equipos->tamanio_ram1 }}"
                                                               onblur="SumaRam()"
                                                               placeholder="1, 2, etc.. ">
                                                    </td>
                                                    <td>
                                                        <select id="medida1" class="form-control">
                                                            <option value="GB" @if ($equipos->medida1=='GB') {{ 'selected' }} @endif>{{ 'GB' }}</option>
                                                            <option value="MB" @if ($equipos->medida1=='MB') {{ 'selected' }} @endif>{{ 'MB' }}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label" id="bk_tipo_frecuencia2">Banco2</label>
                                                    </td>
                                                    <td style="width: 150px">
                                                        <select id="tipo_frecuencia2" class="form-control">
                                                            @foreach($rams as $ram)
                                                                <option {{ $equipos->tipo_frecuencia2 == $ram->id ? "selected" : "" }}
                                                                        value="{{ $ram->id }}">{{ $ram->tipo_frecuencia }} </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <label class="control-label" id="bk_tamanio_ram2">Tamaño</label>
                                                    </td>
                                                    <td  style="width: 100px;">
                                                        <input type="number"
                                                               id="tamanio_ram2"
                                                               class="form-control"
                                                               onblur="SumaRam()"
                                                               value="{{ $equipos->tamanio_ram2 }}"
                                                               placeholder="1, 2, etc.. ">
                                                    </td>
                                                    <td>
                                                        <select id="medida2" class="form-control">
                                                            <option value="GB" @if ($equipos->medida2=='GB') {{ 'selected' }} @endif>{{ 'GB' }}</option>
                                                            <option value="MB" @if ($equipos->medida2=='MB') {{ 'selected' }} @endif>{{ 'MB' }}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label" id="bk_tipo_frecuencia3">Banco3</label>
                                                    </td>
                                                    <td style="width: 150px">
                                                        <select id="tipo_frecuencia3" class="form-control">
                                                            @foreach($rams as $ram)
                                                                <option {{ $equipos->tipo_frecuencia3 == $ram->id ? "selected" : "" }}
                                                                        value="{{ $ram->id }}">{{ $ram->tipo_frecuencia }} </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <label class="control-label" id="bk_tamanio_ram3">Tamaño</label>
                                                    </td>
                                                    <td  style="width: 100px;">
                                                        <input type="number"
                                                               id="tamanio_ram3"
                                                               class="form-control"
                                                               onblur="SumaRam()"
                                                               value="{{ $equipos->tamanio_ram3 }}"
                                                               placeholder="1, 2, etc.. ">
                                                    </td>
                                                    <td>
                                                        <select id="medida3" class="form-control">
                                                            <option value="GB" @if ($equipos->medida3=='GB') {{ 'selected' }} @endif>{{ 'GB' }}</option>
                                                            <option value="MB" @if ($equipos->medida3=='MB') {{ 'selected' }} @endif>{{ 'MB' }}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label" id="bk_tipo_frecuencia4">Banco4</label>
                                                    </td>
                                                    <td style="width: 150px">
                                                        <select id="tipo_frecuencia4" class="form-control">
                                                            @foreach($rams as $ram)
                                                                <option {{ $equipos->tipo_frecuencia4 == $ram->id ? "selected" : "" }}
                                                                        value="{{ $ram->id }}">{{ $ram->tipo_frecuencia }} </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <label class="control-label" id="bk_tamanio_ram4">Tamaño</label>
                                                    </td>
                                                    <td  style="width: 100px;">
                                                        <input type="number"
                                                               id="tamanio_ram4"
                                                               class="form-control"
                                                               onblur="SumaRam()"
                                                               value="{{ $equipos->tamanio_ram4 }}"
                                                               placeholder="1, 2, etc.. ">
                                                    </td>
                                                    <td>
                                                        <select id="medida4" class="form-control">
                                                            <option value="GB" @if ($equipos->medida4=='GB') {{ 'selected' }} @endif>{{ 'GB' }}</option>
                                                            <option value="MB" @if ($equipos->medida4=='MB') {{ 'selected' }} @endif>{{ 'MB' }}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="control-label"></label>
                                                    </td>
                                                    <td style="width: 150px">
                                                    </td>
                                                    <td>
                                                        <label class="control-label">Total RAM</label>
                                                    </td>
                                                    <td  style="width: 100px;">
                                                        <label type="text"
                                                               id="total_ram"
                                                               class="form-control">{{ $equipos->total_ram   }}</label>
                                                    </td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option value="GB">GB</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <div class="col-md-6">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="hdd-tab" data-toggle="tab" href="#hdd">
                                                <span class="nav-icon">
                                                    <i class="far fa-hdd"></i>
                                                </span>
                                                <span class="nav-text">Discos Duros</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5" id="myTabContent2">
                                        <table>
                                            <tr>
                                                <td>
                                                    <label class="control-label" id="bk_n_discos">#Discos</label>
                                                </td>
                                                <td>
                                                    <select id="n_discos" class="form-control">
                                                        <option value="Seleccione">Seleccione</option>
                                                        <option value="1" @if ($equipos->n_discos==1) {{ 'selected' }} @endif>{{ 1 }}</option>
                                                        <option value="2" @if ($equipos->n_discos==2) {{ 'selected' }} @endif>{{ 2 }}</option>
                                                        <option value="3" @if ($equipos->n_discos==3) {{ 'selected' }} @endif>{{ 3 }}</option>
                                                        <option value="4" @if ($equipos->n_discos==4) {{ 'selected' }} @endif>{{ 4 }}</option>
                                                    </select>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="control-label" id="bk_tipo_tamanio1" >Disco1</label>
                                                </td>
                                                <td style="width: 150px">
                                                    <select id="tipo_tamanio1" class="form-control">
                                                        <option value="Seleccione">Seleccione</option>
                                                        @foreach($hdds as $hdd)
                                                            <option {{ $equipos->tipo_tamanio1 == $hdd->id ? "selected" : "" }}
                                                                    value="{{ $hdd->id }}">{{ $hdd->tipo_tamanio }} </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <label class="control-label" id="bk_tamanio_hdd1">Tamaño</label>
                                                </td>
                                                <td  style="width: 100px;">
                                                    <input type="number"
                                                           id="tamanio_hdd1"
                                                           class="form-control"
                                                           onblur="SumaHdd()"
                                                           value="{{ $equipos->tamanio_hdd1 }}"
                                                           placeholder="1, 2, etc.. ">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="gb1">
                                                        <option value="GB">GB</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="control-label" id="bk_tipo_tamanio2" >Disco2</label>
                                                </td>
                                                <td style="width: 150px">
                                                    <select id="tipo_tamanio2" class="form-control">
                                                        <option value="Seleccione">Seleccione</option>
                                                        @foreach($hdds as $hdd)
                                                            <option {{ $equipos->tipo_tamanio2 == $hdd->id ? "selected" : "" }}
                                                                    value="{{ $hdd->id }}">{{ $hdd->tipo_tamanio }} </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <label class="control-label" id="bk_tamanio_hdd2">Tamaño</label>
                                                </td>
                                                <td  style="width: 100px;">
                                                    <input type="number"
                                                           id="tamanio_hdd2"
                                                           class="form-control"
                                                           onblur="SumaHdd()"
                                                           value="{{ $equipos->tamanio_hdd2 }}"
                                                           placeholder="1, 2, etc.. ">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="gb2">
                                                        <option value="GB">GB</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="control-label" id="bk_tipo_tamanio3" >Disco3</label>
                                                </td>
                                                <td style="width: 150px">
                                                    <select id="tipo_tamanio3" class="form-control">
                                                        <option value="Seleccione">Seleccione</option>
                                                        @foreach($hdds as $hdd)
                                                            <option {{ $equipos->tipo_tamanio3 == $hdd->id ? "selected" : "" }}
                                                                    value="{{ $hdd->id }}">{{ $hdd->tipo_tamanio }} </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <label class="control-label" id="bk_tamanio_hdd3">Tamaño</label>
                                                </td>
                                                <td  style="width: 100px;">
                                                    <input type="number"
                                                           id="tamanio_hdd3"
                                                           class="form-control"
                                                           onblur="SumaHdd()"
                                                           value="{{ $equipos->tamanio_hdd3 }}"
                                                           placeholder="1, 2, etc.. ">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="gb3">
                                                        <option value="GB">GB</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="control-label" id="bk_tipo_tamanio4" >Disco4</label>
                                                </td>
                                                <td style="width: 150px">
                                                    <select id="tipo_tamanio4" class="form-control">
                                                        <option value="Seleccione">Seleccione</option>
                                                        @foreach($hdds as $hdd)
                                                            <option {{ $equipos->tipo_tamanio4 == $hdd->id ? "selected" : "" }}
                                                                    value="{{ $hdd->id }}">{{ $hdd->tipo_tamanio }} </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <label class="control-label" id="bk_tamanio_hdd4">Tamaño</label>
                                                </td>
                                                <td  style="width: 100px;">
                                                    <input type="number"
                                                           id="tamanio_hdd4"
                                                           class="form-control"
                                                           onblur="SumaHdd()"
                                                           value="{{ $equipos->tamanio_hdd4 }}"
                                                           placeholder="1, 2, etc.. ">
                                                </td>
                                                <td>
                                                    <select class="form-control" id="gb4">
                                                        <option value="GB">GB</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="control-label"></label>
                                                </td>
                                                <td style="width: 150px">
                                                </td>
                                                <td>
                                                    <label class="control-label">Total HDD</label>
                                                </td>
                                                <td  style="width: 100px;">
                                                    <label type="number"
                                                           id="total_hdd"
                                                           class="form-control">{{ $equipos->total_hdd }}</label>

                                                </td>
                                                <td>
                                                    <select class="form-control" id="gb4">
                                                        <option value="GB">GB</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </form>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="text-center">
                            <a href="javascript:void(0);" onclick="cargarformulario(14,0,1);"
                               class="btn btn-primary font-weight-bold btn-pill box-sombra">
                                Regresar
                            </a>
                        </div>
                    </div>
                <!--end::Tab Content-->

                {{--USUARIOS--}}
                <!--begin::Tab Content-->
                    <div class="tab-pane" id="kt_apps_usuarios" role="tabpanel">
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 text-right col-form-label" id="bk_usuario_create">Usuario</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" id="usuario_create" name="usuario_create" class="form-control" value="{{ $usuario }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 text-right col-form-label" id="bk_usuario_create">#Inventario</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text"
                                           id="inventario_create"
                                           name="inventario_create"
                                           class="form-control"
                                           value="{{ $inventario }}"
                                           placeholder="Nota: si no tiene #Inventario escribir S/N">
                                    <label id="inventario_duplicado"
                                           style="color: red">El # de Inventario ingresado ya existe en el sistema</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 text-right col-form-label" id="bk_serie_create">#Serie</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" id="serie_create" name="serie_create" class="form-control" value="{{ $serie }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 text-right col-form-label" id="bk_condicions_create_id">Condición</label>
                                <div class="col-lg-9 col-xl-6">
                                    <select name="condicions_create_id" id="condicions_create_id" class="form-control">
                                        @foreach($condicions as $condicion)
                                            <option {{ $equipos->condicions_id==$condicion->id ? "selected" : "" }}
                                                    value="{{ $condicion->id }}">{{ $condicion->nombre }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 text-right col-form-label">Observaciones</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="text" id="observaciones_create" name="observaciones_create" class="form-control" value="{{ $observaciones }}">
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="text-center">
                                <a href="javascript:void(0);" onclick="cargarformulario(14,0,1);"
                                   class="btn btn-primary font-weight-bold btn-pill box-sombra">
                                    Regresar
                                </a>
                            </div>

                        </form>
                    </div>
                <!--end::Tab Content-->


                {{--CONECTIVIDAD--}}
                <!--begin::Tab Content-->
                    <div class="tab-pane" id="kt_apps_conectividad" role="tabpanel">
                        <form class="form">
                            <!--end::Heading-->
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="control-label" id="bk_nombre_host">Nombre del Host</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text"
                                           id="nombre_host"
                                           class="form-control"
                                           value="{{ $equipos->nombre_host }}"
                                           placeholder="Escriba un nombre de Host">
                                </div>

                                <div class="col-md-2">
                                </div>
                                <div class="col-md-4">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <label class="control-label" id="bk_user_admin">Usuario Administrador</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text"
                                           id="user_admin"
                                           class="form-control"
                                           value="{{ $equipos->user_admin }}"
                                           placeholder="Usuario que Configuró el Equipo">
                                </div>

                                <div class="col-md-2">
                                    <label class="control-label" id="bk_pass_admin">Password Asignado al Equipo Configurado</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text"
                                           id="pass_admin"
                                           class="form-control"
                                           value="{{ $equipos->pass_admin }}"
                                           placeholder="Password que Asignaron al Equipo Configurado">
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ram-tab" data-toggle="tab" href="#ram">
                                                <span class="nav-icon">
                                                    <i class="icon-xl la la-ethernet"></i>
                                                </span>
                                                <span class="nav-text">Red Ethernet</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5" id="myTabContent">
                                        <div class="tab-pane fade show active" id="ram" role="tabpanel" aria-labelledby="ram-tab">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <label class="control-label" id="bk_ethernet_ip">IP</label>
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                               id="ethernet_ip"
                                                               class="form-control"
                                                               value="{{ $equipos->ethernet_ip }}"
                                                               placeholder="0.0.0.0">
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label class="control-label" id="bk_ethernet_mac">MAC</label>
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                               id="ethernet_mac"
                                                               class="form-control"
                                                               value="{{ $equipos->ethernet_mac }}"
                                                               placeholder=" 00-00-00-00-00-00">
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label class="control-label" id="bk_ethernet_speed">Velocidad</label>
                                                    </td>
                                                    <td>
                                                        <select id="ethernet_speed" class="form-control">
                                                            <option value="Seleccione" selected>Seleccione</option>
                                                            <option value="10"   @if ($equipos->ethernet_speed=='10')
                                                                {{ 'selected' }} @endif>{{ '10' }}
                                                            </option>
                                                            <option value="100"  @if ($equipos->ethernet_speed=='100')
                                                                {{ 'selected' }} @endif>{{ '100' }}
                                                            </option>
                                                            <option value="1000" @if ($equipos->ethernet_speed=='1000')
                                                                {{ 'selected' }} @endif>{{ '1000' }}
                                                            </option>
                                                        </select>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <br>
                                <div class="col-md-6">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="hdd-tab" data-toggle="tab" href="#hdd">
                                                <span class="nav-icon">
                                                    <i class="icon-xl la la-wifi"></i>
                                                </span>
                                                <span class="nav-text">Red Wifi</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content mt-5" id="myTabContent2">
                                        <table>
                                            <tr>
                                                <td>
                                                    <label class="control-label" id="bk_wifi_ip">IP</label>
                                                </td>
                                                <td>
                                                    <input type="text"
                                                           id="wifi_ip"
                                                           class="form-control"
                                                           value="{{ $equipos->wifi_ip }}"
                                                           placeholder="0.0.0.0">
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="control-label" id="bk_wifi_mac">MAC</label>
                                                </td>
                                                <td>
                                                    <input type="text"
                                                           id="wifi_mac"
                                                           class="form-control"
                                                           value="{{ $equipos->wifi_mac }}"
                                                           placeholder=" 00-00-00-00-00-00">
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="control-label" id="bk_tipo_red">Tipo de Red</label>
                                                </td>
                                                <td>
                                                    <select id="tipo_red" class="form-control">
                                                        <option value="Seleccione" selected>Seleccione</option>
                                                        <option value="2.4 GHZ" @if ($equipos->tipo_red=='2.4 GHZ')
                                                            {{ 'selected' }} @endif>{{ '2.4 GHZ' }}
                                                        </option>
                                                        <option value="5.0 GHZ" @if ($equipos->tipo_red=='5.0 GHZ')
                                                            {{ 'selected' }} @endif>{{ '5.0 GHZ' }}
                                                        </option>
                                                    </select>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="text-center">
                            <a href="#" name="action_button"
                               id="action_button"
                               class="btn btn-success font-weight-bold btn-pill box-sombra">
                                GUARDAR
                            </a>
                        </div>
                    </div>
                <!--end::Tab Content-->

                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>

@include('includes.msg_error')     {{-- pantalla modal menaje de error --}}
<script src="{{ asset('blockUI/jquery.blockUI.js') }}"></script>
<script src="{{ asset('propias/msg_errores.js') }}"></script>
<script src="{{ asset('propias/funciones_comunes.js')}}"></script>

<script>
    debugger;
    var CSRF_TOKEN      = $('meta[name="_token"]').attr('content');
    var coordinacion_id = $('#hidden_coordinacion_id').val();
    var es_seleccion    = $('#hidden_seleccion').val();
    var equipo_id       = $('#hidden_id').val();

    document.getElementById("inventario_duplicado").style.display = "none";

    $('#edificios_create_id').select2();
    $('#direccions_create_id').select2();
    $('#subdireccion_create_id').select2();
    $('#coordinacions_create_id').select2();

    $('#tipo_cpus_create_id').select2();
    $('#markas_create_id').select2();
    $('#modelos_create_id').select2();
    $('#procesadors_create_id').select2();
    $('#windows_create_id').select2();
    $('#sos_create_id').select2();


    //este codigo selecciona el select de coordinacion en 'Seleccione'
    if (es_seleccion =='Seleccione') {
        $("#coordinacions_create_id").val(coordinacion_id);
    }

    $('#n_bancos').on('change', function () {
        var items =$('#n_bancos').val();
        debugger;
        ocultaRam();
        hideRam(items,'');
    });

    $('#n_discos').on('change', function () {
        var items =$('#n_discos').val();
        ocultaHdd();
        hideHdd(items,'');
    });

    $("#action_button").on('click', function () {

        var id = $("#hidden_id").val();

        debugger;
        errores = 0;

        n_rams=$('#n_bancos').val();
        n_hdds=$('#n_discos').val();

        validaCtls(n_rams,n_hdds);

        if (errores > 0) {
            $("#msj_errores").html();
            $('#formModal').modal('show');

        } else {
            $.ajax({
                url: '/equipos/cpu/update',
                method: 'post',
                data: {
                    '_token': CSRF_TOKEN,
                    'id': id,
                    'edificios_id'      : $('#edificios_create_id').val(),
                    'direccions_id'     : $('#direccions_create_id').val(),
                    'subdireccions_id'  : $('#subdireccion_create_id').val(),
                    'coordinacions_id'  : $('#coordinacions_create_id').val(),

                    'tipo_cpus_id'      : $('#tipo_cpus_create_id').val(),
                    'marcas_id'         : $('#markas_create_id').val(),
                    'modelos_id'        : $('#modelos_create_id').val(),
                    'procesadors_id'    : $('#procesadors_create_id').val(),
                    'windows_id'        : $('#windows_create_id').val(),
                    'sos_id'            : $('#sos_create_id').val(),

                    'n_bancos'          : $('#n_bancos').val(),
                    'tipo_frecuencia1'  : $('#tipo_frecuencia1').val(),
                    'tamanio_ram1'      : $('#tamanio_ram1').val(),
                    'medida1'           : $('#medida1').val(),

                    'tipo_frecuencia2'  : $('#tipo_frecuencia2').val(),
                    'tamanio_ram2'      : $('#tamanio_ram2').val(),
                    'medida2'           : $('#medida2').val(),

                    'tipo_frecuencia3'  : $('#tipo_frecuencia3').val(),
                    'tamanio_ram3'      : $('#tamanio_ram3').val(),
                    'medida3'           : $('#medida3').val(),

                    'tipo_frecuencia4'  : $('#tipo_frecuencia4').val(),
                    'tamanio_ram4'      : $('#tamanio_ram4').val(),
                    'medida4'           : $('#medida4').val(),

                    'total_ram'         : $('#total_ram').html(),

                    'n_discos'          : $('#n_discos').val(),
                    'tipo_tamanio1'     : $('#tipo_tamanio1').val(),
                    'tamanio_hdd1'      : $('#tamanio_hdd1').val(),

                    'tipo_tamanio2'     : $('#tipo_tamanio2').val(),
                    'tamanio_hdd2'      : $('#tamanio_hdd2').val(),

                    'tipo_tamanio3'     : $('#tipo_tamanio3').val(),
                    'tamanio_hdd3'      : $('#tamanio_hdd3').val(),

                    'tipo_tamanio4'     : $('#tipo_tamanio4').val(),
                    'tamanio_hdd4'      : $('#tamanio_hdd4').val(),

                    'total_hdd'         : $('#total_hdd').html(),

                    'fecha_compra'      : $('#fecha_compra').val(),

                    'usuario'           : $('#usuario_create').val(),
                    'inventario'        : $('#inventario_create').val(),
                    'serie'             : $('#serie_create').val(),
                    'condicions'        : $('#condicions_create_id').val(),
                    'observaciones'     : $('#observaciones_create').val(),

                    'nombre_host'       : $('#nombre_host').val(),
                    'user_admin'        : $('#user_admin').val(),
                    'pass_admin'        : $('#pass_admin').val(),
                    'ethernet_ip'       : $('#ethernet_ip').val(),
                    'ethernet_mac'      : $('#ethernet_mac').val(),
                    'ethernet_speed'    : $('#ethernet_speed').val(),
                    'wifi_ip'           : $('#wifi_ip').val(),
                    'wifi_mac'          : $('#wifi_mac').val(),
                    'tipo_red'          : $('#tipo_red').val(),
                },
                success: function (data) {

                    if ((data.errors)) {
                        console.log('error');
                    } else {
                        Swal.fire(
                            'Registro Actualizado!',
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

    function SumaRam()
    {
        var tamanio_ram1 = $('#tamanio_ram1').val();
        var tamanio_ram2 = $('#tamanio_ram2').val();
        var tamanio_ram3 = $('#tamanio_ram3').val();
        var tamanio_ram4 = $('#tamanio_ram4').val();

        var totalRam =  parseInt(tamanio_ram1) + parseInt(tamanio_ram2) + parseInt(tamanio_ram3) + parseInt(tamanio_ram4);

        $('#total_ram').html(totalRam);
    }

    function SumaHdd()
    {
        var tamanio_hdd1 = $('#tamanio_hdd1').val();
        var tamanio_hdd2 = $('#tamanio_hdd2').val();
        var tamanio_hdd3 = $('#tamanio_hdd3').val();
        var tamanio_hdd4 = $('#tamanio_hdd4').val();

        var total_hdd =  parseInt(tamanio_hdd1) + parseInt(tamanio_hdd2) + parseInt(tamanio_hdd3) + parseInt(tamanio_hdd4);

        $('#total_hdd').html(total_hdd);
    }

    function ocultaRam(){

        $i=1;
        for ($i=1; $i<=4; $i++){

            $tipo_frecuencia    ="tipo_frecuencia" + $i;
            $tamanio_ram        ="tamanio_ram" + $i;
            $medida             ="medida" + $i;
            $bk_tipo_frecuencia ="bk_tipo_frecuencia" + $i;
            $bk_tamanio_ram     ="bk_tamanio_ram" + $i;

            document.getElementById($tipo_frecuencia).style.display = "none";
            document.getElementById($tamanio_ram).style.display = "none";
            document.getElementById($medida).style.display = "none";
            document.getElementById($bk_tipo_frecuencia).style.display = "none";
            document.getElementById($bk_tamanio_ram).style.display = "none";


            // bk_tipo_frecuencia1	tipo_frecuencia1	bk_tamanio_ram1	tamanio_ram1	medida1
            // bk_tipo_frecuencia2	tipo_frecuencia2	bk_tamanio_ram2	tamanio_ram2	medida2
            // bk_tipo_frecuencia3	tipo_frecuencia3	bk_tamanio_ram3	tamanio_ram3	medida3
            // bk_tipo_frecuencia4	tipo_frecuencia4	bk_tamanio_ram4	tamanio_ram4	medida4



        }
    }

    function hideRam($items,$hs)
    {

        if ($hs === 'none') { $hideShow = "none"}
        if ($hs === '')     { $hideShow = ""}

        $i=1;
        for ($i=1; $i<=$items; $i++){

            $tipo_frecuencia    ="tipo_frecuencia" + $i;
            $tamanio_ram        ="tamanio_ram" + $i;
            $medida             ="medida" + $i;
            $bk_tipo_frecuencia ="bk_tipo_frecuencia" + $i;
            $bk_tamanio_ram     ="bk_tamanio_ram" + $i;

            document.getElementById($tipo_frecuencia).style.display = $hideShow;
            document.getElementById($tamanio_ram).style.display = $hideShow;
            document.getElementById($medida).style.display = $hideShow;
            document.getElementById($bk_tipo_frecuencia).style.display = $hideShow;
            document.getElementById($bk_tamanio_ram).style.display = $hideShow;

            // bk_tipo_frecuencia1	tipo_frecuencia1	bk_tamanio_ram1	tamanio_ram1	medida1
            // bk_tipo_frecuencia2	tipo_frecuencia2	bk_tamanio_ram2	tamanio_ram2	medida2
            // bk_tipo_frecuencia3	tipo_frecuencia3	bk_tamanio_ram3	tamanio_ram3	medida3
            // bk_tipo_frecuencia4	tipo_frecuencia4	bk_tamanio_ram4	tamanio_ram4	medida4

        }
    }

    function ocultaHdd(){
        $i=1;
        for ($i=1; $i<=4; $i++){

            $tipo_tamanio   ="tipo_tamanio" + $i;
            $tamanio_hdd    ="tamanio_hdd" + $i;
            $bk_tipo_tamanio="bk_tipo_tamanio" + $i;
            $bk_tamanio_hdd ="bk_tamanio_hdd" + $i;
            $gb             ="gb" + $i;

            document.getElementById($tipo_tamanio).style.display = "none";
            document.getElementById($tamanio_hdd).style.display = "none";
            document.getElementById($bk_tipo_tamanio).style.display = "none";
            document.getElementById($bk_tamanio_hdd).style.display = "none";
            document.getElementById($gb).style.display = "none";
        }
    }

    function hideHdd($items,$hs)
    {

        if ($hs === 'none') { $hideShow = "none"}
        if ($hs === '')     { $hideShow = ""}

        $i=1;
        for ($i=1; $i<=$items; $i++){

            $tipo_tamanio   ="tipo_tamanio" + $i;
            $tamanio_hdd    ="tamanio_hdd" + $i;
            $bk_tipo_tamanio="bk_tipo_tamanio" + $i;
            $bk_tamanio_hdd ="bk_tamanio_hdd" + $i;
            $gb             ="gb" + $i;

            document.getElementById($tipo_tamanio).style.display = $hideShow;
            document.getElementById($tamanio_hdd).style.display = $hideShow;
            document.getElementById($bk_tipo_tamanio).style.display = $hideShow;
            document.getElementById($bk_tamanio_hdd).style.display = $hideShow;
            document.getElementById($gb).style.display = $hideShow;
        }
    }

    // caragar subdirecciones
    $('#direccions_create_id').change(function(){
        cargarSubdireccion($('#direccions_create_id').val(),'CreaEdita');
        cargarCoordinacion($('#direccions_create_id').val(),$('#subdireccion_create_id').val(),'CreaEdita');
    });

    // caragar coordinaciones
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

</script>
