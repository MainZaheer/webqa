<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include("admin.components.header")
        @include("admin.components.sidebar")

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          @yield("content")
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->


    </div>

    <script src="{{ asset('js/admin.js') }}" defer></script>
</body>
</html>