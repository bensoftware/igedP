<!-- Footer -->
<footer>
	<div class="bg2 p-t-40 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<a href="index.html">
							<h5 class="f1-m-7 cl0">
								Avez-vous des questions ?
							</h5>
						</a>
					</div>
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon icon-map-marker"></span><span class="text">Tevragh Zeina AT 258. Vers Hotel EMIRA,Nouakchoot-Mauritanie</span></li>
					  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+222 48 88 55 50</span></a></li>
					  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@ged.mr</span></a></li>
					</ul>
				  </div>
					<div>
						<div class="p-t-15">
							<a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
								<span class="fab fa-facebook-f"></span>
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Information
						</h5>
					</div>

					<ul class="list-unstyled">
						<li><a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8"><span class="ion-ios-arrow-round-forward mr-2"></span>Acceuil</a></li>
						<li><a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8"><span class="ion-ios-arrow-round-forward mr-2"></span>Presentation</a></li>
						<li><a href="#"class="fs-18 cl11 hov-cl10 trans-03 m-r-8"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-4 p-b-20">
					<div class="size-h-3 flex-s-c">
						<h5 class="f1-m-7 cl0">
							Abonnez-Vous
						</h5>
					</div>
					<ul>
						<li class="flex-wr-sb-s p-b-20">
							<form action="{{route('abonement.store')}}" class="subscribe-form"  method="POST">
								 @csrf
								<div class="form-group">
								  <input type="email" class="form-control mb-2 text-center" name="email" placeholder="Adresse electronique" required>
								  <input type="submit" value="Abonnement" class="form-control submit px-3">
								</div>
							  </form>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>

	<div class="bg11">
		<div class="container size-h-4 flex-c-c p-tb-15">
			<span class="f1-s-1 cl0 txt-center">
				<a href="#" class="" style="color: aliceblue;"> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Ben  by <a href="" target="_blank">Bensoftware</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</span>
		</div>
	</div>
</footer>
