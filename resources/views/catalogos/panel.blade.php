@include('includes.css.archivos_css')
<!--begin::Wrapper-->

<br>
<div class="content d-flex flex-column flex-column-fluid">

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Todo Docs-->
            <div class="d-flex flex-row">

                <!--begin::Menu catalogos-->
                <div class="flex-row-auto offcanvas-mobile w-200px w-xxl-275px" id="kt_todo_aside">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body px-5">
                            <!--begin:Nav-->
                            <div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">

                                <!--begin:Section Edificios-->
                                <div class="navi-section mt-7 mb-2 font-size-h6 font-weight-bold pb-0">Edificios</div>
                                <!--end:Section Edificios-->

                                {{--EDIFICIO--}}
                                <!--begin:Item Edificios-->
                                <div class="navi-item my-2">
                                    <a href="javascript:;" class="navi-link" onclick="cargarformulario(4,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fas fa-city text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Edificios</span>
                                    </a>
                                </div>
                                <!--end:Item Edificios-->

                                {{--DIRECCIONES--}}
                                <!--begin:Item Direcciones-->
                                <div class="navi-item">
                                    <a href="#" class="navi-link" onclick="cargarformulario(1,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="far fa-building text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Direcciones</span>
                                    </a>
                                </div>
                                <!--end:Item Direcciones-->

                                {{--SUBDIRECCIONES--}}
                                <!--begin:Item Subdirecciones-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(2,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fas fa-home text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Subdirecciones</span>
                                    </a>
                                </div>
                                <!--end:Item Subdirecciones-->

                                {{--COORDINACIONES--}}
                                <!--begin:Item Coordinaciones-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(3,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fa fa-bookmark text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Coordinaciones</span>
                                    </a>
                                </div>
                                <!--end:Item Coordinaciones-->

                                <!--begin:Section-->
                                <div class="navi-section mt-7 mb-2 font-size-h6 font-weight-bold pb-0">Equipos</div>
                                <!--end:Section-->

                                {{--TIPO DE EQUIPO--}}
                                <!--begin:Item Tipo de equipo-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(50,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fas fa-magic text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Tipo de Equipo</span>
                                    </a>
                                </div>
                                <!--end:Item Disco Duro (HDD)-->

                                {{--HDD--}}
                                <!--begin:Item Disco Duro (HDD)-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(5,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="far fa-hdd text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Discos Duros</span>
                                    </a>
                                </div>
                                <!--end:Item Disco Duro (HDD)-->

                                {{--MARCAS--}}
                                <!--begin:Item Marcas-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(6,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fa fa-tag text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Marcas</span>
                                    </a>
                                </div>
                                <!--end:Item Marcas-->

                                {{--MODELOS--}}
                                <!--begin:Item Modelos-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(7,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fa fa-ticket-alt text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Modelos</span>
                                    </a>
                                </div>
                                <!--end:Item Modelos-->

                                {{--TIPO DE MONITOR--}}
                                <!--begin:Item Tipo de Monitor-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(8,0,2);">
                                                    <span class="navi-icon mr-4">
                                                         <i class="fa fa-desktop text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Tipo de Monitor</span>
                                    </a>
                                </div>
                                <!--end:Item Tipo de Monitor-->

                                {{--PROCESADORES--}}
                                <!--begin:Item Procesadores-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(9,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fa fa-microchip text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Procesadores</span>
                                    </a>
                                </div>
                                <!--end:Item Procesadores-->

                                {{--RAM--}}
                                <!--begin:Item Memoria RAM-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(10,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fa fa-memory text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Memoria RAM</span>
                                    </a>
                                </div>
                                <!--end:Item Memoria RAM-->

                                {{--CONDICION DEL EQUIPO--}}
                                <!--begin:Item Condicion del Equipo-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(13,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fa fa-exclamation-triangle text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Condicion del Equipo</span>
                                    </a>
                                </div>
                                <!--end:Item Condicion del Equipo-->

                                {{--SOFTWARE--}}
                                <!--begin:Item Software-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(16,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fa fa-flag text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Software</span>
                                    </a>
                                </div>
                                <!--end:Item Software-->

                                <!--begin:Section-->
                                <div class="navi-section mt-7 mb-2 font-size-h6 font-weight-bold pb-0">Sistemas Operativos</div>
                                <!--end:Section-->

                                {{--SO--}}
                                <!--begin:Item Arquitectura SO-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(11,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fa fa-fire text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Arquitectura SO</span>
                                    </a>
                                </div>
                                <!--end:Item Arquitectura SO-->

                                {{--SISTEMA OPERATIVO--}}
                                <!--begin:Item Sistema Operativo-->
                                <div class="navi-item my-2">
                                    <a href="#" class="navi-link" onclick="cargarformulario(12,0,2);">
                                                    <span class="navi-icon mr-4">
                                                        <i class="fab fa-windows text-primary mr-5"></i>
                                                    </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Sistema Operativo</span>
                                    </a>
                                </div>
                                <!--end:Item Sistema Operativo-->

                            </div>
                            <!--end:Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Menu catalogos-->

                <!--begin::Index de catalogos-->
                <div class="flex-row-fluid d-flex flex-column ml-lg-8">
                    <!--begin::Body-->
                    <div class="row" id="cuerpo_catalogos">
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Index de catalogos-->

            </div>
            <!--end::Todo Docs-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

</div>
<!--end::Wrapper-->

@include('includes.js.archivos_js')


