<div class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding-bottom: 1%">
    <div class="container">
      <div class="navbar-header" style="align-content: center" >
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ action("PagesController@home")}}" style= "align-content: center" >
          <img src="{{ asset('image/nfycbd_logo_p.png') }}" alt="{{ asset('image/nfycbd_logo') }}" class="img-responsive">NFOYC
        </a>
      </div>
      
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ action("PagesController@home") }}">HOME</a></li>
          <li><a href="{{action("PagesController@about")}}">ABOUT</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Organization<span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-left" role="menu">
              <li><a href="#">Childrens Ministry</a></li>
              <li><a href="#">Students Ministry</a></li>
              <li><a href="#">Groups</a></li>
            </ul>
          </li>
          <!--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERMONS <span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-left" role="menu">
              <li><a href="sermons.html">Foundation-Occupied</a></li>
              <li><a href="sermons.html">God's Love</a></li>
              <li><a href="sermons.html">Faithfulness</a></li>
              <li><a href="sermons.html">Praise Him</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-left" role="menu">
              <li><a href="image-gallery.html">Image Gallery</a></li>
              <li><a href="video-gallery.html">Video Gallery</a></li>
              <li><a href="blog.html">Blog list</a></li>
              <li><a href="blog-single.html">Blog Single</a></li>
              <li><a href="events-programs.html">Events &amp; Programs</a></li>
              <li><a href="event-single.html">Event Single</a></li>
              <li><a href="event-calendar.html">Event Calendar</a></li>
              <li><a href="charity-donation.html">Charity &amp; Donations</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">OTHER PAGES</li>
              <li><a href="prayers.html">Prayers</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="shortcodes.html">Shortcodes</a></li>
              <li><a href="full-width.html">Full Width</a></li>
              <li><a href="left-sidebar.html">Left Sidebar</a></li>
              <li><a href="https://bit.ly/BuyCatholic">Buy this Template</a></li>
            </ul>
          </li> -->
          <li><a href="{{ route('contact') }}">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </div>