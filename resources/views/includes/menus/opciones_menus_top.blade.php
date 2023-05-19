<div class="header-navs header-navs-left" id="kt_header_navs">

{{--MENU PARA EQUIPOS PEQUEÑOS--}}
<!--begin::Tab Navs(for tablet and mobile modes)-->
    <!--begin::Tab Navs-->

    <!--begin::Tab Content-->
    <div class="tab-content">

    {{--MENU EQUIPOS--}}
    <!--begin::Tab PaneL-->
        <div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">
            <!--begin::Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                @include('includes.menus.menu_equipos')
            </div>
            <!--end::Menu-->
        </div>

    {{--MENU SOFTWARE--}}
    <!--begin::Tab Pane-->
        <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_2">
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Nav-->
            @include('includes.menus.menu_software')
            <!--end::Nav-->
            </div>
        </div>
        <!--begin::Tab Pane-->

    {{--MENU ADMINISTRACION--}}
    <!--begin::Tab Pane-->
        <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_3">
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Nav-->
            @include('includes.menus.menu_administracion')
            <!--end::Nav-->
            </div>
        </div>
        <!--begin::Tab Pane-->

    {{--MENU SOPORTE--}}
    <!--begin::Tab Pane-->
        <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_4">
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Nav-->
            @include('includes.menus.menu_soporte')
            <!--end::Nav-->
            </div>
        </div>
        <!--begin::Tab Pane-->

    {{--MENU REPORTES--}}
    <!--begin::Tab Pane-->
        <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_5">
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Nav-->
            @include('includes.menus.menu_reportes')
            <!--end::Nav-->
            </div>
        </div>
        <!--begin::Tab Pane-->

    </div>
    <!--end::Tab Content-->
</div>