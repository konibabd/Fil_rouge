@extends('layouts.monapp')

@section('contenu')

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Catégories de produit</h3>

            <!-- <div class="alert alert-success">
                <h3></h3>
            </div> -->

    <div class="mt-4">
        <div  class="d-flex justify-content-end mb-2">
        <div><a href="{{route('categories.create')}}" class="btn btn-primary">Ajouter une catégorie</a></div>
        </div>

           
       
        <table class="table table-bordered table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Statut</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorie as $categories)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $categories->name }}</td>
                    <td>{{ $categories->description }}</td>
                    <td><img src="{{ url('images/', $categories->image) }}" width="50px"; heigth="50px" alt=""></td>
                    <td>{{ $categories->quantity }}</td>
                    <td>{{ $categories->statut }}</td>
                    <td><a href="{{ route('categories.edit', $categories->id )}}" class="btn btn-primary">Editer</a></td>
                    <td>
                        <form action="{{ route('categories.destroy', $categories->id)}}" method="get">
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