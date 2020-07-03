
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
            <p><a href="groupedescartes@gmail.com">groupedescartes@gmail.com</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Site Web</h3>
            <p><a
                href="http://iged.mr/iged/s">http://iged.mr/iged/</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

<!---
  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
      <div class="row d-flex align-items-stretch no-gutters">
        <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nom(s)">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Prenom(s)">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Sujet">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Envoyer votre message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div id="map"></div>
        </div>
      </div>
    </div>
  </section>   --->
@endsection
