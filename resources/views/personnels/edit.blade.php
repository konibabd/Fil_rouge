@extends('layouts.app')

@section('content')

<!-- ce code dessous permet d'afficher les erreurs dans votre formulaire dans le navigateur -->

@if(session()->has("success"))
         <div class="alert alert-succes">
            {{session()->get('success')}}
          </div>
            @endif

            @if ($errors ->any())
          <ul class="alert alert-danger">
             @foreach ($errors->all() as $error)
                      <li>{{$error }}</li>
              @endforeach
          </ul>
          @endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter un employé') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('personnels.update', $personnel->id ) }}">
                        @csrf
                        @method('patch')
                        <!-- champ nom -->
                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" value={{$personnel->nom}} class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end nom -->

                        <!-- champ prenom -->
                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" value={{$personnel->prenom}} class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end prenom -->

                        <!-- champ poste -->
                        <div class="row mb-3">
                            <label for="poste" class="col-md-4 col-form-label text-md-end">{{ __('Poste') }}</label>

                            <div class="col-md-6">
                                <input id="poste" type="text" value={{$personnel->poste}} class="form-control @error('poste') is-invalid @enderror" name="poste" value="{{ old('poste') }}" required autocomplete="poste" autofocus>

                                @error('poste')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end poste -->

                        <!-- champ adresse -->
                        <div class="row mb-3">
                            <label for="adresse" class="col-md-4 col-form-label text-md-end">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" value={{$personnel->adresse}} class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end adresse -->
                        <!-- champ email -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Addresse email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" value={{$personnel->email}} class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end email -->
                        <!-- champ telephone -->
                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Numero de telephone') }}</label>
                            <div class="col-md-6">
                                <input id="telephone" type="text" value={{$personnel->telephone}} class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end telephone -->

                        <!-- champ password -->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="text" value="{{$personnel->password}}" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end password -->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
