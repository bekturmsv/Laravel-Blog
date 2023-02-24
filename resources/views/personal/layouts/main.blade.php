<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{asset('plugins/fontawesome-free/css/all.min.css')}} ">
    <link rel="stylesheet" href="{{asset("plugins/select2/css/select2.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=" {{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}} ">
  <!-- Daterange picker -->
  <link rel="stylesheet" href=" {{asset('plugins/daterangepicker/daterangepicker.css')}} ">
  <link rel="stylesheet" href=" {{asset('dist/css/adminlte.min.css')}} ">
  <link rel="stylesheet" href=" {{asset('plugins/summernote/summernote-bs4.min.css')}} ">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src=" {{asset('dist/img/AdminLTELogo.png')}} " alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light  ">
    <!-- Left navbar links -->
      <div class="col-12 d-flex justify-content-between">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
      <ul class="navbar-nav">
          <li class="nav-item">
              <form action="{{route("logout")}}" method="POST">
                  @csrf
                  <input class="btn btn-outline-primary" type="submit" value="Выйти">
              </form>
          </li>
      </ul>
      </div>
  </nav>
  <!-- /.navbar -->

@include("personal.includes.sidebar")
@yield("content")

<!-- jQuery -->
<script src=" {{asset('plugins/jquery/jquery.min.js')}} "></script>
<!-- jQuery UI 1.11.4 -->
<script src=" {{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src=" {{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src=" {{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script src=" {{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- daterangepicker -->
<script src=" {{asset('plugins/moment/moment.min.js')}}"></script>
<script src=" {{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src=" {{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src=" {{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}} "></script>
<!-- AdminLTE App -->
<script src=" {{asset('dist/js/adminlte.js')}} "></script>
    <script>
        $(document).ready(function (){
            $('#summernote').summernote({
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font',['strikethrough','superscript','subscript']],
                    ['fontsize',['fontsize']],
                    ['color',['color']],
                    ['para',['ul','ol','paragraph']],
                    ['height',['height']]
                ]
            });
        })
        $(function () {
            bsCustomFileInput.init();
        });
        $(".select2").select2()
    </script>
    <style>
        .custom-file-input:lang(en)~.custom-file-label::after{
            content: "...";
        }
    </style>
</div>
</body>
</html>
