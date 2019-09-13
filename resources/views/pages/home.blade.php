@extends('layouts.app')
@section('content')
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item slide-one active">
        <div class="container">
          <div class="carousel-caption">
            <h3>banner 1</h3>
            <h1>UNCEASING PROVISION</h1>
            <p><a class="btn btn-giant btn-primary" href="charity-donation.html" role="button">JOIN US &rarr;</a></p>
          </div>
        </div>
      </div>
      <div class="item slide-two">
        <div class="container">
          <div class="carousel-caption">
            <h2>banner 2</h2>
            <p class="lead">Receive the unceasing wave after wave, after wave, after wave of Grace God has for you.</p>
            <p><a class="btn btn-lg btn-primary" href="ministry.html" role="button">Learn more &rarr;</a></p>
          </div>
        </div>
      </div>
      <div class="item slide-three">
        <div class="container">
          <div class="carousel-caption">
            <h2>banner 3</h2>
            <p class="lead">For God did not send his Son into the world to condemn the world, but to save the world through him. <em>John 3:17</em></p>
            <p><a class="btn btn-lg btn-primary" href="image-gallery.html" role="button">Browse gallery &rarr;</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>

  <div class="highlight-bg has-margin-bottom">
    <div class="container event-cta">
      <div class="ec-txt"> <span>UPCOMING EVENT</span>
        <p>"The Law Demands, but Grace Supplies" - Paster J.P.</p>
      </div>
      <a class="btn btn-lg btn-primary" href="event-single.html" role="button">Program details →</a>
    </div>
  </div>

  <div class="container">
    <div class="row feature-block">
      <div class="col-md-4 col-sm-6 has-margin-bottom">
        <img class="img-responsive" src="{{ asset('image/thumb-1.jpg') }}" alt="catholic church">
        <h5>GUIDED BY THE HOLY SPIRIT</h5>
        <p>Experience God's Wisdom each day as you are lead by the Holy Spirit. Walk effortlessly into success and happiness and understand the Father's love for you. </p>
        <p><a href="about.html" role="button">View details →</a></p>
      </div>
      <div class="col-md-4 col-sm-6 has-margin-bottom">
        <img class="img-responsive" src="{{ asset('image/thumb-2.jpg') }}" alt="ministry sermon">
        <h5>LAW DEMANDS; GRACE SUPPLIES</h5>
        <p>Jesus came and fulfilled the laws, the only one who could keep the laws so that in Him we can be made righteous and not have to suffer death for our sins. </p>
        <p><a href="sermons.html" role="button">View details →</a></p>
      </div>
      <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 center-this has-margin-bottom">
        <img class="img-responsive" src="{{ asset('image/thumb-3.jpg') }}" alt="bulletin programs">
        <h5>CHRIST OCCUPIED</h5>
        <p>It may sound good to Mankind to be self-occupied. But God wants you to be Christ-Occupied and receive all of your blessings through resting in the work of Jesus.</p>
        <p><a href="events-programs.html" role="button">View details →</a></p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row feature-block">
      <div class="col-md-4 col-sm-6 has-margin-bottom">
        <img class="img-responsive" src="{{ asset('image/thumb-1.jpg') }}" alt="catholic church">
        <h5>GUIDED BY THE HOLY SPIRIT</h5>
        <p>Experience God's Wisdom each day as you are lead by the Holy Spirit. Walk effortlessly into success and happiness and understand the Father's love for you. </p>
        <p><a href="about.html" role="button">View details →</a></p>
      </div>
      <div class="col-md-4 col-sm-6 has-margin-bottom">
        <img class="img-responsive" src="{{ asset('image/thumb-2.jpg') }}" alt="ministry sermon">
        <h5>LAW DEMANDS; GRACE SUPPLIES</h5>
        <p>Jesus came and fulfilled the laws, the only one who could keep the laws so that in Him we can be made righteous and not have to suffer death for our sins. </p>
        <p><a href="sermons.html" role="button">View details →</a></p>
      </div>
      <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 center-this has-margin-bottom">
        <img class="img-responsive" src="{{ asset('image/thumb-3.jpg') }}" alt="bulletin programs">
        <h5>CHRIST OCCUPIED</h5>
        <p>It may sound good to Mankind to be self-occupied. But God wants you to be Christ-Occupied and receive all of your blessings through resting in the work of Jesus.</p>
        <p><a href="events-programs.html" role="button">View details →</a></p>
      </div>
    </div>
  </div>
  
  <div class="highlight-bg has-margin-bottom">
    <div class="container event-list">
      <div class="section-title">
        <h4> PROGRAMS &amp; EVENTS </h4>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel">
            <div class="el-block item">
              <h4> JULY 16 </h4>
              <p class="el-head">Weekly meeting &amp; prayer</p>
              <span>Monday 07:00 AM</span>
              <p class="el-cta"><a class="btn btn-primary" href="event-single.html" role="button">Details &rarr;</a></p>
            </div>
            <div class="el-block item">
              <h4> JUL 29 </h4>
              <p class="el-head">Show me your faith</p>
              <span>Thursday 02:00 PM</span>
              <p class="el-cta"><a class="btn btn-primary" href="event-single.html" role="button">Details &rarr;</a></p>
            </div>
            <div class="el-block item">
              <h4> SEP 19 </h4>
              <p class="el-head">Perseravance of the saints</p>
              <span>Saturday 10:00 AM</span>
              <p class="el-cta"><a class="btn btn-primary" href="event-single.html" role="button">Details &rarr;</a></p>
            </div>
            <div class="el-block item">
              <h4> OCT 14 </h4>
              <p class="el-head">God's irresistable grace</p>
              <span>Sunday 11:00 AM</span>
              <p class="el-cta"><a class="btn btn-primary" href="event-single.html" role="button">Details &rarr;</a></p>
            </div>
            <div class="el-block item">
              <h4> JULY 16 </h4>
              <p class="el-head">Weekly meeting &amp; prayer</p>
              <span>Monday 07:00 AM</span>
              <p class="el-cta"><a class="btn btn-primary" href="event-single.html" role="button">Details &rarr;</a></p>
            </div>
            <div class="el-block item">
              <h4> JUL 29 </h4>
              <p class="el-head">Show me your faith</p>
              <span>Thursday 02:00 PM</span>
              <p class="el-cta"><a class="btn btn-primary" href="event-single.html" role="button">Details &rarr;</a></p>
            </div>
            <div class="el-block item">
              <h4> SEP 19 </h4>
              <p class="el-head">Perseravance of the saints</p>
              <span>Saturday 10:00 AM</span>
              <p class="el-cta"><a class="btn btn-primary" href="event-single.html" role="button">Details &rarr;</a></p>
            </div>
            <div class="el-block item">
              <h4> OCT 14 </h4>
              <p class="el-head">God's irresistable grace</p>
              <span>Sunday 11:00 AM</span>
              <p class="el-cta"><a class="btn btn-primary" href="event-single.html" role="button">Details &rarr;</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/ketchup.all.js"></script>
  <script src="js/fancybox.js"></script>
  <script src="js/script.js"></script>
@endsection
