<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta httpequiv="XUACompatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-
scale=1">

<title>Laravel 5</title>
<link href="/assets/css/bootstrap.css" rel="stylesheet" />

<link href="/assets/css/material-design/bootstrap-material-
design.css" rel="stylesheet" />

<link href="/assets/css/material-design/ripples.css"
rel="stylesheet" />
<link href="/assets/css/custom/layout.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="padding-top:0px;">
<!--bagian navigation-->
@include('shared_articles.head_nav')
<!-- Bagian Content -->
<div class="container clearfix">
<div class="row row-offcanvas row-offcanvas-left ">
<!--Bagian Kiri-->
@include("shared_articles.left_nav")
<!--Bagian Kanan-->

<div id="main-content" class="col-xs-12 col-sm-9 main pull-
right">

<div class="panel-body">
@if (Session::has('error'))
<div class="session-flash alert-danger">
{{Session::get('error')}}
</div>
@endif
@if (Session::has('notice'))
<div class="session-flash alert-info">
{{Session::get('notice')}}

21

</div>
@endif
@yield("content")
</div>
</div>
</div>
</div>
<script src="/assets/js/jquery/jquery-2.2.5.js"></script>
<script src="/assets/js/bootstrap/bootstrap.js"></script>
<script src="/assets/js/material-design/material.js"></script>
<script src="/assets/js/material-design/ripples.js"></script>
<script src="/assets/js/custom/layout.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>