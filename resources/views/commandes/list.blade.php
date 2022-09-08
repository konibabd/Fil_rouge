@extends('layouts.monapp')

@section('contenu')

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des commandes</h3>

            <!-- <div class="alert alert-success">
                <h3></h3>
            </div> -->

    <div class="mt-4">
        <div  class="d-flex justify-content-end mb-2">
        <div><a href="{{route('commandes.create')}}" class="btn btn-primary">Ajouter une commande</a></div>
        </div>

           
       
        <table class="table table-bordered table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Téléphone</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($commande as $commandes)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $commandes->nom }}</td>
                    <td>{{ $commandes->prenom }}</td>
                    <td>{{ $commandes->produit }}</td>
                    <td>{{ $commandes->quantite }}</td>
                    <td>{{ $commandes->telephone }}</td>
                    <td><a href="{{ route('commandes.edit', $commandes->id )}}" class="btn btn-primary">Editer</a></td>
                    <td>
                        <form action="{{ route('commandes.destroy', $commandes->id)}}" method="get">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>           
        </table>
    </div>
</div>
@endsection