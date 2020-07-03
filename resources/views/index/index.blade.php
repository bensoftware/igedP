
@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')

@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

<section class="home-slider owl-carousel">


  <div class="slider-item" style="background-image:url({{URL::asset('public/images/bg_2.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate">
        <h1 class="mb-4">Un environnement familial centré sur l’étudiant !
            </h1>
            <p>
                Accompagnement individuel.</br>
               	Développement du projet personnel et professionnel.  </br>
            </p>
        <p><a href="{{url('/contact')}}" class="btn btn-primary px-4 py-3 mt-3">Contactez nous</a></p>
      </div>
    </div>
    </div>
  </div>

  <div class="slider-item" style="background-image:url({{URL::asset('public/images/bg_1.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate">
        <h1>Des compétences pour la vie !
        </h1></br>
  						<p>	Programmes basés sur les projets pour acquérir des compétences « entrepreneuriales »
                 considérées comme la clé du succès sur le marché du travail du 21ème siècle : autonomie,
                 créativité, communication, culture informatique.</p>
        <p><a href="{{url('/contact')}}" class="btn btn-primary px-4 py-3 mt-3">Contactez nous</a></p>
      </div>
    </div>
    </div>
  </div>

  <div class="slider-item" style="background-image:url({{URL::asset('public/images/bg_2.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate">
        <h1 class="mb-4">Déjà l’entreprise !
						</h1>
            <p>
              Nos programmes sont conçus et actualisés avec la validation des recruteurs .</br>
              Des stages dès la première année .</br>
              Un taux de recrutement élevé de nos lauréats.
            </p>
        <p><a href="{{url('/contact')}}" class="btn btn-primary px-4 py-3 mt-3">Contactez nous</a></p>
      </div>
    </div>
    </div>
  </div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="text-decoration-color: black;">
<div class="container">
  <div class="row justify-content-center mb-5 pb-2 d-flex">
    <div class="col-md-6 align-items-stretch d-flex">
      <div class="img img-video d-flex align-items-center"
        style="background-image: url({{URL::asset('public/images/about-2.jpg')}});">
        <div class="video justify-content-center">
          <a href="https://vimeo.com/45830194"
            class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
            <span class="ion-ios-play"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
      <h2 class="mb-4">IGED</h2>
      <p></p>
      <p>Bienvenue à l’IGED votre institut privée de référence, avec plusieurs années d’expérience dans
        l’enseignement supérieur, votre école de préférence offre des formations de qualités dans les
        domaines de l'informatique, de l'audio-visuel...

        Pour insuffler sa dynamique de croissance, incarnée par ambitions futuristes, l’IGED mène
        couramment des actions de formation pluridisciplinaires au profit des bacheliers et des
        professionnels. Les différentes formations qui y sont dispensées sont sanctionnées par
        l’un des diplômes suivants : CAP, BT,BTS...</p>
    </div>
  </div>

</div>
</section>


<section class="ftco-services ftco-no-pb">
<div class="container-wrap">
  <div class="row no-gutters">
    <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
      <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-teacher"></span>
        </div>
        <div class="media-body p-2 mt-3">
          <h3 class="heading">Des enseignants qualifiés</h3>
          <p>Nous sommes accompagnés par des professionnels aguerris dans toutes nos demarches.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
      <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-reading"></span>
        </div>
        <div class="media-body p-2 mt-3">
          <h3 class="heading">Formation professionnelle</h3>
          <p>Tous nos programmes ont été conçus dans le but de répondre aux besoins des entréprises.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
      <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-books"></span>
        </div>
        <div class="media-body p-2 mt-3">
          <h3 class="heading">Equipements &amp; Salles </h3>
          <p></p>Nous mettons à la disposition de nos étudiants tous les équipements pratique.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
      <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-diploma"></span>
        </div>
        <div class="media-body p-2 mt-3">
          <h3 class="heading">Cours</h3>
          <p>Cours du jour /Soir.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- end ond  secsection-->


<section class="ftco-section">
<div class="container-fluid px-4">
  <div class="row justify-content-center mb-5 pb-2">
    <div class="col-md-8 text-center heading-section ftco-animate">
      <h2 class="mb-4"><span>NOS FILIÈRES DE FORMATION</span> </h2>
      <p></p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 course ftco-animate">
      <div class="img" style="background-image:url({{URL::asset('public/images/course-1.jpg')}});"></div>
      <div class="text pt-4">
  <!---
        <p class="meta d-flex">
          <span><a href="{{url('/')}}" class="btn btn-primary"></a><i class="icon-user mr-2"></i>Mr. Khan</span>
          <span><i class="icon-table mr-2"></i>10 places</span>
          <span><i class="icon-calendar mr-2"></i>2 ans</span>
        </p>
  --->
        <h3><a href="#">RESEAU INFORMATIQUE</a></h3>

      </div>
    </div>
    <div class="col-md-3 course ftco-animate">
      <div class="img" style="background-image: url({{URL::asset('public/images/course-2.jpg')}});"></div>
      <div class="text pt-4">
          <!---
        <p class="meta d-flex">
          <span><i class="icon-user mr-2"></i>Mr. Khan</span>
          <span><i class="icon-table mr-2"></i>10 places</span>
          <span><i class="icon-calendar mr-2"></i>4 ans</span>
        </p>
          --->
        <h3><a href="#">MAINTENANCE INFORMATIQUE</a></h3>

      </div>
    </div>
    <div class="col-md-3 course ftco-animate">
      <div class="img" style="background-image: url({{URL::asset('public/images/course-3.jpg')}});"></div>
      <div class="text pt-4">
    <!---
        <p class="meta d-flex">
          <span><i class="icon-user mr-2"></i>Mr. Khan</span>
          <span><i class="icon-table mr-2"></i>10 places</span>
          <span><i class="icon-calendar mr-2"></i>4 ans</span>
        </p>
      --->
        <h3><a href="#">INFOGRAPHIE</a></h3>

      </div>
    </div>
    <div class="col-md-3 course ftco-animate">
      <div class="img" style="background-image: url({{URL::asset('public/images/course-4.jpg')}});"></div>
      <div class="text pt-4">
        <!---
        <p class="meta d-flex">
          <span><i class="icon-user mr-2"></i>Mr. Khan</span>
          <span><i class="icon-table mr-2"></i>10 places</span>
          <span><i class="icon-calendar mr-2"></i>4 ans</span>
        </p>
        --->
        <h3><a href="#">PATISSERIE</a></h3>
      </div>
    </div>
  </div>
</div>
</section>

<div class="overlay">
	</div>

@endsection
