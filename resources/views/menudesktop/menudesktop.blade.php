<!-- Menu desktop -->
<nav class="menu-desktop">
  <a class="logo-stick" href="{{url('/')}}">
    <img src="{{URL::asset('public/images/icon.jpg')}}" alt="LOGO">
  </a>
  <ul class="main-menu">
    <li class="main-menu-active">
      <a href="{{url('/')}}">ACCEUIL</a>
    </li>

    <li class="main-menu-active">
      <a href="{{url('/')}}">IGED</a>
      <ul class="sub-menu">
        <li><a href="{{url('/presentation')}}">PRESENTATION</a></li>
      </ul>
    </li>


    <li>
							<a href="#">DIPLOMES</a>
							<ul class="sub-menu">
								<li><a href="">NATIONAUX</a>
									<ul class="sub-menu">
										<li><a href="{{url('/cap-national')}}">CAP </a></li>
										<li><a href="{{url('/bt-national')}}">BT</a></li>
                    <li><a href="{{url('/bts-national')}}">BTS</a></li>
									</ul>
								</li>
								<li><a href="">INTERNATIONAUX</a>
									<ul class="sub-menu">
										<li><a href="{{url('/bts-international')}}">BTS </a></li>
										<li><a href="{{url('/vae')}}">VAE</a></li>
									</ul>
								</li>
							</ul>
		 </li>


		 <li>
							<a href="#">BOOTCAMP /SESSION DE FORMATION</a>
							<ul class="sub-menu">
								<li><a href="">LANGUE</a>
									<ul class="sub-menu">
										<li><a href="{{url('/anglais')}}">ANGLAIS </a></li>
										<li><a href="{{url('/arabe')}}">ARABE</a></li>
										<li><a href="{{url('/français')}}">FRANÇAIS</a></li>
									</ul>
								</li>
								<li><a href="">INFORMATIQUE</a>
									<ul class="sub-menu">
										<li><a href="">BUREAUTIQUE </a></li>
									</ul>
								</li>
							</ul>
			</li>

      <li><a href="{{url('/contact')}}">CONTACT</a></li>
  </ul>
</nav>
