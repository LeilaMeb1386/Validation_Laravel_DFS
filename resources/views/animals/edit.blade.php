@extends('layouts.template')

@section('content')
{{ 'Mettre a jour une fiche animal' }}

      <form class="formulaire"method="post" action= "{{ route('update') }}">
          @csrf
          <label for="name">ANIMAL NAME</label>
          <input type="hidden" name="id" value="{{ $animal->id }}">
          <input required type="text" name="name" value="{{ $animal->name }}">
          <label for="description">DESCRIPTION</label>
          <textarea name="description" rows="8" cols="80">{{ $animal->description }}</textarea>
          <label for="name">SEXE</label>
          <input required type="text" name="sexe" value="{{ $animal->sexe }}">
          <label for="name">POIDS</label>
          <input required type="text" name="poids" value="{{ $animal->poids }}">
          <label for="name">TAILLE</label>
          <input required type="text" name="taille" value="{{ $animal->taille }}">
          <label for="name">RACE</label>
          <select  class="" name="race">
            @foreach ($races as $race)
            <option value="{{ $race->id }}">{{$race->name }}</option>
          @endforeach
          </select>

          <input class="btnAdd" type="submit" value="MODIFIER" />



   </form>

@endsection
