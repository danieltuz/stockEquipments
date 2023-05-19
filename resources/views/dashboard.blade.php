
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8" />
    <title>Stock | Equipos | DIF Estatal</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    @include('includes.css.archivos_css')

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed header-bottom-enabled subheader-enabled page-loading">
<!--begin::Main-->

<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header flex-column header-fixed">

            {{--MENU PARA ESCRITORIOS GRANDES--}}
                <!--begin::Top-->
                <div class="header-top">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Left-->
                        <div class="d-none d-lg-flex align-items-center">
                            <!--begin::Logo-->
                            <a href="#" class="mr-20">
                                <img alt="Logo" src="{{ asset('img/logo_rojo.png') }}" class="max-h-35px" />
                            </a>
                            <!--end::Logo-->

                            {{--TABS DE LA BARRA DEL MENU SUPERIOR--}}
                            <!--begin::Tab Navs(for desktop mode)-->
                            @include('includes.menus.tabs_menu_top')

                        </div>
                        <!--end::Left-->

                        {{--MENU CERRAR SESSION--}}
                        <!--begin::Topbar-->
                        @include('includes.menus.menu_top_cerrar')
                        <!--end::Topbar-->

                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Top-->

                <!--begin::Bottom-->
                <div class="header-bottom">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Header Menu Wrapper-->
                        @include('includes.menus.opciones_menus_top')
                        <!--end::Header Menu Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Bottom-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div id="contenido_principal">

            </div>
            <!--end::Content-->

        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->



@include('includes.js.archivos_js')

<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>