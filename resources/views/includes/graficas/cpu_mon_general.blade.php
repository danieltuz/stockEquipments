<div class="col-xl-12" id="cpu_mon_general">
    <!--begin::Charts Widget 6-->
    <div class="card card-custom card-stretch gutter-b">

        <!--begin::Body-->
        <div class="card-body box-sombra">

            {{--PANEL QUE MUESTRA LAS GRAFICAS--}}
            <div class="row" id="graficas_ApexCharts">

                {{--TARJETA CON EL NOMBRE DE TODAS LAS DIRECCIONES CON LOS TOTALES DE EQUIPO CADA UNA--}}

                <div class="col-4 d-flex flex-column">
                    <!--begin::Block-->
                    <div class="bg-light-warning p-8 rounded-xl flex-grow-1">
                        <!--begin::Item-->
                        <h4>Direcciones</h4>

                        @foreach($equiposDif as $dato)
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-white symbol-30 flex-shrink-0 mr-3">
                                    <div class="symbol-label">{{ $dato['indice'] }}</div>
                                </div>
                                <div>
                                    <div class="font-size-sm font-weight-bold">{{ $dato['direccion'] }}</div>
                                    <div class="font-size-sm text-muted">Total de Equipos: <b>{{ $dato['total_area'] }}</b></div>
                                </div>
                            </div>
                        @endforeach

                    <!--end::Item-->
                    </div>
                    <!--end::Block-->
                </div>

                <div class="col-8">

                    <div class="card card-custom gutter-b">
                        <div class="card-body">

                            {{--GRAFICA CON TODOS LOS ESTATUS--}}
                            <!--begin::Chart-->
                            <div id="grafica_totales">
                                <div id="chart_4"></div>
                            </div>

                                {{--GRAFICA QUE MUESTRA LOS ESTATUS DEPENDIENDO DEL BOTON ELEGIDO--}}
                            <div id="grafica_estatus">
                                <div id="chart_5"></div>
                            </div>

                            <!--end::Chart-->

                        </div>
                    </div>
                </div>
            </div>

            {{--PANEL QUE MUESTRA LAS TARJETAS POR DIRECCION--}}
            <div class="row" id="graficas_tablas">



                <div class="container">
                    <!--begin::Card-->
                    <div class="card card-custom">

                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                           <i class="icon-xl fas fa-medal text-primary"></i>
                        </span>
                        <div class="d-flex align-items-center flex-wrap mr-1">
                            <!--begin::Page Heading-->
                            <div class="d-flex align-items-baseline flex-wrap mr-5">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold my-1 mr-5">{{ $totalGral }} Equipos</h5>
                                <!--end::Page Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="" class="text-muted">{{ $totalCpuGral }} CPUS</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted">
                                        <a href="" class="text-muted">{{ $totalMonGral }} Monitores</a>
                                    </li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page Heading-->
                        </div>
                    </div>
                </div>
                    </div>
                </div>

                <!--begin::Body-->
                <div class="card-body table-responsive px-0">
                    <!--begin::Items-->
                    <div class="list list-hover min-w-500px" data-inbox="list">

                        @foreach($equiposDif as $dato)
                            <!--begin::Item-->
                            <div class="d-flex align-items-start list-item card-spacer-x py-3" data-inbox="message">
                                <!--begin::Info-->
                                <div class="flex-grow-1 mt-2 mr-2" data-toggle="view">
                                    <div>
                                        <span class="font-weight-bolder font-size-lg mr-2">
                                            {{--ENCABEZADOS : AREA, EQUIPO, BUENO, REGULAR, MALO, BAJA, TOTALES--}}
                                            <div class="row show-grid">
                                                <div class="col-md-5"></div>
                                                <div class="col-md-2" style="text-align: center">Equipo</div>
                                                <div class="col-md-1" style="text-align: center">Bueno</div>
                                                <div class="col-md-1" style="text-align: center">Regular</div>
                                                <div class="col-md-1" style="text-align: center">Malo</div>
                                                <div class="col-md-1" style="text-align: center">Baja</div>
                                                <div class="col-md-1" style="text-align: center">Total</div>
                                            </div>

                                            {{--CPU: EQUIPO, BUENO, REGULAR, MALO, BAJA, TOTALES--}}
                                            <div class="row show-grid">
                                                 <div class="col-md-5">{{ $dato['indice'] }} - {{ $dato['direccion'] }}</div>
                                                <div class="col-md-2" style="text-align: center">CPU</div>
                                                <div class="col-md-1"  style="text-align: center">
                                                     <span class="label font-weight-bold label-lg label-light-info label-inline">
                                                    {{ $dato['cpu_bueno'] }}
                                                    </span>
                                                </div>
                                                <div class="col-md-1" style="text-align: center">
                                                    <span class="label font-weight-bold label-lg label-light-success label-inline">{{ $dato['cpu_regular'] }}</span>
                                                </div>
                                                <div class="col-md-1" style="text-align: center">
                                                    <span class="label font-weight-bold label-lg label-light-warning label-inline">{{ $dato['cpu_malo'] }}</span>
                                                </div>
                                                <div class="col-md-1" style="text-align: center">
                                                    <span class="label font-weight-bold label-lg label-light-danger label-inline">{{ $dato['cpu_baja'] }}</span>
                                                </div>
                                                <div class="col-md-1" style="text-align: center">
                                                    <span class="label font-weight-bold label-lg label-light-dark label-inline">
                                                    {{ $dato['cpu_bueno'] + $dato['cpu_regular'] + $dato['cpu_malo'] + $dato['cpu_baja']}}
                                                </span>
                                                </div>
                                            </div>

                                            {{--MONITOR: EQUIPO, BUENO, REGULAR, MALO, BAJA, TOTALES--}}
                                            <div class="row show-grid">
                                                 <div class="col-md-5"></div>
                                                <div class="col-md-2" style="text-align: center">MONITOR</div>
                                                <div class="col-md-1" style="text-align: center">
                                                     <span class="label font-weight-bold label-lg label-light-info label-inline">
                                                    {{ $dato['mon_bueno'] }}
                                                </span>
                                                </div>
                                                <div class="col-md-1" style="text-align: center">
                                                    <span class="label font-weight-bold label-lg label-light-success label-inline">{{ $dato['mon_regular'] }}</span>
                                                </div>
                                                <div class="col-md-1" style="text-align: center">
                                                    <span class="label font-weight-bold label-lg label-light-warning label-inline">{{ $dato['mon_malo'] }}</span>
                                                </div>
                                                <div class="col-md-1" style="text-align: center">
                                                    <span class="label font-weight-bold label-lg label-light-danger label-inline">{{ $dato['mon_baja'] }}</span>
                                                </div>
                                                <div class="col-md-1" style="text-align: center">
                                                    <span class="label font-weight-bold label-lg label-light-dark label-inline">
                                                    {{ $dato['mon_bueno'] + $dato['mon_regular'] + $dato['mon_malo'] + $dato['mon_baja']}}
                                                </span>
                                                </div>
                                            </div>

                                        </span>
                                    </div>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Items-->
                        @endforeach

                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>

        </div>
        <!--end::Body-->
    </div>
    <!--end::Charts Widget 6-->
</div>

