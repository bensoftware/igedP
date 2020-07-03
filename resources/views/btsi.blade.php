
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
      <h1 class="mb-2 bread">DIPLÔME INTERNATIONAL</h1>
    <h1 class="mb-2 bread">BTS</h1>
    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil<i class="ion-ios-arrow-forward"></i></a></span> <span>Bts<i class="ion-ios-arrow-forward"></i></span></p>
  </div>
  </div>
</div>
</section>

  <section class="ftco-section">
		  <div class="container-fluid px-4">
			  <div class="row">
				<div class="col-md-3 course ftco-animate">
					<div class="img" style="background-image: url({{URL::asset('public/images/multimedia.jpg')}});"></div>
					<div class="text pt-4">
						<h3><a href="#">MULTIMEDIA</a></h3>
						<p><strong>DEBOUCHES</strong>:
							Développeur multimédia,Web designer,Infographe,Directeur Artistique...
						</p>
            <div class="btn-group" role="group" aria-label="Basic example">
              <p><a href="{{url('/')}}" class="btn btn-primary">Lire la suite</a></p>
                <p><a href="{{route('postuler.edit',"MULTIMEDIA")}}" class="btn btn-primary">Postuler</a></p>
            </div>
					</div>
				</div>

				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image:url({{URL::asset('public/images/programmation.jpg')}});"></div>
					  <div class="text pt-4">
						  <h3><a href="#">PROGRAMMATION </a></h3>
						  <p><strong>DEBOUCHES</strong>:Développeur  d'application web,Responsable de services applicatifs...
						  </p>
              <div class="btn-group" role="group" aria-label="Basic example">
                <p><a href="{{url('/')}}" class="btn btn-primary">Lire la suite</a></p>
                  <p><a href="{{route('postuler.edit',"PROGRAMMATION")}}" class="btn btn-primary">Postuler</a></p>
              </div>
					  </div>
				  </div>

				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{URL::asset('public/images/logistique.jpg')}});"></div>
					  <div class="text pt-4">
						  <h3><a href="#">LOGISTIQUE/PILOTAGE DES FLUX</a></h3>
						  <p><strong>DEBOUCHES</strong>....</p>
              <div class="btn-group" role="group" aria-label="Basic example">
                <p><a href="{{url('/')}}" class="btn btn-primary">Lire la suite</a></p>
                  <p><a href="{{route('postuler.edit',"LOGISTIQUE ET PILOTAGE DES FLUX")}}" class="btn btn-primary">Postuler</a></p>
              </div>
					  </div>
				  </div>

				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{URL::asset('public/images/infographie.jpg')}});"></div>
					  <div class="text pt-4">
						  <h3><a href="">INFOGRAPHIE</a></h3>
						  <p><strong>DEBOUCHES</strong>:
							   Infographe,Graphiste,Directeur Artistique,...
						  </p>
              <div class="btn-group" role="group" aria-label="Basic example">
                <p><a href="{{url('/infographie')}}" class="btn btn-primary">Lire la suite</a></p>
                  <p><a href="{{route('postuler.edit',"INFOGRAPHIE")}}" class="btn btn-primary">Postuler</a></p>
              </div>
					  </div>
				  </div>

				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{URL::asset('public/images/hotesse.jpg')}});"></div>
					  <div class="text pt-4">
						  <h3><a href="">TECHNICIEN HOTESSE DE L’AIR ET STEWARD</a></h3>
						  <p><strong>DEBOUCHES</strong>:Hotesse de l'aire,Steward</p>
              <div class="btn-group" role="group" aria-label="Basic example">
                <p><a href="{{url('/hotesse-steward')}}" class="btn btn-primary">Lire la suite</a></p>
                  <p><a href="{{route('postuler.edit',"INFOGRAPHIE")}}" class="btn btn-primary">Postuler</a></p>
              </div>
            </div>
				  </div>

				  <div class="col-md-3 course ftco-animate">
					  <div class="img" style="background-image: url({{URL::asset('public/images/assistatante.jpg')}});"></div>
					  <div class="text pt-4">
						  <h3><a href="#">FORMATION ASSISTANTE MATERNELLE
						</a></h3>
						  <p><strong>DEBOUCHES</strong>:Aide-Educateur(trice)...</p>
              <div class="btn-group" role="group" aria-label="Basic example">
                <p><a href="{{url('/')}}" class="btn btn-primary">Lire la suite</a></p>
                  <p><a href="{{route('postuler.edit',"INFOGRAPHIE")}}" class="btn btn-primary">Postuler</a></p>
              </div>
					  </div>
				  </div>
			  </div>
		  </div>
	  </section>
@endsection
