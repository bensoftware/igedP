<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
  <title>@yield("page-title")</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::asset('public/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('public/css/animate.css')}}">
  <link rel="icon" type="image/jpg" href="{{URL::asset('public/images/icon.jpg')}}" sizes="196x196" />
  <link rel="stylesheet" href="{{URL::asset('public/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('public/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('public/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{URL::asset('public/css/aos.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{URL::asset('public/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('public/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{URL::asset('public/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{URL::asset('public/css/style.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('public/css/sty.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('public/fonts2/fontawesome-5.0.8/css/fontawesome-all.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/fonts2/iconic/css/material-design-iconic-font.min.css')}}">
  <!--===============================================================================================-->
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/vendor/css-hamburgers/hamburgers.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/vendor/animsition/css/animsition.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/util.min.css')}}">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/main.css')}}">

  <style>
    option {
      text-align: center;
      color: black;
    }
    .navbar {
      margin: 0;
    }
    .navbar.affix {
      background-color:#0d1128;
      position: fixed;
      top: 0;
      width: 100%;
    }
  </style>
</head>
<body>

 @include('header.header')

<!-- End of Header-->

  @yield("page-content")

     <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00"/></svg></div>

        <!-- Back to top -->
        <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
          <span class="fas fa-angle-up"></span>
        </span>
        </div>

 @include('footer.footer')



            <script src="{{ URL::asset('public/js/jquery.min.js')}}"></script>
            <script src="{{ URL::asset('public/js/jquery-migrate-3.0.1.min.js')}}"></script>
            <script src="{{ URL::asset('public/js/popper.min.js')}}"></script>
            <script src="{{ URL::asset('public/js/bootstrap.min.js')}}"></script>
            <script src="{{ URL::asset('public/js/jquery.easing.1.3.js')}}"></script>
            <script src="{{ URL::asset('public/js/jquery.waypoints.min.js')}}"></script>
            <script src="{{ URL::asset('public/js/jquery.stellar.min.js')}}"></script>
            <script src="{{ URL::asset('public/js/owl.carousel.min.js')}}"></script>
            <script src="{{ URL::asset('public/js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{ URL::asset('public/js/aos.js')}}"></script>
            <script src="{{ URL::asset('public/js/jquery.animateNumber.min.js')}}"></script>
            <script src="{{ URL::asset('public/js/scrollax.min.js')}}"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
            <script src="{{ URL::asset('public/js/google-map.js')}}"></script>
            <script src="{{ URL::asset('public/js/main.js')}}"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
            <script src="{{ URL::asset('public/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{ URL::asset('public/vendor/animsition/js/animsition.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{ URL::asset('public/vendor/bootstrap/js/popper.js')}}"></script>
            <script src="{{ URL::asset('public/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{URL::asset('public/js/main2.js')}}"></script>

  <!--===========================Custom part espacially for News Page====================================================================-->
  <script>

var show_per_page = 3;
var current_page = 0;

function set_display(first, last) {
$('#content').children().css('display', 'none');
$('#content').children().slice(first, last).css('display', 'block');
}

function previous(){
if($('.active').prev('.page_link').length) go_to_page(current_page - 1);
}

function next(){
if($('.active').next('.page_link').length) go_to_page(current_page + 1);
}

function go_to_page(page_num){
current_page = page_num;
start_from = current_page * show_per_page;
end_on = start_from + show_per_page;
set_display(start_from, end_on);
$('.active').removeClass('active');
$('#id' + page_num).addClass('active');
}

$(document).ready(function() {
var number_of_pages = Math.ceil($('#content').children().length / show_per_page);
var nav = '<ul class="pagination"><li><a href="javascript:previous();">&laquo;</a>';
var i = -1;
while(number_of_pages > ++i){
nav += '<li class="page_link'
if(!i) nav += ' active';
nav += '" id="id' + i +'">';
nav += '<a href="javascript:go_to_page(' + i +')">'+ (i + 1) +'</a>';
}
nav += '<li><a href="javascript:next();">&raquo;</a></ul>';
$('#page_navigation').html(nav);
set_display(0, show_per_page);
});
</script>
</body>
</html>
