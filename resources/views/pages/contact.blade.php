@extends('layouts.app')
@section('content')
<div class="subpage-head has-margin-bottom">
    <div class="container" style="padding-top: 100px">
    <h3>Contact us</h3>
    <p class="lead">Our organization address and contact details</p>
    </div>
    </div>
<div class="container">
        <div class="row ">
          <div class="col-md-6 has-margin-bottom">
            <form action="{{ route('sendMessage') }}" method="POST">
              @csrf
              @isset($success)
                <p>{{ $success }}</p>
              @endisset
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email ID</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="cell">Phone</label>
                <input type="text" class="form-control" name="cell" id="cell">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" rows="5" name="message" id="message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-lg">Send message</button>
              <span class="help-block loading"></span>
            </form>
          </div>
      
          <div class="col-md-6 has-margin-bottom">
            <hr>
            <h5>OUR ADDRESS</h5>
            <div class="justify-content-center">
              <div class="col-4">
                
                Ward no #32<br>Holding no #199<br>Jajor, Gazipur<br>Dhaka-1203<br>
                Phone : +88 01308 694 388<br>
                Email: tomal@nfoyc.org
              </div>
            </div>
              <!--<hr>
              <h5>ANOTHER ADDRESS</h5>
              <div class="row">
                <div class="col-lg-6">Catholic Church<br>
                  121 King Street, Melbourne <br>
                  Victoria 3000 Australia
                </div>
                <div class="col-lg-6">Phone: +61 3 8376 6284<br>
                  Fax: +61 38 376 6284<br>
                  Email: 
                </div>
              </div>-->
          </div>
        </div>
      </div>
          <div class="location-map">
              <iframe src="https://maps.google.com/maps?q=jajor%2C%20gazipur&t=&z=13&ie=UTF8&iwloc=&output=embed" height="260"></iframe>
              <a href="https://www.embedgooglemap.net/blog/20-off-discount-for-elegant-themes-divi-sale-coupon-code-2019/">divi themes</a>
            </div>
@endsection