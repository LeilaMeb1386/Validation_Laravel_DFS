@extends('layouts.template')

@section('content')
{{ 'Mettre a jour une race' }}

      <form class="formulaire"method="post" action= "{{ route('race.update') }}">
          @csrf
          <label for="name">RACE NAME</label>
          <input type="hidden" name="id" value="{{ $race->id }}">
          <input required type="text" name="name" value="{{ $race->name }}">
          <label for="author">CLASSIFICATION</label>
          <input type="text" name="classification" value="{{ $race->classification }}"/>
          <label for="author">ESPERENCE DE VIE</label>
          <input type="text" name="esperence_vie" value="{{ $race->esperence_vie }}"/>

          <input class="btnAdd" type="submit" value="MODIFIER" />



   </form>

@endsection
