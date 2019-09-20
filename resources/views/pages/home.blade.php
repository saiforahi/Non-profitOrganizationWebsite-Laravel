@extends('layouts.app')
@section('content')
@include('pages.dhaka-helsinki')
@include('pages.majorThreat')
@include('pages.climateChange')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ asset('image/banner1.jpg') }}" alt="Banner1 image">
      <div class="carousel-caption">
        <h3>Banner 1</h3>
        <p>Paragraph 1</p>
      </div>
    </div>

    <div class="item">
      <img src="{{ asset('image/banner 4.jpg') }}" alt="banner2 image">
      <div class="carousel-caption">
        <h3>Banner 2</h3>
        <p>Paragraph</p>
      </div>
    </div>

    <div class="item">
      <img src="{{ asset('image/youth.jpg') }}" alt="banner3 image">
      <div class="carousel-caption">
        <h3>Banner 3</h3>
        <p>Paragraph</p>
      </div>
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="highlight-bg has-margin-bottom">
  <div class="container event-cta">
    <div class="ec-txt"> <span>UPCOMING EVENT</span>
      <p>Event name</p>
    </div>
    <a class="btn btn-lg btn-primary" href="#" role="button">Event details →</a>
  </div>
</div>

<br><br>
  <div class="container">
    <div class="row feature-block">
      <div class="col-md-4 col-sm-6 has-margin-bottom">
        <img class="img-responsive" src="{{ asset('image/climateChange.jpg') }}" alt="climate change">
        <h5>Climate change blights lives in Bangladesh</h5>
        <p>"In Bangladesh and around the world, climate change has the potential to reverse many of the gains that countries have achieved in child survival and development."<br>Around 12 million of the children most affected live in and around the powerful river systems which flow through Bangladesh and regularly burst their banks, the report said.</p>
        <p><a href="#readmoreclimatechange" role="button" data-toggle="modal">Read more →</a></p>
      </div>
      <div class="col-md-4 col-sm-6 has-margin-bottom">
        <img class="img-responsive" src="{{ asset('image/A threat.jpg') }}" alt="ministry sermon">
        <h5>A major threat to the environment</h5>
        <p>It makes absolutely no sense as to why illegal stone extraction in Sylhet, Bandarban and other hilly regions in the country would continue despite directives from the High Court and calls from environmentalists and the local people to stop this dangerous practice.</p>
        <p><a href="#readmoremajorthreat" role="button" data-toggle="modal">Read more →</a></p>
      </div>
      <div class="col-md-4 col-sm-8 col-sm-offset-2 col-md-offset-0 center-this has-margin-bottom">
        <img class="img-responsive" src="{{ asset('image/dhaka-heilsky.jpg') }}" alt="bulletin post">
        <h5>Dhaka-Helsinki to work together on climate change</h5>
        <p>The Finnish president expressed his concern that Bangladesh will be badly affected if the sea level rises  Bangladesh and Finland have agreed to work together on the issue of climate change at a meeting between Prime Minister Sheikh Hasina and Finland’s President Sauli Niinisto.</p>
        <p><a href="#readmoredhakahelsinki" role="button" data-toggle="modal">Read more →</a></p>
      </div>
    </div>
  </div>

  <!--<div class="container">
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
  </div> -->
  
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

@endsection
