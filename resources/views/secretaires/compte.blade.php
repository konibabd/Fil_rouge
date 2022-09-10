@extends('layouts.partout')

@section('contenu')

<!-- Button trigger modal -->

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Compte Secrétaire</h3>
  
        <!-- <div class="alert alert-success">
            <h3>Personnel ajouter avec succes</h3>
        </div> -->
    
        <div class="mt-4">
        <div  class="d-flex justify-content-end mb-2">
        <div><a href="{{url('/secret-register')}}" class="btn btn-primary">Créer un compte</a></div>
        </div> 
        <table class="table table-bordered table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Email</th>
                    <!-- <th scope="col">Password</th> -->
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($secretaire as $secretaires)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $secretaires->nom }}</td>
                    <td>{{ $secretaires->prenom }}</td>
                    <td>{{ $secretaires->telephone }}</td>
                    <td>{{ $secretaires->email }}</td>
                    <!-- <td>{{ $secretaires->password }}</td> -->
                    <td><a href="{{ route('secretaires.edit', $secretaires->id )}}" class="btn btn-primary">Editer</a></td>
                    <td>
                        <form action="{{ route('secretaires.destroy', $secretaires->id)}}" method="get">
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

