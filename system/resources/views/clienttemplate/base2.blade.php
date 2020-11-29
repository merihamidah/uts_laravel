<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BeautyTalkClient</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ url('public') }}/client/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ url('public') }}/client/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ url('public') }}/client/css/clean-blog.min.css" rel="stylesheet">

</head>

<body style="background-color:#f2c9c9;">

  <div class="container">
    @yield('content')
  </div>
  <hr>

  <!-- Footer -->
 @include('clienttemplate.section.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ url('public') }}/client/vendor/jquery/jquery.min.js"></script>
  <script src="{{ url('public') }}/client/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ url('public') }}/client/js/clean-blog.min.js"></script>

</body>

</html>
