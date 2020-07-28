
@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')

  <section class="hero-wrap hero-wrap-2" style="background-image: url({{URL::asset('public/images/banner.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contactez - Nous</h1>
        </div>
       </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Addresse</h3>
            <p>Tevragh Zeina AT 258. Vers Hotel EMIRA,Nouakchoot-Mauritanie</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Mobile</h3>
            <p><a href="tel://1234567920">+222 48 88 55 50</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Adresse Electronique</h3>
            <p><a href="">groupedescartes@gmail.com</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Site Web</h3>
            <p><a
                href="http://iged.mr">http://iged.mr</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
      <div class="row d-flex align-items-stretch no-gutters">

        <div class="col-md-12 d-flex align-items-stretch">
          <div style="width: 100%"><iframe width="100%" height="600"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Tevragh%20Zeina%20AT%20258.%20Vers%20Hotel%20EMIRA,Nouakchoot-Mauritanie+(Institut%20du%20Groupe%20Educatif%20Descartes%20)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
          </iframe><a href="http://www.gps.ie/">BenSoftware</a></div>

        </div>
      </div>
    </div>
  </section>
@endsection
