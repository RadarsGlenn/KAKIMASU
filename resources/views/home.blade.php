<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--bootstrap popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!--bootstrap javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!--Mon css-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <title>Kakimasu</title>
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    <!--
      This HTML file is a template.
      If you open it directly in the browser, you will see an empty page.

      You can add webfonts, meta tags, or analytics to this file.
      The build step will place the bundled scripts into the <body> tag.

      To begin the development, run `npm start` or `yarn start`.
      To create a production bundle, use `npm run build` or `yarn build`.
    -->
    

    <!--HEADER-->

    <header>
      <div class="bg-danger container-fluid" id="wrapperhaut">
          <div class="row">
              <section class="pt-2 header">
                  <div class="col-2">
                      <div class="text-center mt-1 ms-5 bg-white rounded-3">
                          <img id="centrelogo" src="{{ asset('images/kakimasu_logo.png') }}" alt="Logo">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="mt-1 ms-5">
                          <input class="bg-white border border-3 border-dark rounded-pill p-3" id="searchbar" type="text" name="search" placeholder="Recherche">
                      </div>
                  </div>    
                  <div class="col-1">
                      <div id="filtre">
                          <p class="bg-white border border-3 border-dark rounded-pill p-3" id="modifiltre">Filtre</p>
                      </div>
                  </div>  
                  <div class="col-2 align-items-end mt-1">
                    <a href="{{ url('/se-co') }}">
                        <img class="button primary" id="droiteprofil" src="{{asset('images/user.png')}}" alt="Profil">
                    </a>
                    </div>
                </section>
            </div>
        </div>
        <div class="mt-3" id="vdt">
            <img id="modelelogo" src="{{asset('images/White_t-shirt_mockup.jpg')}}" alt="image">
            <p class="text-center mt-3" id="vente">Ventes de t-shirts</p>
        </div>
    </header>

  <!--CARROUSEL-->

  <div class="fs-6 ms-5 me-5 mt-3">
    <h3>Recommandations</h3>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/mockup/mockup-haikyuu.png')}}" class="d-block w-50 mx-auto" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/mockup/mockup-kage.png')}}" class="d-block w-50 mx-auto" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/mockup/mockup-lamu.png')}}" class="d-block w-50 mx-auto" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
  </div>
  
  
  <!--CATÉGORIES-->
  
  <section>
      <div class="fs-6 ms-5 me-5">

          <!--TENDANCES-->

          <div class="d-flex justify-content-between mt-3">
              <article class="text-black"> 
                  <p class="h3">Tendances</p>
              </article>
              <article class="text-danger me-3">
                  <p class="h5">voir tout</p>
              </article>
          </div>
          <div class="d-flex justify-content-start">
            
              <div class="mt-3">
                  <article class="border border-5 border-dark rounded-sm d-inline-flex me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                    <a href="{{ url('/article') }}">
                        <img src="{{asset('images/mockup/mockup-haikyuu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    </a>
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                          <div class="d-flex align-items-center justify-content-between">
                            <a class="button" onclick="changeImageLike(1)">
                              <img id="like1" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                            </a>
                            <a href="{{ url('/article') }}">                            
                              <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                            </a>
                              <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                          </div>
                      </div>
                      <div style="position: absolute; top: 5px; left: 5px;">
                          <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                      </div>
                  </article>
              </div>
            
                
              <div class="mt-3">
                  <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                    <img src="{{asset('images/mockup/mockup-kage.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                      <div class="d-flex align-items-center justify-content-between">
                        <a class="button" onclick="changeImageLike(2)">
                            <img id="like2" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                        </a>
                          <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                          <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                      </div>
                  </div>
                  <div style="position: absolute; top: 5px; left: 5px;">
                      <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                  </div>
                  </article>
              </div>
              <div class="mt-3">
                  <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                    <img src="{{asset('images/mockup/mockup-lamu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                      <div class="d-flex align-items-center justify-content-between">
                        <a class="button" onclick="changeImageLike(3)">
                            <img id="like3" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                        </a>
                          <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                          <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                      </div>
                  </div>
                  <div style="position: absolute; top: 5px; left: 5px;">
                      <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                  </div>
                  </article>
              </div>
              <div class="mt-3">
                  <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                    <img src="{{asset('images/mockup/mockup-thorfinn.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                      <div class="d-flex align-items-center justify-content-between">
                        <a class="button" onclick="changeImageLike(4)">
                            <img id="like4" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                        </a>
                          <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                          <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                      </div>
                  </div>
                  <div style="position: absolute; top: 5px; left: 5px;">
                      <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                  </div>
                  </article>
              </div>
              <div class="mt-3">
                  <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                    <img src="{{asset('images/mockup/mockup-tristepin.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                      <div class="d-flex align-items-center justify-content-between">
                        <a class="button" onclick="changeImageLike(5)">
                            <img id="like5" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                        </a>
                          <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                          <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                      </div>
                  </div>
                  <div style="position: absolute; top: 5px; left: 5px;">
                      <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                  </div>
                  </article>
              </div>
              <div class="mt-3">
                  <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                    <img src="{{asset('images/mockup/mockup-zoro.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                      <div class="d-flex align-items-center justify-content-between">
                        <a class="button" onclick="changeImageLike(6)">
                            <img id="like6" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                        </a>
                          <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                          <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                      </div>
                  </div>
                  <div style="position: absolute; top: 5px; left: 5px;">
                      <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                  </div>
                  </article>
              </div>
              <article class="d-flex justify-content-center align-items-center me-3 mt-4">
                <img id="arrow" src="{{asset('images/arrow-right.png')}}" alt="flèche">
              </article>
          </div>
          
          <!--DERNIERES SORTIES-->

          <div class="d-flex justify-content-between mt-3">
            <article class="text-black"> 
                <p class="h3">Tendances</p>
            </article>
            <article class="text-danger me-3">
                <p class="h5">voir tout</p>
            </article>
        </div>
        <div class="d-flex justify-content-start">
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-haikyuu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                        <div class="d-flex align-items-center justify-content-between">
                          <a class="button" onclick="changeImageLike(7)">
                              <img id="like7" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                          </a>
                            <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                            <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                        </div>
                    </div>
                    <div style="position: absolute; top: 5px; left: 5px;">
                        <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                    </div>
                </article>
            </div>
              
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-kage.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(8)">
                          <img id="like8" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-lamu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(9)">
                          <img id="like9" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-thorfinn.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(10)">
                          <img id="like10" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-tristepin.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(11)">
                          <img id="like11" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-zoro.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(12)">
                          <img id="like12" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <article class="d-flex justify-content-center align-items-center me-3 mt-4">
              <img id="arrow" src="{{asset('images/arrow-right.png')}}" alt="flèche">
            </article>
        </div>

          <!--LES PLUS REGARDÉS-->

          <div class="d-flex justify-content-between mt-3">
            <article class="text-black"> 
                <p class="h3">Tendances</p>
            </article>
            <article class="text-danger me-3">
                <p class="h5">voir tout</p>
            </article>
        </div>
        <div class="d-flex justify-content-start">
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-haikyuu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                        <div class="d-flex align-items-center justify-content-between">
                          <a class="button" onclick="changeImageLike(13)">
                              <img id="like13" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                          </a>
                            <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                            <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                        </div>
                    </div>
                    <div style="position: absolute; top: 5px; left: 5px;">
                        <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                    </div>
                </article>
            </div>
              
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-kage.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(14)">
                          <img id="like14" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-lamu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(15)">
                          <img id="like15" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-thorfinn.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(16)">
                          <img id="like16" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-tristepin.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(17)">
                          <img id="like17" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-zoro.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(18)">
                          <img id="like18" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <article class="d-flex justify-content-center align-items-center me-3 mt-4">
              <img id="arrow" src="{{asset('images/arrow-right.png')}}" alt="flèche">
            </article>
        </div>

          <!--LES PLUS LIKÉS-->

          <div class="d-flex justify-content-between mt-3">
            <article class="text-black"> 
                <p class="h3">Tendances</p>
            </article>
            <article class="text-danger me-3">
                <p class="h5">voir tout</p>
            </article>
        </div>
        <div class="d-flex justify-content-start">
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-haikyuu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                        <div class="d-flex align-items-center justify-content-between">
                          <a class="button" onclick="changeImageLike(19)">
                              <img id="like19" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                          </a>
                            <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                            <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                        </div>
                    </div>
                    <div style="position: absolute; top: 5px; left: 5px;">
                        <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                    </div>
                </article>
            </div>
              
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-kage.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(20)">
                          <img id="like20" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-lamu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(21)">
                          <img id="like21" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-thorfinn.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(22)">
                          <img id="like22" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-tristepin.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(23)">
                          <img id="like23" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-zoro.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(24)">
                          <img id="like24" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <article class="d-flex justify-content-center align-items-center me-3 mt-4">
              <img id="arrow" src="{{asset('images/arrow-right.png')}}" alt="flèche">
            </article>
        </div>

          <!--LES PLUS ACHETÉS-->

          <div class="d-flex justify-content-between mt-3">
            <article class="text-black"> 
                <p class="h3">Tendances</p>
            </article>
            <article class="text-danger me-3">
                <p class="h5">voir tout</p>
            </article>
        </div>
        <div class="d-flex justify-content-start">
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-haikyuu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                        <div class="d-flex align-items-center justify-content-between">
                          <a class="button" onclick="changeImageLike(25)">
                              <img id="like25" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                          </a>
                            <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                            <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                        </div>
                    </div>
                    <div style="position: absolute; top: 5px; left: 5px;">
                        <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                    </div>
                </article>
            </div>
              
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-kage.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(26)">
                          <img id="like26" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-lamu.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(27)">
                          <img id="like27" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-thorfinn.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(28)">
                          <img id="like28" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-tristepin.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(29)">
                          <img id="like29" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <div class="mt-3">
                <article class="border border-5 border-dark rounded-sm d-inline-flex align-items-center me-3 mb-3" style="height: 200px; width: 200px; position: relative;">
                  <img src="{{asset('images/mockup/mockup-zoro.png')}}" alt="mockup-haikyuu" style="position: absolute; height: 100%; width: 100%; object-fit: cover; object-position: center;">
                  <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 5px;">
                    <div class="d-flex align-items-center justify-content-between">
                      <a class="button" onclick="changeImageLike(30)">
                          <img id="like30" src="{{asset('images/lovely-heart.png')}}" alt="like" style="margin-right: 5px;" />
                      </a>
                        <img id="comm" src="{{asset('images/comm.png')}}" alt="commentaire" style="margin-right: 5px;" />
                        <img id="panier" src="{{asset('images/basket-black-shape.png')}}" alt="panier" />
                    </div>
                </div>
                <div style="position: absolute; top: 5px; left: 5px;">
                    <img id="user" src="{{asset('images/user.png')}}" alt="profil" />
                </div>
                </article>
            </div>
            <article class="d-flex justify-content-center align-items-center me-3 mt-4">
                <img id="arrow" src="{{asset('images/arrow-right.png')}}" alt="flèche">
            </article>
        </div>
      </div>
  </section>
  
  
<!--FOOTER-->

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
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/like.js') }}"></script>-->
  <script>
  function changeImageLike(id) {
  var image = document.getElementById("like" + id);
  if (image.src.match("{{asset('images/lovely-heart.png')}}")) {
    image.src = "{{asset('images/red-heart.png')}}";
  } else if (image.src.match("{{asset('images/red-heart.png')}}")) {
    image.src = "{{asset('images/lovely-heart.png')}}";
  }
}
  </script>


  </body>
</html>
