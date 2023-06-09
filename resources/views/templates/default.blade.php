<html lang="en">

<!--begin::Head-->

<head>
    <base href="">
    <title>Sistema Doadores</title>
    <meta charset="utf-8" />
    <link rel="canonical" href="" />


    <link href="{{ URL::to('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/css/main.css') }}" rel="stylesheet">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/plugins/toastr/toastr.min.css') }}">


    <!--CSS select2-->
    <link rel="stylesheet" href="{{ URL::to('assets/css/select2/4.0.5/css/select2.min.css') }}" rel="stylesheet">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ URL::to('assets/plugins/metronic/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ URL::to('assets/plugins/metronic/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('assets/css/metronic/style.bundle.css') }} " rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <script>
        var hostUrl = "{{ URL::to('assets/') }}";
    </script>
    <script src="{{ URL::to('assets/plugins/jquery/jquery.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/jquery-knob/jquery.knob.min.js ') }}"></script>
    <script src="{{ URL::to('assets/plugins/moment/moment.min.js' )}}"></script>
    <script src="{{ URL::to('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ URL::to('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>


    <!-- SweetAlert2 -->
    <script src="{{ URL::to('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/plugins/toastr/toastr.min.js') }}"></script>

    <script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.js') }}"></script>
    <script src="{{ URL::to('assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ URL::to('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ URL::to('assets/plugins/metronic/global/plugins.bundle.js') }}"></script>
    <script src="{{ URL::to('assets/metronic/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ URL::to('assets/plugins/metronic/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ URL::to('assets/metronic/js/custom/widgets.js') }}"></script>
    <script src="{{ URL::to('assets/metronic/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ URL::to('assets/metronic/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ URL::to('assets/metronic/js/custom/modals/upgrade-plan.js') }}"></script>



</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background-image: url()" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">

            @include('templates.header')

        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->



</body>

</html>




<script src="{{ URL::to('assets/js/select2/4.0.5/js/select2.min.js') }}"></script>