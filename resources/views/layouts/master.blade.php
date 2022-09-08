
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
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=jbz_of2r3ygotQi2IkGF6_CB3--b1EcDr5aj6ewAqz_PhxFXMZmW7R1YifQJ8eo7GSSGiUoM9rGdrLlaS3WA-ZTyEkhm5vN2WjZCSAhyh64" charset="UTF-8"></script></head>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

  <body>

    <header>
      <nav class="cc-navbar navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #291B0E;">
        <!-- <a class="navbar-brand" href="#">ChiyèGoundo</a> -->
        <img src="{{ asset('images/IMG-20220210-WA0000.png')}}" class="rounded-circle" style="width: 75px; height: 75px"; alt="...">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-5" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="/">Accueil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#categorie">Catégorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#decouverte">Découverte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#propos">A propos</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <!-- <button type="button" class="btn logg  btn-outline-warning"><a style="text-decoration:none; color: #fff" href="/commandes/create" >Passer une commande</a></button> -->
          </form>
          <form class="form-inline mt-2 mt-md-0">
            <button class="btn btn-outline-secondary" type="submit"><a style="text-decoration:none; color: #fff" href="/login">Se connecter</a></button>
            <button class="btn logge btn-outline-secondary" type="submit"><a style="text-decoration:none; color:#fff;" href="/client-register">S'inscrire</a></button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">

      <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="{{ asset('images/poussin.jpg')}}" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Production de poulet de chair.</h1>
                <p>Près de 14000 oeufs engagés par semaine pour répondre à vos besoins partout au Mali.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="{{ asset('images/Capture d’écran (114).png')}}" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>11 ans d'expertise en aviculture.</h1>
                <p>Développer les performances de votre structure avicole grâce à notre expertise, notre savoir-faire et notre accompagnement.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Apprendre plus</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="{{ asset('images/produits-volaille-704974-pxhere.com.jpg')}}" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Un service de qualité et de professionnalisme.</h1>
                <p>Pour nous chaque client compte, votre satifaction est notre objectif de tous les jours.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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
      </div> -->
        
        <div class="row mt-5 mb-4">
             @yield('contenu')
        </div>
           
        

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <!-- <div class="container marketing"> -->

        <!-- Three columns of text below the carousel -->
        <!-- <div id="categorie" class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/poussinghgjg.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Poussin de chair</h2>
            <p>Nous produisons des poulets chairs de meilleure qualité à des prix très abordables.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Détails &raquo;</a></p> -->
          <!-- </div>/.col-lg-4 -->
          <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/téléchargement (2).jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Bleu Hollandais</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Détails &raquo;</a></p> -->
          <!-- </div>/.col-lg-4 -->
          <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="{{ asset('images/Comment-elever-des-poules-pondeuses-chez-soi-Nutri-Green-Planet-1080x675.jpg')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Poule pondeuse</h2>
            <p>On appelle poule pondeuse une poule issue de lignées spécialisées qui produit des œufs pour la consommation humaine. Ces œufs ne sont pas fécondés.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Détails &raquo;</a></p> -->
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
              <h3 class="text-center">Nos catégories</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-6">
              <div class="card">
                <img src="{{ asset('images/race-poule-noir-065357-650-400.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body justify-content-center">
                  <h5 class="card-title">La noire du Berry</h5>
                  <p class="card-text">La Noire du Berry arbore un plumage totalement noir et lustré. 
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
                  <p class="card-text">La Poule Soie, anciennement Nègre Soie, est une race de poule domestique originaire de Chine, 
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
                  <p class="card-text">Ce sont des poulets qui sont élevés pour leur viande et non pas pour produire des œufs.
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
                  <p class="card-text">De plus en plus de particuliers décident de se lancer dans l’élevage de poules pondeuses afin d’avoir des œufs frais tous les jours.
                    L’élevage de poules pondeuses ne présente pas de grandes difficultés. Il existe de nombreuses races de poules : poule pondeuse, poule couveuse,
                     poule naine, poule d’ornement… Chaque race a ses qualités propres. Comme leurs noms l’indiquent, les poules pondeuses sont particulièrement douées pour pondre
                     de façon régulière. Elles ont donc un meilleur rendement de ponte que d’autres races.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
             -->
        
      <!-- </div> -->
      <!-- /.container -->

      <!-- <hr class="featurette-divider"> -->
  
      <!-- FOOTER -->
        <footer class="footer text-center" style="background:#291B0E; margin-top: 75px;">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0 px-3">
                        <h4 id="contact" class="text-uppercase mb-4">Contact</h4>
                        <p class="lead mb-0">
                            Entreprise Kouma - Poussin SARL <br />
                            Souleymanebougou, (Moribabougou)<br />
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
                            Créée en 2013, Kouma - Poussin est une Entreprise avicole de reproduction, de vente de volailles, de conseils et d'accompagnement
                            <!-- <a href="http://startbootstrap.com">Entreprise Kouma - Poussin SARL</a> -->
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
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
