@include('partials.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @yield('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          @includeIf('partials.footer')

</body>

</html>