@extends('layouts.monapp')

@section('contenu')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulaire de commande') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('commandes.register') }}">
                        @csrf

                        <!-- champ nom -->
                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

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
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end prenom -->

                        <!-- champ produit -->
                        <div class="row mb-3">
                            <label for="produit" class="col-md-4 col-form-label text-md-end">{{ __('Produit') }}</label>

                            <div class="col-md-6">
                                <input id="produit" type="text" class="form-control @error('produit') is-invalid @enderror" name="produit" value="{{ old('produit') }}" required autocomplete="produit" autofocus>

                                @error('produit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end produit -->
                        
                        <!-- champ quantite -->
                        <div class="row mb-3">
                            <label for="quantite" class="col-md-4 col-form-label text-md-end">{{ __('Quantité') }}</label>

                            <div class="col-md-6">
                                <input id="quantite" type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite') }}" required autocomplete="quantite">

                                @error('quantite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end quantite -->

                        <!-- champ telephone -->
                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Numero_telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="name" autofocus>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end telephone -->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregister') }}
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
