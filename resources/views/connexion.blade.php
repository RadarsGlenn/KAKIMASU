<?php
session_start();
if (isset($_POST['email']) && isset($_POST['mdp'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formulaireartiste";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND mdp = :mdp");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mdp', $mdp);
        $stmt->execute();
        $num_ligne = $stmt->rowCount();

        if ($num_ligne > 0) {
            header("Location: compte.blade.php");
            $_SESSION['email'] = $email;
            exit;
        } else {
            echo "Adresse Mail ou Mot de passe incorrect";
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>



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
		<!-- Header section -->
		<div class="bg-danger container-fluid" id="wrapperhaut2">
			<div>
				<section class="pt-2 header">
					<div>
						<!-- Logo container in the center -->
						<div id="logocentre" class="text-center logo-container bg-white rounded-3">
							<img id="centrelogo2" src="{{ asset('images/kakimasu_logo.png') }}" alt="Logo">
						</div>
					</div>    
				</section>
			</div>
		</div>
	</header>
	
	
	<div class="row mt-3">
		<!-- Artist Account section -->
		<div class="col-md-6">
			<div id="créer_un_compte" class="ms-3">
				<h4 class="text-danger">Artist Account</h4>
				<hr>
				<!-- Artist registration form -->
				<form action="{{ route('register') }}" method="POST" class="d-flex flex-column">
					@csrf
					<div class="mb-3">
						<label class="text-danger" for="username">USERNAME</label>
						<!-- Star icon indicating a required field -->
						<img src="{{ asset('images/favorites-star.png') }}" alt="star" class="img-fluid mb-1" style="max-width: 10px;" aria-hidden="true">
						<span class="visually-hidden">This field is required</span>
						<input type="text" id="username" name="username" class="form-control" required autocomplete="username" style="width: 90%;">
					</div>
					<!-- More form fields for artist registration -->
					<!-- ... -->
					<button type="submit" name="envoyerArtiste" class="btn btn-danger btn-sm text-dark" formaction="{{ url('/compte') }}" onclick="return validatePassword()">Create My Account</button>
					<!-- ... -->
				</form>
				<a href="{{ url('/se-co') }}" class="btn btn-secondary">Back</a>
			</div>
		</div>
		<!-- Client Account section -->
		<div class="col-md-6">
			<div class="ms-3">
				<h4 class="text-danger">Client Account</h4>
				<hr>
				<!-- Client registration form -->
				<form action="{{ route('register') }}" method="POST" class="d-flex flex-column">
					@csrf
					<!-- Form fields for client registration -->
					<!-- ... -->
					<button href="{{ url('/compte') }}" type="submit" class="btn btn-danger btn-sm text-dark">Create My Account</button>
					<!-- ... -->
				</form>	
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->
	
	<footer>
		<!-- Footer section -->
		<div class="bg-danger container-fluid ps-5 pe-5 mt-3" id="wrapperbas">
			<div class="row">
				<div class="col-3 bg-white col-4 rounded-3 mt-3 me-3" id="wrapperquisommesnous">
					<!-- Link to "Qui sommes nous ?" page -->
					<a href="{{ url('/info') }}" class="fw-bold" id="quisommesnous">Who are we?</a>
				</div>
				<div class="col-6">
					<!-- Logo section -->
					<div class="text-center mt-2 bg-white rounded-3" id="fondlogo">
						<img id="centrelogo" src="{{asset('images/kakimasu_logo.png')}}" alt="Logo">
					</div>
					<!-- Information section -->
					<div class="" id="info">
						<ul class="text-white text-center text-decoration-underline">
							<li>Contact us</li>
							<li>Terms and Conditions</li>
							<li>Privacy Policy</li>
							<li>Legal Information</li>
						</ul>
					</div>
				</div>            
				<div class="col-3 mt-5 d-flex">
					<!-- Social media icons -->
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

	<script>
		let creer_un_compte = document.getElementById("creer_un_compte");

		creer_un_compte.addEventListener("click", function() {
			let titre_f = document.getElementById("Titre_formulaire");
			titre_f.textContent = "Créer un compte";

			let texte_f = document.getElementById("texte_formulaire");
			texte_f.textContent = "Veuillez entrez les informations";

			let se_co_form = document.getElementById("se_connecter");
			se_co_form.style.display = "none";
			let creer_compte_form = document.getElementById("créer_un_compte");
			creer_compte_form.style.display = "block";
		});

		let se_connecter_boutton = document.getElementById("se_connecter_boutton");

		se_connecter_boutton.addEventListener("click", function() {
			let titre_f = document.getElementById("Titre_formulaire");
			titre_f.textContent = "Se connecter";

			let texte_f = document.getElementById("texte_formulaire");
			texte_f.textContent = "Veuillez vous connectez";

			let se_co_form = document.getElementById("se_connecter");
			se_co_form.style.display = "block";
			let creer_compte_form = document.getElementById("créer_un_compte");
			creer_compte_form.style.display = "none";
		});


		function validatePassword() {
		var password = document.getElementById("mdp").value;
		var confirmPassword = document.getElementById("confirm_mdp").value;

		if (password !== confirmPassword) {
			alert("Confirmation du mot de passe incorrecte.");
			return false;
		}

		return true;
	}
	</script>

</body>
</html>