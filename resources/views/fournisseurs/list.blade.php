@extends('layouts.app')

@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des fournisseurs</h3>

    <!-- <div class="alert alert-success">
        <h3>vhmh</h3>
    </div> -->

    <div class="mt-4">
        <div  class="d-flex justify-content-end mb-2">
        <div><a href="{{route('fournisseurs.create')}}" class="btn btn-primary">Ajouter un nouveau fournisseur</a></div>
        </div>
       
        <table class="table table-bordered table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Email</th>
                    <th scope="col">Téléphone</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fournisseur as $fournisseurs)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $fournisseurs->nom }}</td>
                    <td>{{ $fournisseurs->adresse }}</td>
                    <td>{{ $fournisseurs->email }}</td>
                    <td>{{ $fournisseurs->telephone }}</td>
                    <td><a href="{{ route('fournisseurs.edit', $fournisseurs->id )}}" class="btn btn-primary">Editer</a></td>
                    <td><form action="{{ route('fournisseurs.destroy', $fournisseurs->id)}}" method="get">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>           
        </table>
    </div>
</div>
@endsection