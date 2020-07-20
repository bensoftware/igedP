@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{URL::asset('public/images/bg_1.jpg')}});">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text align-items-center justify-content-center">
  <div class="col-md-9 ftco-animate text-center">
    <h1 class="mb-2 bread">DIPLÔME NATIONAL</h1>
    <h1 class="mb-2 bread">CAP</h1>
    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>CAP<i class="ion-ios-arrow-forward"></i></span></p>
  </div>
  </div>
</div>
</section>

<section class="ftco-section">
    <div class="container-fluid px-4">
      <div class="row">
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url({{URL::asset('public/images/course-5.jpg')}});"></div>
          <div class="text pt-4">
            <h3><a href="#">EDUCATEUR PETITE ENFANCE</a></h3>
            <p><strong>DEBOUCHES</strong>:Auxiliaire ou Agent de crèche.</p>
            <div class="btn-group" role="group" aria-label="Basic example">
                <p><a href="{{url('/educateur-petite-enfance')}}" class="btn btn-primary">Lire la suite</a></p>
                <?php  $filliere='EDUCATEUR PETITE ENFANCE';$diplome='CAP'; ?>
                <p><a href="{{route('postuler.montre',['filliere'=>$filliere,'diplome'=>$diplome])}}" class="btn btn-primary">Postuler</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url({{URL::asset('public/images/course-6.jpg')}});"></div>
          <div class="text pt-4">
            <h3><a href="{{url('/patisserie')}}">PATISSERIE</a></h3>
            <p>
            <strong>DEBOUCHES</strong>:Pâtissier,Boulangerie-pâtisserier.
            </p>
            <div class="btn-group" role="group" aria-label="Basic example">
              <p><a href="{{url('/patisserie')}}" class="btn btn-primary">Lire la suite</a></p>
              <?php  $filliere='PATISSERIE';$diplome='CAP'; ?>
              <p><a href="{{route('postuler.montre',['filliere'=>$filliere,'diplome'=>$diplome])}}" class="btn btn-primary">Postuler</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url({{URL::asset('public/images/course-7.jpg')}});"></div>
          <div class="text pt-4">
            <h3><a href="#">PLOMBERIE</a></h3>
            <p>
            <strong>DEBOUCHES</strong>: Plombier dans l'industrie du batiment
            </p>
            <div class="btn-group" role="group" aria-label="Basic example">
              <p><a href="{{url('/plomberie')}}" class="btn btn-primary">Lire la suite</a></p>
              <?php  $filliere='PLOMBERIE';$diplome='CAP'; ?>
              <p><a href="{{route('postuler.montre',['filliere'=>$filliere,'diplome'=>$diplome])}}" class="btn btn-primary">Postuler</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-3 course ftco-animate">
          <div class="img" style="background-image: url({{URL::asset('public/images/course-8.jpg')}});"></div>
          <div class="text pt-4">
            <h3><a href="#">CUISINE PROFESSIONELLE</a></h3>
            <p>
            <strong>DEBOUCHES</strong>:Chef cuisnier,aide cuisnier dans l'hotellerie.
            </p>
            <div class="btn-group" role="group" aria-label="Basic example">
              <p><a href="{{url('/cuisine')}}" class="btn btn-primary">Lire la suite</a></p>
              <?php  $filliere='CUISINE PROFESSIONELLE';$diplome='CAP'; ?>
              <p><a href="{{route('postuler.montre',['filliere'=>$filliere,'diplome'=>$diplome])}}" class="btn btn-primary">Postuler</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
