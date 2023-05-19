
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
                                        <div class="wizard-title">Equipo</div>
                                        <div class="wizard-desc">Tipo de CPU, Marca...</div>
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

                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-number">4</div>
                                    <div class="wizard-label">
                                        <div class="wizard-title">Conectividad</div>
                                        <div class="wizard-desc">Host, Tarjeta de Red...</div>
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

                                                    <div class="row">
                                                        <div class="col-md-2">
                                                                <label class="control-label" id="bk_tipo_cpus_create_id">CPU</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select id="tipo_cpus_create_id" class="form-control" data-size="7">
                                                                <option value="Seleccione">Seleccione</option>
                                                                @foreach($tipo_equipos as $tipoCpu)
                                                                    <option {{ $tipoCpu->nombre == 'Seleccione' ? "selected" : "" }}
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
                                                                    <option {{ $marca->nombre == 'Seleccione' ? "selected" : "" }}
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
                                                                <option value="Seleccione">Seleccione</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <label class="control-label" id="bk_procesadors_create_id">Procesador</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select id="procesadors_create_id" class="form-control">
                                                                @foreach($procesadores as $procesador)
                                                                    <option {{ $procesador->nombre == 'Seleccione' ? "selected" : "" }}
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
                                                                    <option {{ $window->nombre == 'Seleccione' ? "selected" : "" }}
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
                                                                    <option {{ $so->nombre == 'Seleccione' ? "selected" : "" }}
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
                                                            <input type="text" id="fecha_compra" class="form-control">

                                                        </div>
                                                    </div>

                                                    <br>
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
                                                                                    <option value="1">1</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="4">4</option>
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
                                                                                    <option value="Seleccione">Seleccione</option>
                                                                                    @foreach($rams as $ram)
                                                                                        <option {{ $ram->nombre == 'Seleccione' ? "selected" : "" }}
                                                                                                value="{{ $ram->id }}">{{ $ram->tipo_frecuencia }} </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <label class="control-label" id="bk_tamanio_ram1">Tamaño</label>
                                                                            </td>
                                                                            <td  style="width: 100px;">
                                                                                <input type="number" id="tamanio_ram1" class="form-control" placeholder="1, 2, etc.. ">
                                                                            </td>
                                                                            <td>
                                                                                <select id="medida1" class="form-control">
                                                                                    <option value="GB">GB</option>
                                                                                    <option value="MB">MB</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <label class="control-label" id="bk_tipo_frecuencia2">Banco2</label>
                                                                            </td>
                                                                            <td style="width: 150px">
                                                                                <select id="tipo_frecuencia2" class="form-control">
                                                                                    <option value="Seleccione">Seleccione</option>
                                                                                    @foreach($rams as $ram)
                                                                                        <option {{ $ram->nombre == 'Seleccione' ? "selected" : "" }}
                                                                                                value="{{ $ram->id }}">{{ $ram->tipo_frecuencia }} </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <label class="control-label" id="bk_tamanio_ram2">Tamaño</label>
                                                                            </td>
                                                                            <td  style="width: 100px;">
                                                                                <input type="number" id="tamanio_ram2" class="form-control" placeholder="1, 2, etc.. ">
                                                                            </td>
                                                                            <td>
                                                                                <select id="medida2" class="form-control">
                                                                                    <option value="GB">GB</option>
                                                                                    <option value="MB">MB</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <label class="control-label" id="bk_tipo_frecuencia3">Banco3</label>
                                                                            </td>
                                                                            <td style="width: 150px">
                                                                                <select id="tipo_frecuencia3" class="form-control">
                                                                                    <option value="Seleccione">Seleccione</option>
                                                                                    @foreach($rams as $ram)
                                                                                        <option {{ $ram->nombre == 'Seleccione' ? "selected" : "" }}
                                                                                                value="{{ $ram->id }}">{{ $ram->tipo_frecuencia }} </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <label class="control-label" id="bk_tamanio_ram3">Tamaño</label>
                                                                            </td>
                                                                            <td  style="width: 100px;">
                                                                                <input type="number" id="tamanio_ram3" class="form-control" placeholder="1, 2, etc.. ">
                                                                            </td>
                                                                            <td>
                                                                                <select id="medida3" class="form-control">
                                                                                    <option value="GB">GB</option>
                                                                                    <option value="MB">MB</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <label class="control-label" id="bk_tipo_frecuencia4">Banco4</label>
                                                                            </td>
                                                                            <td style="width: 150px">
                                                                                <select id="tipo_frecuencia4" class="form-control">
                                                                                    <option value="Seleccione">Seleccione</option>
                                                                                    @foreach($rams as $ram)
                                                                                        <option {{ $ram->nombre == 'Seleccione' ? "selected" : "" }}
                                                                                                value="{{ $ram->id }}">{{ $ram->tipo_frecuencia }} </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </td>
                                                                            <td>
                                                                                <label class="control-label" id="bk_tamanio_ram4">Tamaño</label>
                                                                            </td>
                                                                            <td  style="width: 100px;">
                                                                                <input type="number" id="tamanio_ram4" class="form-control" placeholder="1, 2, etc.. ">
                                                                            </td>
                                                                            <td>
                                                                                <select id="medida4" class="form-control">
                                                                                    <option value="GB">GB</option>
                                                                                    <option value="MB">MB</option>
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
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
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
                                                                                    <option {{ $hdd->nombre == 'Seleccione' ? "selected" : "" }}
                                                                                            value="{{ $hdd->id }}">{{ $hdd->tipo_tamanio }} </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <label class="control-label" id="bk_tamanio_hdd1">Tamaño</label>
                                                                        </td>
                                                                        <td  style="width: 100px;">
                                                                            <input type="number" id="tamanio_hdd1" class="form-control" placeholder="1, 2, etc.. ">
                                                                        </td>
                                                                        <td>
                                                                            <select class="form-control" id="gb1">
                                                                                <option value="GB">GB</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <label class="control-label" id="bk_tipo_tamanio2">Disco2</label>
                                                                        </td>
                                                                        <td style="width: 150px">
                                                                            <select id="tipo_tamanio2" class="form-control">
                                                                                <option value="Seleccione">Seleccione</option>
                                                                                @foreach($hdds as $hdd)
                                                                                    <option {{ $hdd->nombre == 'Seleccione' ? "selected" : "" }}
                                                                                            value="{{ $hdd->id }}">{{ $hdd->tipo_tamanio }} </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <label class="control-label" id="bk_tamanio_hdd2">Tamaño</label>
                                                                        </td>
                                                                        <td  style="width: 100px;">
                                                                            <input type="number" id="tamanio_hdd2" class="form-control" placeholder="1, 2, etc.. ">
                                                                        </td>
                                                                        <td>
                                                                            <select class="form-control" id="gb2">
                                                                                <option value="GB">GB</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <label class="control-label" id="bk_tipo_tamanio3">Disco3</label>
                                                                        </td>
                                                                        <td style="width: 150px">
                                                                            <select id="tipo_tamanio3" class="form-control">
                                                                                <option value="Seleccione">Seleccione</option>
                                                                                @foreach($hdds as $hdd)
                                                                                    <option {{ $hdd->nombre == 'Seleccione' ? "selected" : "" }}
                                                                                            value="{{ $hdd->id }}">{{ $hdd->tipo_tamanio }} </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <label class="control-label" id="bk_tamanio_hdd3">Tamaño</label>
                                                                        </td>
                                                                        <td  style="width: 100px;">
                                                                            <input type="number" id="tamanio_hdd3" class="form-control" placeholder="1, 2, etc.. ">
                                                                        </td>
                                                                        <td>
                                                                            <select class="form-control" id="gb3">
                                                                                <option value="GB">GB</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <label class="control-label" id="bk_tipo_tamanio4">Disco4</label>
                                                                        </td>
                                                                        <td style="width: 150px">
                                                                            <select id="tipo_tamanio4" class="form-control">
                                                                                <option value="Seleccione">Seleccione</option>
                                                                                @foreach($hdds as $hdd)
                                                                                    <option {{ $hdd->nombre == 'Seleccione' ? "selected" : "" }}
                                                                                            value="{{ $hdd->id }}">{{ $hdd->tipo_tamanio }} </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <label class="control-label" id="bk_tamanio_hdd4">Tamaño</label>
                                                                        </td>
                                                                        <td  style="width: 100px;">
                                                                            <input type="number" id="tamanio_hdd4" class="form-control" placeholder="1, 2, etc.. ">
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
                                                            <input type="text" id="serie_create"class="form-control">
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

                                                </div>
                                                <!--end::Wizard Step 3-->

                                                {{--CONECTIVIDAD--}}
                                                <!--begin::Wizard Step 4-->
                                                 <div class="my-5 step" data-wizard-type="step-content">

                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class="control-label" id="bk_nombre_host">Nombre del Host</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" id="nombre_host" class="form-control" placeholder="Escriba un nombre de Host">
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class="control-label" id="bk_user_admin">Usuario Administrador</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" id="user_admin" class="form-control" placeholder="Usuario que Configuró el Equipo">
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label class="control-label" id="bk_pass_admin">Password Asignado al Equipo Configurado</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="text" id="pass_admin" class="form-control" placeholder="Password que Asignaron al Equipo Configurado">
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
                                                                                    <input type="text" id="ethernet_ip" class="form-control" placeholder="0.0.0.0">
                                                                                </td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <label class="control-label" id="bk_ethernet_mac">MAC</label>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" id="ethernet_mac" class="form-control" placeholder=" 00-00-00-00-00-00">
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
                                                                                        <option value="10">10</option>
                                                                                        <option value="100">100</option>
                                                                                        <option value="1000">1000</option>
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
                                                                                <input type="text" id="wifi_ip" class="form-control" placeholder="0.0.0.0">
                                                                            </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <label class="control-label" id="bk_wifi_mac">MAC</label>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" id="wifi_mac" class="form-control" placeholder=" 00-00-00-00-00-00">
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
                                                                                    <option value="2.4 GHZ">2.4 GHZ</option>
                                                                                    <option value="5.0 GHZ">5.0 GHZ</option>
                                                                                </select>
                                                                            </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </table>
                                                                    <div class="text-right">
                                                                        <a href="#"
                                                                           name="action_button"
                                                                           id="action_button"
                                                                           class="btn btn-success font-weight-bolder px-9 py-4">GUARDAR</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                <!--end::Wizard Step 4-->

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

     hideRam(4,'none');
     hideHdd(4,'none');


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
        ocultaRam();
        hideRam(items,'');
    });

    $('#n_discos').on('change', function () {
        var items =$('#n_discos').val();
        ocultaHdd();
        hideHdd(items,'');
    });

    $("#action_button").on('click', function () {

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
                type: 'POST',
                '_token': CSRF_TOKEN,
                url: '/equipos/cpu/store',
                data: {
                    '_token': CSRF_TOKEN,
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

                    'n_discos'          : $('#n_discos').val(),
                    'tipo_tamanio1'     : $('#tipo_tamanio1').val(),
                    'tamanio_hdd1'      : $('#tamanio_hdd1').val(),

                    'tipo_tamanio2'     : $('#tipo_tamanio2').val(),
                    'tamanio_hdd2'      : $('#tamanio_hdd2').val(),

                    'tipo_tamanio3'     : $('#tipo_tamanio3').val(),
                    'tamanio_hdd3'      : $('#tamanio_hdd3').val(),

                    'tipo_tamanio4'     : $('#tipo_tamanio4').val(),
                    'tamanio_hdd4'      : $('#tamanio_hdd4').val(),
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
                            'Registro Creado!',
                            '',
                            'success'
                        );
                        cargarformulario(14,0,1);
                    }
                },
            })
        }
    });

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

