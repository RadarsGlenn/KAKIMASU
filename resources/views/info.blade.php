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
            <!-- Logo container in the center -->
            <div id="logocentre" class="text-center logo-container bg-white rounded-3">
              <img id="centrelogo2" src="{{ asset('images/kakimasu_logo.png') }}" alt="Logo">
            </div>
          </div>    
        </section>
      </div>
    </div>
  </header>
  
  <!-- button to go to "home" page -->
  <a href="{{ url('/home') }}" class="btn btn-secondary mt-3 ms-3">Retour</a>
  
  <!-- Title -->
  <h2 class="text-center mt-3">QUI SOMMES NOUS</h2>
  
  <!-- Subtitle  -->
  <h4 class="text-center mt-3">Kakimasu la nouvelle originalité</h4>
  
  <!-- Video section -->
  <div class="center-video">
    <video width="640" height="280" controls autoplay>
      <source src="{{ asset('videos/logo_animation.mp4') }}" type="video/mp4">
      Votre navigateur ne supporte pas la lecture de vidéos HTML5.
    </video>
  </div>
  
  <!-- Text section -->
  <div class="ms-5 me-5">
    <div class="ms-5 me-5">
      <div class="ms-5 me-5 mt-3 mb-3">
        <!-- Description of Kakimasu -->
        <p class="text-center">KAKIMASU is a new company that aims to help artists by printing their drawings on t-shirts.
          To do this, the artist creates an account on the site and uploads their drawings. They then determine the price (max 100€) for their artwork.
          They will be paid 40% of the t-shirt price when it is purchased.</p>
        
        <!-- Benefits of Kakimasu -->
        <p class="text-center">If you are looking for an original gift for a birthday, a way to earn money, or even to start a career as an artist,
          you are in the right place.</p>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="bg-danger container-fluid ps-5 pe-5" id="wrapperbas">
      <div class="row">
        <div class="col-3 bg-white col-4 rounded-3 mt-3 me-3" id="wrapperquisommesnous">
          <a class="fw-bold" id="quisommesnous">Qui sommes nous ?</a>
        </div>
        <!--<span class="vertical-line"></span>-->
        <div class="col-6">
          <!-- Logo section -->
          <div class="text-center mt-2 bg-white rounded-3" id="fondlogo">
            <img id="centrelogo" src="{{asset('images/kakimasu_logo.png')}}" alt="Logo">
          </div>
          <!-- Information section -->
          <div class="" id="info">
            <ul class="text-white text-center text-decoration-underline">
              <li>Contact us</li>
              <li>Terms and conditions</li>
              <li>Privacy policy</li>
              <li>Legal notices</li>
            </ul>
          </div>
        </div>
        <!--<span class="vertical-line"></span>-->  
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
  



    </body>
</html>