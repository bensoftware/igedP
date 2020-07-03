
@extends('layout')
@section('page-title')
    IGED
@endsection
@section('page-content')
<!-- Post -->
  <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{URL::asset('public/images/bg_5.jpg')}}); background-position: 50% -87.5px;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-10 py-5 px-md-5">
					<div class="py-md-5">
						<div class="heading-section heading-section-white ftco-animate mb-5 fadeInUp ftco-animated">
              <h2 class="mb-4">Postuler</h2>
							<p>Postuler, veuillez  remplir le formulaire ci-dessous.</p>
						</div>

						<form  action="{{route('postuler.store')}}" method="POST" class="appointment-form ftco-animate fadeInUp ftco-animated" >
               @csrf
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" class="form-control" name="prenom"placeholder="Prenom(s)" required>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control"  name="nom" placeholder="Nom(s)" required>
                  	<input type="hidden" class="form-control"  name="filliere" value="{{$filliere}}" required>
                    <input type="hidden" class="form-control"  name="diplome"  value="{{$diplome}}"  required>
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<input type="email" class="form-control" name="email" placeholder="Adresse electronique" required>
										</div>
									</div>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" class="form-control .phone" name="phone" placeholder="Phone"required>
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<textarea name="niveau" id="" cols="30" rows="2" class="form-control" placeholder="Niveau(BAC,BPC,CEP...)" required></textarea>
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
