<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        {{-- <div id="content-wrapper" class="d-flex flex-column"> --}}

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('backend.layouts.header')
            <!-- End of Topbar -->

            <!-- Sidebar -->
            @include('backend.layouts.sidebar')
            <!-- End of Sidebar -->

            <!-- Begin Page Content -->
            @yield('main-content')
            <!-- /.container-fluid -->

            {{-- </div> --}}
            <!-- End of Main Content -->
            @include('backend.layouts.footer')

</body>

</html>
