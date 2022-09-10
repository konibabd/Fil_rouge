
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <title>Chiyè Goundo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css')}}" rel="stylesheet"> 
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=jbz_of2r3ygotQi2IkGF6_CB3--b1EcDr5aj6ewAqz_PhxFXMZmW7R1YifQJ8eo7GSSGiUoM9rGdrLlaS3WA-ZTyEkhm5vN2WjZCSAhyh64" charset="UTF-8"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  </head>
  <body>

    <!-- Modal -->
  <!-- <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Voulez-vous acheter ce produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Veuillez créer un compte ou vous connectez à partir d'un compte existant.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

    <header>
      <nav class="cc-navbar navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #291B0E">
        <!-- <a class="navbar-brand" href="#">ChiyèGoundo</a> -->
        <img src="{{ asset('images/IMG-20220210-WA0000.png')}}" class="rounded-circle" style="width: 100px; height: 100px"; alt="...">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-5" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="/client">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#categorie">Catégorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#decouverte">Découverte</a>
            </li>
            <li class="nav-item text-white">
                <a class="nav-link text-white" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#propos">A propos</a>
            </li>
            <!-- <li class="nav-item" style="margin-left:150px; margin-top: 10px">
            <a style="text-decoration:none; color: #fff" href="/paniers/create" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li> -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow" style="margin-left: 500px;">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" style="width: 30px; height: 30px;"
                src="{{asset('img/undraw_profile.svg')}}">
              </a>
              <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                    <!-- <a class="dropdown-item" href="#">
                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                      Activity Log
                    </a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Déconnexion
                    </a>
                </div>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <!-- <button type="button" class="btn logg  btn-outline-warning"><a style="text-decoration:none; color: #fff" href="/paniers/create" ><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></button> -->
            <!-- <button type="button" class="btn logg  btn-outline-warning"><a style="text-decoration:none; color: #fff" href="{{ route('logout') }}" ><i class="fa fa-sign-out" aria-hidden="true"></i></a></button> -->
          </form>
          <!-- <form class="form-inline mt-2 mt-md-0">
            <button class="btn btn-outline-secondary" type="submit"><a style="text-decoration:none; color: #fff" href="/login">Se connecter</a></button>
            <button class="btn logge btn-outline-secondary" type="submit"><a style="text-decoration:none; color:#fff;" href="/client-register">S'inscrire</a></button>
          </form> -->
        </div>
      </nav>
    </header>

    <main role="main">

      <!-- <div id="myCarousel" class="carousel slide" style="color: #5a5a5a" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="{{ asset('images/IMG_8172JPG.jpg')}}" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Production et vente de poussins d'un jour.</h1>
                <p>Plus de 14000 oeufs engagés par semaine pour répondre à vos besoins partout au Mali.</p> -->
                <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
              <!-- </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="{{ asset('images/Capture d’écran (114).png')}}" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Réussir vos projets avicoles grâce à notre expertise.</h1>
                <p>Développer les performances de votre structure avicole grâce à notre expertise, notre savoir-faire et notre accompagnement.</p> -->
                <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Apprendre plus</a></p> -->
              <!-- </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="{{ asset('images/fghhhhbbh00.jpg')}}" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Tout savoir sur les types d'aliments volailles.</h1>
                <p>Decouvrez les meilleurs aliments pour un élevage complet de vos poules.</p> -->
                <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
              <!-- </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> -->

        <div class="row mt-5 mb-4">
             @yield('contenu')
        </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <!-- <div id="categorie" class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/poussinghgjg.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Poussin de chair</h2>
            <p>Ce sont des poulets qui sont élevés pour leur viande et non pas pour produire des œufs.
              Un poulet de chair, appelé aussi poulet à frire ou poulet à griller, est une Poule domestique...</p>
            <p><a class="btn btn-secondary" href="/poussin1" role="button" data-dismiss="modal" aria-label="Close">Détails &raquo;</a></p> -->
          <!-- </div>/.col-lg-4 -->
          <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/trio110.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Bleu Hollandais</h2>
            <p>La Poule de Hollande du Nord, anciennement Bleue de Hollande est une race de poule domestique. 
                Elle figure parmi les 108 races de poule reconnues du British Poultry Standard.</p>
            <p><a class="btn btn-secondary" href="/poussin2" role="button">Détails &raquo;</a></p> -->
          <!-- </div>/.col-lg-4 -->
          <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/VIER-PFOTEN.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Poule pondeuse</h2>
            <p>On appelle poule pondeuse une poule issue de lignées spécialisées qui produit des œufs pour la consommation humaine. Ces œufs ne sont pas fécondés.</p>
            <p><a class="btn btn-secondary" href="/poussin3" role="button">Détails &raquo;</a></p> -->
          <!-- </div>/.col-lg-4 -->
        <!-- </div>/.row -->


        <!-- START THE FEATURETTES -->

        <!-- <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">’Wassachiè’.<span class="text-muted"></span></h2>
            <p class="lead">Le Wassachiè ou poule 3/4 du Mali Est issu d'un croisement entre le Red Island Red et le Koko-Chiyè une poule locale.
            3/4 ou "wassachiè" signifie "poulet de satisfaction en Bambara".
            </p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/poule-rousse-095941.jpg')}}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Brahma. <span class="text-muted"></span></h2>
            <p class="lead">Brahma est une race de poule originaire d’Asie tout d’abord exportée vers les Etats-Unis au milieu du XIXe siècle puis vers l’Europe occidentale, 
              et plus spécifiquement en Angleterre et en France. Massive, cette poule géante est parmi les plus grosses du monde, mais il en existe aussi une variété naine.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/brahma-columbia-rousse-grande-coq-reproducteur-poule-geante-pondeuse-640x512.jpg')}}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">La Noire du Berry. <span class="text-muted"></span></h2>
            <p class="lead">La Noire du Berry arbore un plumage totalement noir et lustré. Sa crête rouge vif se dégage nettement, de même que ses yeux rouge-orangé. Ses pattes sont gris ardoise. Son cou est assez large, de même que son dos et ses épaules. Ses ailes sont bien développées.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/poule-race-orpington.jpg')}}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider"> -->

        <!-- /END THE FEATURETTES -->
        <!-- <div class="container">
            <div class="row justify-content-center">
              <h3 id="decouverte" class="text-center">Nos varietés de poules</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-6">
              <div class="card">
                <img src="{{ asset('images/race-poule-noir-065357-650-400.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body justify-content-center">
                  <h5 class="card-title">La noire du Berry</h5>
                  <p class="card-text text-justify">La Noire du Berry arbore un plumage totalement noir et lustré. 
                    Sa crête rouge vif se dégage nettement, de même que ses yeux rouge-orangé. 
                    Ses pattes sont gris ardoise. Son cou est assez large, de même que son dos et ses épaules. Ses ailes sont bien développées.</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <img src="{{ asset('images/poule-soie-083319.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Poule soie</h5>
                  <p class="card-text text-justify">La Poule Soie, anciennement Nègre Soie, est une race de poule domestique originaire de Chine, 
                    connue pour son plumage soyeux, sa peau et son ossature noire et ses cinq doigts aux pattes. Le nom de poule soie 
                    a été voté en 2009 par la commission des standards.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{ asset('images/Coccidiose.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Poulet de chair</h5>
                  <p class="card-text text-justify">Ce sont des poulets qui sont élevés pour leur viande et non pas pour produire des œufs.
                  Un poulet de chair, appelé aussi poulet à frire ou poulet à griller, est une Poule domestique élevée spécifiquement 
                  pour la production de viande. Il possède des caractéristiques physiques différentes des poules pondeuses, des poules 
                  d'ornement ou des poules de compagnie.L’élevage de poulets de chair semble répondre aux standards d’une grande partie 
                  de la population qui préfère une viande jeune, à la texture plus tendre.
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{{ asset('images/vie-poules-pondeuses-1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">La poule pondeuse</h5>
                  <p class="card-text text-justify">De plus en plus de particuliers décident de se lancer dans l’élevage de poules pondeuses afin d’avoir des œufs frais tous les jours.
                    L’élevage de poules pondeuses ne présente pas de grandes difficultés. Il existe de nombreuses races de poules : poule pondeuse, poule couveuse,
                     poule naine, poule d’ornement… Chaque race a ses qualités propres. Comme leurs noms l’indiquent, les poules pondeuses sont particulièrement douées pour pondre
                     de façon régulière. Elles ont donc un meilleur rendement de ponte que d’autres races.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <hr class="featurette-divider"> -->
            
      <!--Section: Contact v.2-->
      <!-- <div class="mb-4"> -->

        <!--Section heading-->
        <!-- <h2 id="contact" class="h1-responsive font-weight-bold text-center my-4">Nous contactez</h2> -->
        <!--Section description-->
        <!-- <p class="text-center w-responsive mx-auto mb-5">Avez-vous une question? N'hésitez pas de nous contacter directement. 
        Notre équipe vous fera un retour dans les heures qui suivent pour vous aider.</p>

        <div class="row"> -->

          <!--Grid column-->
          <!-- <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form" action="mail.php" method="POST"> -->

                  <!--Grid row-->
                  <!-- <div class="row"> -->
                      <!--Grid column-->
                      <!-- <div class="col-md-6">
                          <div class="md-form mb-0">
                              <label for="name" class="">Votre nom</label>
                              <input type="text" id="name" name="name" class="form-control">
                          </div>
                      </div> -->
                      <!--Grid column-->

                      <!--Grid column-->
                      <!-- <div class="col-md-6">
                          <div class="md-form mb-0">
                              <label for="email" class="">Votre mail</label>
                              <input type="text" id="email" name="email" class="form-control">
                          </div>
                      </div> -->
                      <!--Grid column-->
                  <!-- </div> -->
                  <!--Grid row-->

                  <!--Grid row-->
                  <!-- <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <label for="subject" class="">Sujet</label>
                              <input type="text" id="subject" name="subject" class="form-control">
                          </div>
                      </div>
                  </div> -->
                  <!--Grid row-->

                  <!--Grid row-->
                  <!-- <div class="row"> -->

                      <!--Grid column-->
                      <!-- <div class="col-md-12">

                          <div class="md-form">
                              <label for="message">Votre message</label>
                              <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>  
                          </div>

                      </div>
                  </div> -->
                  <!--Grid row-->

              <!-- </form> -->

              <!-- <div class="text-center text-md-left mt-2">
                  <a class="btn btn-secondary text-light" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
              </div>
              <div class="status"></div>
          </div> -->
          <!--Grid column-->

          <!--Grid column-->
          <!-- <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>Bamako, Mali</p>
                  </li>

                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+ 223 20 25 30 45</p>
                  </li>

                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>koumapoussin@gmail.com</p>
                  </li>
              </ul>
          </div> -->
          <!--Grid column-->
        <!-- </div>
      </div> -->
      <!--Section: Contact v.2-->

      </div><!-- /.container -->

        <!-- <hr class="featurette-divider"> -->
      <!-- FOOTER -->
        <footer class="footer text-center" style="background:#291B0E; margin-top: 65px;">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Adresse</h4>
                        <p class="lead mb-0">
                            Kouma - Poussin SARL <br />
                            Moussabougou, (Kati)<br />
                            koumapoussin@gmail.com <br />
                            (+223) 20253045
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Réseaux sociaux</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 id="propos" class="text-uppercase mb-4">A propos</h4>
                        <p class="lead mb-0">
                            Créée en 2022, Kouma - Poussin est une Entreprise avicole de reproduction, de vente de volailles, de conseils et d'accompagnement
                            <!-- <a href="http://startbootstrap.com">Entreprise Kouma - Poussin SARL</a> -->
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </main>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Prêt à quitter?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Cliquer sur "Déconnexion" si vous voulez fermer la session ouverte.</div>
                <div class="modal-footer">
                    
                    <button class="btn btn-secondary" type="" data-dismiss="modal">Annuler</button>
                    <!-- <a class="btn btn-primary" href="">hgdmhgfh</a> -->
                    <button class="btn btn-primary" class="dropdown-item text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Déconnexion') }}
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                    </form>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('js/holder.min.js')}}"></script>
  </body>
</html>

