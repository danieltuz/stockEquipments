<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Page Vendors Styles(used by this page)-->
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->
<!--begin::Global Theme Styles(used by all pages)-->
<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles-->
<!--begin::Layout Themes(used by all pages)-->
<!--end::Layout Themes-->


{{--selector de color amarillo al pasar el raton sobre el menu principal--}}
<style>
    .navenlace a {
        color: #666666;
        text-decoration: none;
        display: block;
        width: 100%;
    }
    .navenlace a:hover {
        background-color: rgba(255, 235, 152, 1);
        color: #8c3c2b;
    }
</style>

{{--sombra en la parte inferior de las ventanas--}}
<style>
    .box-sombra {
        box-shadow: 5px 5px 5px #777c7f
    }
</style>