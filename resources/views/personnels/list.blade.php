@extends('layouts.partout')

@section('contenu')

<!-- Button trigger modal -->

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des techniciens</h3>
  
        <!-- <div class="alert alert-success">
            <h3>Personnel ajouter avec succes</h3>
        </div> -->
    
        <div class="mt-4">
        <div  class="d-flex justify-content-end mb-2">
        <div><a href="{{route('personnels.create')}}" class="btn btn-primary">Ajouter un Technicien</a></div>
        </div> 
        <table class="table table-bordered table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Email</th>
                    <th scope="col">Téléphone</th>
                    <!-- <th scope="col">Password</th> -->
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personnel as $personnels)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $personnels->nom }}</td>
                    <td>{{ $personnels->prenom }}</td>
                    <td>{{ $personnels->adresse }}</td>
                    <td>{{ $personnels->email }}</td>
                    <td>{{ $personnels->telephone }}</td>
                    <!-- <td>{{ $personnels->password }}</td> -->
                    <td><a href="{{ route('personnels.edit', $personnels->id )}}" class="btn btn-primary">Editer</a></td>
                    <td>
                        <form action="{{ route('personnels.destroy', $personnels->id)}}" method="get">
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

