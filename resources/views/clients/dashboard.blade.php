@extends('layouts.client')

@section('contenu')
<div class="container-fluid">

    <div id="myCarousel" class="carousel slide" style="color: #5a5a5a" data-ride="carousel">
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
                <p>Plus de 14000 oeufs engagés par semaine pour répondre à vos besoins partout au Mali.</p>
                <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="{{ asset('images/Capture d’écran (114).png')}}" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Réussir vos projets avicoles grâce à notre expertise.</h1>
                <p>Développer les performances de votre structure avicole grâce à notre expertise, notre savoir-faire et notre accompagnement.</p>
                <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Apprendre plus</a></p> -->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="{{ asset('images/fghhhhbbh00.jpg')}}" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Tout savoir sur les types d'aliments volailles.</h1>
                <p>Decouvrez les meilleurs aliments pour un élevage complet de vos poules.</p>
                <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
              </div>
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
    </div>

    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div id="categorie" class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/poussinghgjg.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Poussin de chair</h2>
            <p>Ce sont des poulets qui sont élevés pour leur viande et non pas pour produire des œufs.
              Un poulet de chair, appelé aussi poulet à frire ou poulet à griller, est une Poule domestique...</p>
            <p><a class="btn btn-secondary" href="/poussin1" role="button" data-dismiss="modal" aria-label="Close">Détails &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/trio110.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Bleu Hollandais</h2>
            <p>La Poule de Hollande du Nord, anciennement Bleue de Hollande est une race de poule domestique. 
                Elle figure parmi les 108 races de poule reconnues du British Poultry Standard.</p>
            <p><a class="btn btn-secondary" href="/poussin2" role="button">Détails &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/VIER-PFOTEN.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Poule pondeuse</h2>
            <p>On appelle poule pondeuse une poule issue de lignées spécialisées qui produit des œufs pour la consommation humaine. Ces œufs ne sont pas fécondés.</p>
            <p><a class="btn btn-secondary" href="/poussin3" role="button">Détails &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

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

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

        <!-- CARD START -->
        <div class="container">
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

        <hr class="featurette-divider">
        <!-- END CARD -->

        <!--Section: Contact v.2-->
        <div class="mb-4">

        <!--Section heading-->
        <h2 id="contact" class="h1-responsive font-weight-bold text-center my-4">Nous contactez</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Avez-vous une question? N'hésitez pas de nous contacter directement. 
        Notre équipe vous fera un retour dans les heures qui suivent pour vous aider.</p>

        <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Votre nom</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Votre mail</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Sujet</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Votre message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>  
                        </div>

                    </div>
                </div>
                <!--Grid row-->
            </form>

            <div class="text-center text-md-left mt-2">
                <a class="btn btn-secondary text-light" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
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
        </div>
        <!--Grid column-->
        </div>
        </div>
        <!--Section: Contact v.2-->
    </div>
</div>

<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

@endsection