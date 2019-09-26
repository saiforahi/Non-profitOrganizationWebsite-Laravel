<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Our organization is a premium HTML5 Church Website Template with Responsive design. Church Template includes many pages like Bulletin, Programs, events, sermons, ministries, working church contact form etc..">
  <meta name="keywords" content="Youth,organization, Website, Template, Bulletin, Programs, Events, Charity, Non Profit ">
  <meta name="author" content="Shaif Azad">
  
  <title>{{ config('app.name','NFOYC') }}</title>  <!--website title -->
  
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fancybox.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fullcalender.css') }}" rel="stylesheet">
  <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
  
  

  <link rel="shortcut icon" href="{{ asset('image/nfycbd_logo_p.png') }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel='stylesheet' type='text/css'>
  
</head>

<body>
    @include('includes.navbar')
    @yield ('content')
    @include('includes.footer')

    <!--script files-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/ketchup.all.js') }}"></script>
    <script src="{{ asset('js/fancybox.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/contact_form.js') }}"></script>
    <script src="{{ asset('js/flexslider.js') }}"></script>
    <script src="{{ asset('js/gcal.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/-mEFVS8y7qx5pVzWHQTCQu5gnVM.js') }}"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
</body>

</html>