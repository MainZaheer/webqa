<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="hold-transition login-page">

    @yield("content")

    <script src="{{ asset('js/admin.js') }}" defer></script>
</body>
</html>