<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Our organization is a premium HTML5 Church Website Template with Responsive design. Church Template includes many pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
  <meta name="keywords" content="Youth,organization, Website, Template, Bulletin, Programs, Events, Charity, Non Profit ">
  <meta name="author" content="Shaif Azad">
  <title>{{ config('app.name','NFOYC') }}</title>
  <script src="../../cdn-cgi/apps/head/-mEFVS8y7qx5pVzWHQTCQu5gnVM.js"></script>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fancybox.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fullcalender.css') }}" rel="stylesheet">
  <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <!--<link rel="shortcut icon" href="images/favicon.png">-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel='stylesheet' type='text/css'>
</head>

<body>
    @include('includes.navbar')
    @yield ('content')
    @include('includes.footer')
</body>

</html>