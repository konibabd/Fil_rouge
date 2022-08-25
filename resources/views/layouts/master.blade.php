
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
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css')}}" rel="stylesheet">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=jbz_of2r3ygotQi2IkGF6_CB3--b1EcDr5aj6ewAqz_PhxFXMZmW7R1YifQJ8eo7GSSGiUoM9rGdrLlaS3WA-ZTyEkhm5vN2WjZCSAhyh64" charset="UTF-8"></script></head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #fe9800;">
        <!-- <a class="navbar-brand" href="#">ChiyèGoundo</a> -->
        <img src="{{ asset('images/CHIYEGOUNDO.png')}}" class="rounded-circle" style="width: 100px; height: 100px"; alt="...">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">ACCUEIL<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PRODUITS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <button type="button" class="btn logg  btn-outline-warning"><i class="fa panier fa-shopping-cart" aria-hidden="true"></i> &nbsp <a href="" style="text-decoration:none; text-light"></a></button>
          </form>
          <form class="form-inline mt-2 mt-md-0">
            <button class="btn btn-outline-warning" type="submit"><a style="text-decoration:none; color: #fff" href="/login">Connexion</a></button>
            <button class="btn logge btn-outline-warning" type="submit"><a style="text-decoration:none; color:#fff;" href="/register">Inscription</a></button>
          </form>
          <!-- <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Rechercher</button>
          </form> -->
        </div>
      </nav>
    </header>

    <main role="main">
    @yield
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
