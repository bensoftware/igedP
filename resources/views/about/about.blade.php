@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')


<!-- Page heading -->
<div class="container p-t-4 p-b-35">
<h2 class="f1-l-1 cl2">
  A propos de nous
</h2>
</div>

<!-- Content -->
<section class="bg0 p-b-110">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-8 p-b-30">
      <div class="p-r-10 p-r-0-sr991">
        <p class="f1-s-11 cl6 p-b-25">
          Offrant des formations professionnelles dans le domaine du management et des sciences de gestion, IGED délivre des diplômes dont la plupart sont homologués par le CAMES. Au-delà de son siège qui est à Nouakchoot dans l’arrondissement n°6, dans le quartier Kouritenga,
          IGED dispose deux annexes dans cette même ville respectivement à la Patte d’oie et au centre-ville (Koulouba).
        </p>

        <p class="f1-s-11 cl6 p-b-25">
          Pour insuffler sa dynamique de croissance, incarnée par ambitions futuristes, IGED mène couramment des actions de formation pluridisciplinaires au profit des bacheliers et des professionnels.
          Les différentes formations qui y sont dispensées sont sanctionnées par l’un des diplômes suivants : Licence professionnelle, Master.
        </p>

        <p class="f1-s-11 cl6 p-b-25">
          En dépit de ces diplômes qui respectent les normes du système LMD, IGED prépare ses étudiants aux diplômes intermédiaires tels le Diplôme de Technicien Supérieur (diplôme interne) et le Brevet de Technicien Supérieur d’État (BTS d’État) organisé par l’Université de Bobo.
          L’administration des cours est assurée par des enseignants pluridisciplinaires et des professionnels de haut niveau. Outre les programmes officiels de formation, les étudiants suivent d’autres formations (logiciels de gestion, traitement d’images etc.) sanctionnées par
          des attestations.
        </p>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="col-md-5 col-lg-4 p-b-30">
      <div class="p-l-10 p-rl-0-sr991 p-t-5">
        <!-- Popular Posts -->
        <div>
          <div class="how2 how2-cl4 flex-s-c">
            <h3 class="f1-m-2 cl3 tab01-title">
              Articles populaires
            </h3>
          </div>

          <ul class="p-t-35">
            <li class="flex-wr-sb-s p-b-20">
              <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                <img src="{{URL::asset('public/images/images/popular-post-01.jpg')}}" alt="IMG">
              </a>
              <div class="size-w-5">
                <h6 class="p-b-5">
                  <a href="#" class="text f1-s-5 cl11 hov-cl10 trans-03">
                    Formation sur word,Excel et Powerpoint.
                  </a>
                </h6>
                <span class="f1-s-3 cl6">
                  17 Juin
                </span>
              </div>
            </li>

            <li class="flex-wr-sb-s p-b-20">
              <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                <img src="{{URL::asset('public/images/images/popular-post-02.jpg')}}" alt="IMG">
              </a>
              <div class="size-w-5">
                <h6 class="p-b-5">
                  <a href="#" class="text f1-s-5 cl11 hov-cl10 trans-03">
                    Formation sur la programmation Web
                  </a>
                </h6>
                <span class="f1-s-3 cl6">
                  03 Juillet
                </span>
              </div>
            </li>
            <li class="flex-wr-sb-s p-b-20">
              <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                <img src="{{URL::asset('public/images/images/popular-post-03.jpg')}}" alt="IMG">
              </a>
              <div class="size-w-5">
                <h6 class="p-b-5">
                  <a href="#" class="text f1-s-5 cl11 hov-cl10 trans-03">
                    Formation en infographie
                  </a>
                </h6>
                <span class="f1-s-3 cl6">
                  18 Septembre
                </span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
<span class="symbol-btn-back-to-top">
  <span class="fas fa-angle-up"></span>
</span>
</div>

<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document" data-dismiss="modal">
  <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

  <div class="wrap-video-mo-01">
    <div class="video-mo-01">
      <iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
    </div>
  </div>
</div>
</div>

@endsection
