@extends('layouts.app')

@section('content')

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Mon tableau de commandes</h3>

            <!-- <div class="alert alert-success">
                <h3></h3>
            </div> -->

    <div class="mt-4">
        <div  class="d-flex justify-content-end mb-2">
        <div><a href="{{route('paniers.create')}}" class="btn btn-primary">Effectuer une commande</a></div>
        </div>
     
        <table class="table table-bordered table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Date</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($paniers as $panier)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $panier->produit }}</td>
                    <td>{{ $panier->quantite }}</td>
                    <td>{{ $panier->date }}</td>
                    <td><a href="{{ route('paniers.edit', $panier->id )}}" class="btn btn-primary">Editer</a></td>
                    <td>
                        <form action="{{ route('paniers.destroy', $panier->id)}}" method="get">
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