<!DOCTYPE html>
<html lang="en">

@include('layouts/head')

<body class="">
    <div class=" wrapper">
    <div class="sidebar" data-color="orange">
        <!-- blue | green | orange | red | yellow -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">CT</a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">Creative Tim</a>
        </div>
        @include('layouts/sidebar')
    </div>
    <div class="main-panel" id="main-panel">
        @include('layouts/navbar')
        @yield('content')
        @include('layouts/footer')
    </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript') }}"></script>
    <script src="{{ asset('demo/demo.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
</body>

</html>
