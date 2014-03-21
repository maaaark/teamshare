<div class="page-sidebar" id="main-menu">
@if(Auth::check())
    <!-- BEGIN MINI-PROFILE -->
    <div class="user-info-wrapper">
      <div class="profile-wrapper"> <img src="/img/profiles/avatar.jpg" data-src="/img/profiles/avatar.jpg" data-src-retina="img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
      <div class="user-info">
        <div class="greeting">Hallo</div>
        <div class="username">{{ Auth::user()->firstname }} <span class="semi-bold">T.</span></div>
        <div class="status">Status<a href="#">
          <div class="status-icon green"></div>
          Online</a></div>
      </div>
    </div>
    <!-- END MINI-PROFILE -->
    <!-- BEGIN MINI-WIGETS -->
    <!-- END MINI-WIGETS -->
    <!-- BEGIN SIDEBAR MENU -->
    <p class="menu-title">NAVIGATION</p>
    <ul>
      <li class="start active "> <a href="index.html"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <!-- <span class="badge badge-important pull-right">5</span>--></a> </li>
      <li class=""> <a href="email.html"> <i class="icon-envelope"></i> <span class="title">Email</span> <!-- <span class=" badge badge-disable pull-right ">203</span> --></a> </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-ui"></i> <span class="title">Menu</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li><a href="#">Menu Link</a></li>
		  <li><a href="#">Menu Link</a></li>
		  <li><a href="#">Menu Link</a></li>
        </ul>
      </li>
	  <li class=""><a href="/users/logout"><i class="icon-off"></i> <span class="title">Ausloggen</span></a></li>
    </ul>

    <a href="#" class="scrollup">Scroll</a>
    <div class="clearfix"></div>
    <!-- END SIDEBAR MENU -->
@else
	Nicht eingeloggt
@endif	
  </div>