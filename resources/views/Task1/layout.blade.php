<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta httpequiv="XUACompatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-
scale=1">
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