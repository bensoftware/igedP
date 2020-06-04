@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')
<!-- Headline -->
<div class="container">
 <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-12">
   <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
     <span class="text-uppercase cl2 p-r-8">
       Fil d'actualités:
     </span>

     <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
       <span class="dis-inline-block slide100-txt-item animated visible-false">
         20% de reduction pour les 10 premiers Inscrits
       </span>

       <span class="dis-inline-block slide100-txt-item animated visible-false">
         CAP,BT,BTS,VAE
       </span>

       <span class="dis-inline-block slide100-txt-item animated visible-false">
         Formation Continue
       </span>
     </span>
   </div>
 </div>
</div>

<section class="bg0 p-t-70">
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-10 col-lg-8">
       <div class="p-b-20">
         <!-- Entertainment -->
         <div class="tab01 p-b-20">
           <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
             <!-- Brand tab -->
             <h3 class="f1-m-2 cl12 tab01-title">
               Evenements
             </h3>
             <!-- Nav tabs -->
             <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item">
                 <a class="active nav-link" data-toggle="tab" href="#tab1-1" role="tab">Activités socio-culturelles</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#tab1-2" role="tab">Formation</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#tab1-3" role="tab">Emploi & stage</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#tab1-4" role="tab">Emploi</a>
               </li>
               <li class="nav-item-more dropdown dis-none">
                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                   <i class="fa fa-ellipsis-h"></i>
                 </a>
                 <ul class="dropdown-menu">
                 </ul>
               </li>
             </ul>

             <!--  -->
             <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">

               <i class="fs-12 m-l-5 fa fa-caret-right"></i>
             </a>
           </div>


           <!-- Tab panes -->
           <div class="tab-content p-t-35">
             <!-- - -->
             <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
               <div class="row">
                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="m-b-30">
                     <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-05.jpg')}}" alt="IMG">
                     </a>

                     <div class="p-t-20">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                           Les jeunes professionels et les ....
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                           Music
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           18  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>

                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-06.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Music
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-07.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Game
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-08.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Information
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <!-- - -->
             <div class="tab-pane fade" id="tab1-2" role="tabpanel">
               <div class="row">
                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="m-b-30">
                     <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-09.jpg')}}" alt="IMG">
                     </a>

                     <div class="p-t-20">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                           Les jeunes professionels et les ....
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                           Music
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           18  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>

                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-08.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Celebrity
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-06.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Music
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-07.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Game
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <!-- - -->
             <div class="tab-pane fade" id="tab1-3" role="tabpanel">
               <div class="row">
                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="m-b-30">
                     <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-08.jpg')}}" alt="IMG">
                     </a>

                     <div class="p-t-20">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                           Les jeunes professionels et les ....
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                           Music
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           18  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>

                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-07.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Celebrity
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-06.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Music
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-05.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Game
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <!-- - -->
             <div class="tab-pane fade" id="tab1-4" role="tabpanel">
               <div class="row">
                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="m-b-30">
                     <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-06.jpg')}}" alt="IMG">
                     </a>

                     <div class="p-t-20">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                           Les jeunes professionels et les ....
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                           Music
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           18  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>

                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-09.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Celebrity
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-07.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Music
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-08.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Game
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

         <!-- Business -->
         <div class="tab01 p-b-20">
           <div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
             <!-- Brand tab -->
             <h3 class="f1-m-2 cl13 tab01-title">
               Business
             </h3>

             <!-- Nav tabs -->
             <ul class="nav nav-tabs" role="tablist">
               <li class="nav-item">
                 <a class="nav-link active" data-toggle="tab" href="#tab2-1" role="tab">Entrepreneuriat</a>
               </li>


               <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#tab2-4" role="tab">Leadership</a>
               </li>

               <li class="nav-item-more dropdown dis-none">
                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                   <i class="fa fa-ellipsis-h"></i>
                 </a>

                 <ul class="dropdown-menu">

                 </ul>
               </li>
             </ul>

             <!--  -->
             <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">

               <i class="fs-12 m-l-5 fa fa-caret-right"></i>
             </a>
           </div>


           <!-- Tab panes -->
           <div class="tab-content p-t-35">
             <!-- - -->
             <div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
               <div class="row">
                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="m-b-30">
                     <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-10.jpg')}}" alt="IMG">
                     </a>

                     <div class="p-t-20">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                           Le Bitcoin est une cryptomonnaie........

                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                           Finance
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           18  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>

                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-11.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Small Business
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-12.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Economy
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-13.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Money & Markets
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

   <!-- - -->
             <div class="tab-pane fade" id="tab2-4" role="tabpanel">
               <div class="row">
                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="m-b-30">
                     <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-12.jpg')}}" alt="IMG">
                     </a>

                     <div class="p-t-20">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                           Bitcoin lorem ipsum dolor sit amet consectetur
                         </a>
                       </h5>


                     </div>
                   </div>
                 </div>

                 <div class="col-sm-6 p-r-25 p-r-15-sr991">
                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-13.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Small Business
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-10.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Economy
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>

                   <!-- Item post -->
                   <div class="flex-wr-sb-s m-b-30">
                     <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                       <img src="{{URL::asset('public/images/images/post-11.jpg')}}" alt="IMG">
                     </a>

                     <div class="size-w-2">
                       <h5 class="p-b-5">
                         <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                           Formation sur les metiers du Web et de ...
                         </a>
                       </h5>

                       <span class="cl8">
                         <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                           Money & Markets
                         </a>

                         <span class="f1-s-3 m-rl-3">
                           -
                         </span>

                         <span class="f1-s-3">
                           17  Mai
                         </span>
                       </span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="col-md-10 col-lg-4">
       <div class="p-l-10 p-rl-0-sr991 p-b-20">
         <!--  -->
                       <!-- Video -->
         <div class="p-b-55">
           <div class="how2 how2-cl4 flex-s-c m-b-35">
             <h3 class="f1-m-2 cl3 tab01-title">
                Videos
             </h3>
           </div>

           <div>
             <div class="wrap-pic-w pos-relative">
               <img src="{{URL::asset('public/images/images/video-01.jpg')}}" alt="IMG">

               <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
                 <span class="fab fa-youtube"></span>
               </button>
             </div>

             <div class="p-tb-16 p-rl-25 bg3">
               <h5 class="p-b-5">
                 <a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
                   Videos
                 </a>
               </h5>

               <span class="cl15">
                 <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                   Par IGED
                 </a>

                 <span class="f1-s-3 m-rl-3">
                   -
                 </span>

                 <span class="f1-s-3">
                   18 Mai
                 </span>
               </span>
             </div>
           </div>
                     </div>


         <!-- Subscribe -->
         <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
           <h5 class="f1-m-5 cl0 p-b-10">
             Abonnez vous
           </h5>

           <p class="f1-s-1 cl0 p-b-25">
             Recevez les nouvelles opportunités,articles et autres depuis votre adresse électronique .
           </p>

           <form class="size-a-9 pos-relative">
             <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

             <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
               <i class="fa fa-arrow-right"></i>
             </button>
           </form>
          </div>
         <div class="flex-c-s p-t-8">
           <a href="#">
             <img class="max-w-full" src="{{URL::asset('public/images/images/banner-02.jpg')}}" alt="IMG">
           </a>
         </div>
         <!--  -->
       </div>
     </div>
   </div>
 </div>
</section>

@endsection
