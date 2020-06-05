
@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')


<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image:url({{URL::asset('public/images/bg_1.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate">
        <h1 class="mb-4">IGED est en recherche des enseignants</h1>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
      </div>
    </div>
    </div>
  </div>

  <div class="slider-item" style="background-image:url({{URL::asset('public/images/bg_2.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 ftco-animate">
        <h1 class="mb-4">IGED,Institut du groupe René Descartes.</h1>
        <p>Institut du groupe René Descartes.</p>
        <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
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
        <p class="meta d-flex">
          <span><i class="icon-user mr-2"></i>Mr. Khan</span>
          <span><i class="icon-table mr-2"></i>10 places</span>
          <span><i class="icon-calendar mr-2"></i>2 ans</span>
        </p>
        <h3><a href="#">RESEAU INFORMATIQUE</a></h3>

      </div>
    </div>
    <div class="col-md-3 course ftco-animate">
      <div class="img" style="background-image: url({{URL::asset('public/images/course-2.jpg')}});"></div>
      <div class="text pt-4">
        <p class="meta d-flex">
          <span><i class="icon-user mr-2"></i>Mr. Khan</span>
          <span><i class="icon-table mr-2"></i>10 places</span>
          <span><i class="icon-calendar mr-2"></i>4 ans</span>
        </p>
        <h3><a href="#">MAINTENANCE INFORMATIQUE</a></h3>

      </div>
    </div>
    <div class="col-md-3 course ftco-animate">
      <div class="img" style="background-image: url({{URL::asset('public/images/course-3.jpg')}});"></div>
      <div class="text pt-4">
        <p class="meta d-flex">
          <span><i class="icon-user mr-2"></i>Mr. Khan</span>
          <span><i class="icon-table mr-2"></i>10 places</span>
          <span><i class="icon-calendar mr-2"></i>4 ans</span>
        </p>
        <h3><a href="#">INFOGRAPHIE</a></h3>

      </div>
    </div>
    <div class="col-md-3 course ftco-animate">
      <div class="img" style="background-image: url({{URL::asset('public/images/course-4.jpg')}});"></div>
      <div class="text pt-4">
        <p class="meta d-flex">
          <span><i class="icon-user mr-2"></i>Mr. Khan</span>
          <span><i class="icon-table mr-2"></i>10 places</span>
          <span><i class="icon-calendar mr-2"></i>4 ans</span>
        </p>
        <h3><a href="#">PATISSERIE</a></h3>
      </div>
    </div>
  </div>
</div>
</section>

<div class="overlay">
	</div>

  <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{URL::asset('public/images/bg_5.jpg')}}); background-position: 50% -87.5px;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-6 py-5 px-md-5">
					<div class="py-md-5">
						<div class="heading-section heading-section-white ftco-animate mb-5 fadeInUp ftco-animated">
							<h2 class="mb-4">Pre-Inscription</h2>
							<p>crivez nous crivez nous crivez nous crivez nouscrivez nous crivez nous crivez nous crivez
								nous crivez nous crivez nous.</p>
						</div>
						<form action="#" class="appointment-form ftco-animate fadeInUp ftco-animated">
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Prenom(s)">
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Nom(s)">
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select class="form-control selectpicker" style="background-color: black;">
												<option value="">Selectionnez votre Parcour</option>
												<option value="">RESEAU INFORMATIQUE </option>
												<option value="">MAINTENANCE
												</option><option value="">INFOGRAPHIE</option>
												<option value="">PATISSERIE</option>

											</select>
										</div>
									</div>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group ml-md-4">
									<input type="submit" value="SOUMETTRE" class="btn btn-primary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
