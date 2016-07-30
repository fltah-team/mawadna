<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ isset($title) ? $title : 'موادنا' }}</title>
  <!-- IE Compatipility Meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- First Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/bootstrap-arabic.css')}}"></link>
  <link rel="stylesheet" href="{{asset('css/style.css')}}"></link>
  
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-static-top navbar-fixed-top">
  <div class="container">
      <ul class="nav navbar-nav navbar-left menu">
        <li><a href="home" class="header-txt"><span class="glyphicon glyphicon-home"></span>  الصفحة الرئيسية</a></li>
        <li><a href="home" class="header-txt"><span class="glyphicon glyphicon-education"></span> جامعة السودان</a></li>
        <li><a href="home" class="header-txt"><span class="glyphicon glyphicon-education"></span> جامعة الخرطوم</a></li>
      </ul>


      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="/" class="header-txt"><span class="glyphicon glyphicon-plus"></span> انضم لفريق موادنا</a></li>
        <li><a href="/" class="header-txt"><span class="glyphicon glyphicon-user"></span>  تسجيل دخول </a></li>
      </ul>
  </div>
</nav>
<div class="title" >
  <div class="container">
    <img src="images/com_logo.png" width="300px" />
  </div>
</div>
@yield("content")
<div class="footer" >
    <div class="container" >
      <div class="row">
        <div class="col-lg-4 text-center">
          <h2>منصة موادنا </h2>
          <p>هي منصة الكترونية توفر كل المواد التي تدرس في الجامعات السودانية ، والمراجع على صورة رقمية  .</p>
        </div>
        <div class="col-lg-4 text-center">
          <h3>موادنا : مشروع من مشاريع فلته</h3>
          <a href="http://www.fb.com/faltah"><p>جميع الحقوق محفوظة لفريق فلته &copy </p></a>
        </div>
        <div class="col-lg-4 text-center">
          <h3>تواصلو معنا</h3>
          <a href="http://www.fb.com/faltah"><img src="images/flta.png" width="30px" /></a>
          <a href="http://www.fb.com/mawadnaSudan"><img src="images/fb.png" width="30px" /></a>
          <a href="http://www.fb.com/mawadnaSudan"><img src="images/yt.png" width="30px" /></a>
        </div>
      </div>
    </div>
</div>

<!--scip src"{{asset('js/bootstrap-arabic.js')}}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->
</body>
</html>
