<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--bootstrap popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!--bootstrap javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!--Mon css-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
	<title>Page de connexion</title>
</head>
<body>
	<!--HEADER-->

    <header>
		<div class="bg-danger container-fluid" id="wrapperhaut2">
		  <div>
			<section class="pt-2 header">
			  <div>
				<div id="logocentre" class="text-center logo-container bg-white rounded-3">
				  <img id="centrelogo2" src="{{ asset('images/kakimasu_logo.png') }}" alt="Logo">
				</div>
			  </div>    
			</section>
		  </div>
		</div>
	  </header>
	  
	  


	<div class="row">
		<div class="col-md-6">
			<div class="ms-3">
				<h4 class="text-danger">Se connecter</h4>
				<hr>
				<h6 class="text-danger">Si vous avez un compte, connectez-vous avec votre adresse e-mail.</h6>
				<form action="#" method="post" class="d-flex flex-column">
					<div class="mb-3">
						<label class="text-danger" for="username">EMAIL<span class="text-danger"></span></label> 
						<img class="mb-1" src="{{ asset('images/favorites-star.png') }}" alt="star" class="img-fluid" style="max-width: 10px;">
						<br>
						<input type="text" id="username" name="username" required style="width: 100%;">
					</div>
					<div class="mb-3">
						<label class="text-danger" for="password">Mot de passe<span class="text-danger"></span></label> 
						<img class="mb-1" src="{{ asset('images/favorites-star.png') }}" alt="star" class="img-fluid" style="max-width: 10px;">
						<br>
						<input type="password" id="password" name="password" required style="width: 100%;">
					</div>
					<div class="d-flex align-items-center">
						<input type="checkbox" id="monCarre">
						<label class="ms-2" for="monCarre">Se souvenir de moi</label>
						<div class="ms-3">
							<button type="submit" class="btn btn-danger btn-sm text-dark">Se connecter</button>
						</div>
					</div>
					<div class="d-flex align-items-center">
						<img class="mb-3" src="{{ asset('images/favorites-star.png') }}" alt="star" class="img-fluid" style="max-width: 15px;">
						<p>Champs obligatoires<span class="text-danger"></span></p>
					</div>
				</form>							
				<a href="{{ url('/home') }}" class="btn btn-secondary">Retour</a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="">
				<h4 class="text-danger">S'inscrire</h4>
				<hr>
				<div>
					<a href="{{ url('/connexion') }}" type="submit" class="btn btn-danger btn-sm text-dark">S'inscrire</a>
				</div>
			</div>
		</div>
	</div>
  
	



	<!--FOOTER-->

	<footer>
		<div class="bg-danger container-fluid ps-5 pe-5" id="wrapperbas2">
			<div class="row">
				<div class="col-3 bg-white col-4 rounded-3 mt-3 me-3" id="wrapperquisommesnous">
					<a href="{{ url('/info') }}" class="fw-bold" id="quisommesnous">Qui sommes nous ?</a>
				</div>
				<!--<span class="vertical-line"></span>-->
				<div class="col-6">
					<div class="text-center mt-2 bg-white rounded-3" id="fondlogo">
						<img id="centrelogo" src="{{asset('images/kakimasu_logo.png')}}" alt="Logo">
					</div>
					<div class="" id="info">
						<ul class="text-white text-center text-decoration-underline">
							<li>Contactez nous</li>
							<li>Conditions générales de vente</li>
							<li>Politique de confidentialité</li>
							<li>Mentions légales</li>
						</ul>
					</div>
				</div>            
				<!--<span class="vertical-line"></span>-->  
				<div class="col-3 mt-5 d-flex">
					<div class="ms-3">
					  <a href="https://www.instagram.com/yami__draw/" target="_blank">
						<img class="button primary" id="insta" src="{{asset('images/Instagram_icon.png')}}" alt="insta">
					  </a>
					  </div>                      
					<div class="ms-3 me-3">
						<img id="twitter" src="{{asset('images/twitter_icon.png')}}" alt="twitter">
					</div>
					<div class="ms-1">
						<img id="facebook" src="{{asset('images/Facebook_icon.png')}}" alt="facebook">
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>