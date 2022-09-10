@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:50px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulaire de commande') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('paniers.register') }}">
                        @csrf
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

                        <!-- champ date -->
                        <div class="row mb-3">
                            <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date">

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end date -->

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer') }}
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
