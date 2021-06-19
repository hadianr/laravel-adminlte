<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('templates.head')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <!-- Navbar -->
    @include('templates.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('templates.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @yield('content')

    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('templates.footer')
    </div>
<!-- ./wrapper -->

@include('templates.script')
</body>
</html>
