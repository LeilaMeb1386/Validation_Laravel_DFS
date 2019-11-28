@extends('layouts.template')

@section('content')
{{ 'Liste des animaux' }}

        <div class="container">
            <div class="card-group mb-5">
              @foreach ($animals as $animal)
                <div class="card">
                    <div class="card-header">{{ $animal->name }}</div>
                    <div class="card-body">
                        <h3 class="card-title">Déscription : {{ $animal->description }}</h5>
                        <p class="card-text">Sexe : {{ $animal->sexe }}</p>
                        <p class="card-text">Poids : {{ $animal->poids }}</p>
                        <p class="card-text"><small class="text-muted">Taille : {{ $animal->taille }}</small></p>
                    </div>
                    <div class="card-footer">Race : {{ $animal->race->name }}</div>
                      @if(Auth::id() === 1)
                    <div class="card-footer supupdate">
                      <div>
                      <a class="btn btn-success" href="{{ route('edit', $animal->id) }}">MODIFIER</a>
                      </div>
                      <div>
                        <form action="{{ route('delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $animal->id }}">
                                <input type="submit" class="btn btn-danger" style="width:130px;" value="SUPPRIMER">
                              </form>
                      </div>
                      </div>
                      @endif
                </div>
                  @endforeach;

            </div>
        </div>

  @endsection
