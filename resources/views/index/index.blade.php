
@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')

@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
          </ul>
      </div>
  @endif

<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image:url({{URL::asset('public/images/course-6.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate">
        <h1 class="mb-4">Un environnement familial centré sur l’étudiant !
            </h1>
            <p>
                Accompagnement individuel.</br>
               	Développement du projet personnel et professionnel.</br>
            </p>
        <p><a href="{{url('/contact')}}" class="btn btn-primary px-4 py-3 mt-3">Contactez nous</a></p>
      </div>
    </div>
    </div>
  </div>

  <div class="slider-item" style="background-image:url({{URL::asset('public/images/course-5.jpg')}});">
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

  <div class="slider-item" style="background-image:url({{URL::asset('public/images/programmations.jpg')}});">
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


<section class="ftco-services ftco-no-pb">
<div class="container-wrap">
  <div class="row no-gutters">
    <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
      <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-teacher"></span>
        </div>
        <div class="media-body p-2 mt-3">
          <h3 class="heading">Des formateurs qualifiés</h3>
          <p>Nous sommes accompagnés par des professionnels aguerris dans toutes nos demarches.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
      <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-reading"></span>
        </div>
        <div class="media-body p-2 mt-3">
          <h3 class="heading">Formation professionnelle</h3>
          <p>Tous nos programmes ont été conçus dans le but de répondre
             aux besoins des entréprises.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
      <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-books"></span>
        </div>
        <div class="media-body p-2 mt-3">
          <h3 class="heading">Equipements &amp; Salles </h3>
          <p></p>Nous mettons à la disposition de nos étudiants tous
          les équipements pratique.</p>
        </div>
      </div>
    </div>

  </div>
</div>
</section>
<!-- end ond  secsection-->


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
      <p  style="text-align: justify;margin-top: auto;">l’Institut du Groupe Educatif Descartes Formation, IGED à rejoint le peloton de tête des
        établissements de formation professionnelle privées opérant à Nouakchott, grâce à un projet
        pédagogique original qui associe avec succès le développement personnel et l’ouverture sur
        le monde.</p> </br>
      <p style="text-align: justify;margin-top: auto;">Plus qu’un simple centre de formation, l’IGED a pour objectif de motiver ses étudiants aux métiers
      auxquels ils se destinent. Il favorise l’entrepreneuriat, la créativité et l’initiative. Grâce à
      des activités pédagogiques diverses telles que les formations en alternance, visites d’entreprises
      et d’établissements professionnels, des concours intra école ou entre écoles,;
      les étudiants ouvrent leur esprit sur les diverses opportunités offertes par le marché du travail.</p>
    </div>
  </div>

</div>
</section>
<div class="overlay">
  </div>

<section class="ftco-section">
<div class="container-fluid px-4">

  <div class="row justify-content-center mb-5 pb-2">
    <div class="col-md-8 text-center heading-section ftco-animate">
      <h2 class="mb-4"><span>NOS NOUVELLES FILIÈRES DE FORMATIONS </span> </h2>
      <p></p>
    </div>
  </div>
    <div class="row">
      <div class="col-md-3 course ftco-animate">
        <div class="img" style="background-image: url({{URL::asset('public/images/petiteenfance.jpg')}});"></div>
        <div class="text pt-4">
          <h3><a href="#">EDUCATEUR PETITE ENFANCE</a></h3>
          <p><strong>DEBOUCHES</strong>Auxiliaire ou Agent de crèche...</p>
          <div class="btn-group" role="group" aria-label="Basic example">
              <p><a href="{{url('/educateur-petite-enfance')}}" class="btn btn-primary">Lire la suite</a></p>
              <?php  $filliere='EDUCATEUR PETITE ENFANCE';$diplome='CAP'; ?>
              <p><a href="{{route('postuler.montre',['filliere'=>$filliere,'diplome'=>$diplome])}}" class="btn btn-primary">Postuler</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 course ftco-animate">
        <div class="img" style="background-image: url({{URL::asset('public/images/patisserie.jpg')}});"></div>
        <div class="text pt-4">
          <h3><a href="{{url('/patisserie')}}">PATISSERIE/BOULANGERIE</a></h3>
          <p>
                <strong>DEBOUCHES</strong>:Pâtissier,Pâtissier...
          </p>
          <div class="btn-group" role="group" aria-label="Basic example">
            <p><a href="{{url('/patisserie')}}" class="btn btn-primary">Lire la suite</a></p>
            <?php  $filliere='PATISSERIE';$diplome='CAP'; ?>
            <p><a href="{{route('postuler.montre',['filliere'=>$filliere,'diplome'=>$diplome])}}" class="btn btn-primary">Postuler</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 course ftco-animate">
        <div class="img" style="background-image: url({{URL::asset('public/images/plomberie.jpg')}});"></div>
        <div class="text pt-4">
          <h3><a href="#">PLOMBERIE</a></h3>
          <p>
          <strong>DEBOUCHES</strong>: Plombier...
          </p>
          <div class="btn-group" role="group" aria-label="Basic example">
            <p><a href="{{url('/plomberie')}}" class="btn btn-primary">Lire la suite</a></p>
            <?php  $filliere='PLOMBERIE';$diplome='CAP'; ?>
            <p><a href="{{route('postuler.montre',['filliere'=>$filliere,'diplome'=>$diplome])}}" class="btn btn-primary">Postuler</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-3 course ftco-animate">
        <div class="img" style="background-image: url({{URL::asset('public/images/cuisine.jpg')}});"></div>
        <div class="text pt-4">
          <h3><a href="#">CUISINE PROFESSIONELLE</a></h3>
          <p>
          <strong>DEBOUCHES</strong>:Chef cuisnier,aide cuisnier...
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
</div>
</section>

<div class="row justify-content-center mb-5 pb-2">
  <div class="col-md-8 text-center heading-section ftco-animate">
    <h2 class="mb-4"><span>DIPLOMES DE FIN DE FORMATION</span> </h2>
    <p></p>
  </div>
</div>

<section class="ftco-services ftco-no-pb">
 <div class="container-wrap">
  <div class="row no-gutters">



    <a href="{{url('/cap-national')}}">
      <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-diploma"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading"><a href="{{url('/cap-national')}}" style="color:white">CAP</a></h3>
          </div>
        </div>
      </div>
    </a>

  <a href="{{url('/bt-national')}}">
    <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
      <div class="media block-6 d-block text-center">

        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-diploma"></span>
        </div>
        <div class="media-body p-2 mt-3">
          <h3 class="heading"><a href="{{url('/bt-national')}}" style="color:white">BT</a></h3>
        </div>

      </div>
    </div>
  </a>

  <a href="{{url('/bts-national')}}">
      <div class="col-md-4 d-flex services align-self-stretch py-5 px-4 ftco-animate  bg-darken">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-diploma"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading"><a href="{{url('/bts-national')}}" style="color:white">BTS</a></h3>
          </div>
        </div>
      </div>
    </a>
<!--
  <a href="{{url('/vae')}}">
    <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
      <div class="media block-6 d-block text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <a href="#"><span class="flaticon-diploma"></span></a>
        </div>
        <div class="media-body p-2 mt-3">
          <h3 class="heading">VAE</h3>
        </div>
      </div>
    </div>
  </a>
-->

  </div>
</div>


</section>
<!-- end ond  secsection-->

@endsection
