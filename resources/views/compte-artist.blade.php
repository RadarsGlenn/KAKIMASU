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
    <link rel="stylesheet" href="fichiers/css/style.css" type="text/css">
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

      <a href="connection.html" class="btn btn-secondary">Retour</a>

     
      <div style="display: flex; flex-direction: column; align-items: center;">
        <img id="pp" src="assets/images/Yami.png" alt="pp" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
        <h3 style="color: red;">Yami</h3>
        <div style="height: 10px;"></div>
        <a style="display: block; width: 50%; height: 50px; border: 1px solid black; color: red; background-color: white; border-radius: 10px; text-align: center; margin: 0 auto;">Mon panier</a>
		<div style="height: 10px;"></div>
        <a href="index.html" style="display: block; width: 50%; height: 50px; border: 1px solid black; color: red; background-color: white; border-radius: 10px; text-align: center; margin: 0 auto;">Se déconnecter</a>
        <div style="height: 10px;"></div>
    </div>
    
    <?php 

	if (isset($_POST['submit'])){
		echo "ok";
	}



	?>


	<footer>
		<div class="bg-danger container-fluid ps-5 pe-5" id="wrapperbas">
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