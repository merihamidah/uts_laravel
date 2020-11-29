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

  <!-- Navigation -->
  <!-- Page Header -->
  @include('clienttemplate.section.header')

  <!-- Main Content -->
  <div class="container">
    @yield('content')
  </div>
 <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
             Hilangkan Mata Panda dengan Bahan Dapur yang Alami</h2>
            <h5 class="post-subtitle">
              Mata hitam dan kantung mata yang besar memang bikin
              sebal. Selain mengganggu penampilan, mata panda juga 
              jadi salah satu tanda kalau kamu kurang tidur dan nggak sehat. Stres, terlalu lelah, atau iritasi bisa jadi penyebabnya. Menggunakan concealer kerap jadi pilihan kaum hawa untuk menyamarkan lingkaran hitam di bawah mata. 
              Tapi sebenarnya ada beberapa cara alami yang bisa</h5>
          </a>
          <p class="post-meta">Posted by
            <a href="#">BeautyTalk</a>
            </p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
             Anti Menor, Ini 5 Trik Makeup Look untuk Ketemu Calon Mertua</h2>
            <h5 class="post-subtitle">
             Bertemu calon mertua pasti jadi momen paling penting
             dan bersejarah bagi kamu. Menegangkan sekaligus mendebarkan
             tentu jadi perasaan yang sulit diungkapkan. Demi memberikan kesan yang baik, kamu bisa mempersiapkan
             penampilan mulai dari gaya busana sampai makeup</h5>
          </a>
          <p class="post-meta">Posted by
            <a href="#">BeautyTalk</a></p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
             Tips Memilih Make Up Brush yang Tepat
            </h2>
            <h5 class="post-subtitle">
              Kuas make up sama pentingnya dengan make up itu sendiri, lho. Make up brush 
              memiliki banyak sekali jenis dan tipe, mulai dari </h5>
          </a>
          <p class="post-meta">Posted by
            <a href="#">BeautyTalk</a></p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="{{ url('post') }}">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
    
@include('clienttemplate.section.tags')
  </div>

  <!-- Footer -->  <hr>
 @include('clienttemplate.section.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{ url('public') }}/client/vendor/jquery/jquery.min.js"></script>
  <script src="{{ url('public') }}/client/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ url('public') }}/client/js/clean-blog.min.js"></script>

</body>

</html>
