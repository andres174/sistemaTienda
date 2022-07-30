<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('secciones.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('secciones.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('secciones.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @include('secciones.maincontent')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('secciones.controlsidebar')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('secciones.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>

{{-- LIVEWIRE SRCIPTS --}}
@livewireScripts
</body>
</html>
