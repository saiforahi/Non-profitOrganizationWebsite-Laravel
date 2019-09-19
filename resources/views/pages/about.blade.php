@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="section-title" style="padding-top: 100px">
          <h4> OUR TEAM </h4>
        </div>
        <div class="row feature-block">
          <div class="col-md-4 col-sm-12 has-margin-bottom">
            <img class="img-responsive" src="{{ asset('image/image_1.jpg') }}" alt="image_1">
            <h5>Syed Tomal</h5>
            <p>Email: Syedtomal@gmail.com <br>
              Cell: +8801308694388</p>
            <p><a href="#" role="button">Facebook</a> / <a href="#" role="button">Twitter</a></p>
          </div>
    
          <div class="col-md-4 col-sm-12 has-margin-bottom">
            <img class="img-responsive" src="{{ asset('image/image_2.jpg') }}" alt="image_2">
            <h5>Shahriar Hasan</h5>
            <p>Email: hasan.sharear@live.com</p>
            <p><a href="https://www.facebook.com/sharear.hasan" role="button">Facebook</a> / <a href="#" role="button">Twitter</a></p>
          </div>
    
          <!--<div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 center-this has-margin-bottom">
            <img class="img-responsive" src="{{ asset('image/team-3.jpg') }}" alt="bulletin programs">
            <h5>THIMOTHY FRANCIS</h5>
            <p> Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa etiam porta fusce dapibus.</p>
            <p><a href="#" role="button">Facebook</a> / <a href="#" role="button">Twitter</a></p>
          </div> -->
        </div>
      </div>
@endsection