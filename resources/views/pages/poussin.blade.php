@extends('layouts.master')

@section('contenu')

<div class="container">
    <!-- <div class="row">   -->

        <!-- <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('images/poussinghgjg.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div> -->

        <div class="card mb-3">
        <img class="card-img-top" style="height: 600px;" src="{{ asset('images/poussinghgjg.jpg')}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Poussin de chair</h5>
            <p class="card-text">Ce sont des poulets qui sont élevés pour leur viande et non pas pour produire des œufs.
                  Un poulet de chair, appelé aussi poulet à frire ou poulet à griller, est une Poule domestique élevée spécifiquement 
                  pour la production de viande. Il possède des caractéristiques physiques différentes des poules pondeuses, des poules 
                  d'ornement ou des poules de compagnie.L’élevage de poulets de chair semble répondre aux standards d’une grande partie 
                  de la population qui préfère une viande jeune, à la texture plus tendre. Les poulets destinés à la production de viande 
                  sont le résultat d'une sélection génétique intense effectuée par quelques grandes entreprises mondiales3. Cette sélection permet de réduire les coûts de production, en accélérant notamment la croissance des muscles des oiseaux.</p>
            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
        </div>
        </div>
        <!-- <div class="card">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <img class="card-img-bottom" src="..." alt="Card image cap">
        </div> -->

    <!-- </div> -->
</div>

@endsection