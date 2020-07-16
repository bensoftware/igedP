<!-- Header -->
<header>
<!-- Header desktop -->
<div class="container-menu-desktop">
  <div class="topbar">
    <div class="content-topbar container h-100">
      <div class="left-topbar">
        <span class="left-topbar-item flex-wr-s-c">
          <h2 style="color: white;">
            Tel :
          </h2>
          <p>+222 45 24 63 88 </p>
        </span>
      </div>
      <div class="left-topbar">
        <span class="left-topbar-item flex-wr-s-c">
          <h2 style="color: white;">
            Mail:
          </h2>
          <p>groupedescartes@gmail.com</p>
        </span>
      </div>
      <div class="right-topbar">
        <a href="https://web.facebook.com/InstitutGED" target="_blank">
          <span class="fab fa-facebook-f"></span>
        </a>
      </div>
    </div>
  </div>

  <!-- Header Mobile -->
  <div class="wrap-header-mobile">
    <!-- Logo moblie -->
    <div class="logo-mobile">
      <a href="{{url('/')}}"><img src="{{URL::asset('public/images/icon.jpg')}}" alt=""></a>
    </div>
    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </div>
  </div>

 @include('menumobile.menumobile')
  <!--  -->
  <div class="wrap-logo container">
    <!-- Logo desktop -->
    <div class="logo">
      <a href="{{url('/')}}"><img src="{{URL::asset('public/images/icon.jpg')}}" alt="LOGO"  style="width:75px;height:75px;"></a>
    </div>
    <!-- Banner -->
    <div class="banner-header">
      <a href="{{url('/')}}"><img src="{{URL::asset('public/images/images/banner-01.jpg')}}" alt="IMG"></a>
    </div>
  </div>
  <!--  -->
  <div class="wrap-main-nav">
    <div class="main-nav">
    <!-- Menu desktop -->
      @include('menudesktop.menudesktop')
      <!--  -->
    </div>
  </div>
</div>
</header>
