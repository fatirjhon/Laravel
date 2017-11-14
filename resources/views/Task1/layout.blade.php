<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta httpequiv="XUACompatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-
scale=1">
<style type="text/css">
.carousel {
    height: 500px;
    margin: 0 auto;
    margin-bottom: 10px;
    padding-right: 0;
    padding-left: 0;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
    z-index: 10;
    font-size: 2rem;
}

/* Declare heights because of positioning of img element */
.carousel .item {
    height: 500px;

}
.carousel-inner > .item > img {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    height: 500px;
}

#footer {
    position: absolute;
    bottom: 0;
    width: 644px;
    height: 20px;
    margin: 0 auto;
}
</style>
<title>GeeksFarm</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<!--bagian navigation-->
@include('shared_task.headnav')

</head>
<body>
<div class="container">

    <div id="main" class="row">

    		<!--bagian isi-->
            @yield('content')
    </div>

    <footer class="row">

    	<!--bagian footer-->
        @include('shared_task.footnav')
    </footer>

</div>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>