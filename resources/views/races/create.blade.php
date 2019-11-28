@extends('layouts.template')

@section('content')
{{ 'Liste des races' }}

    <h1>AJOUT D'UNE RACE</h1>

    <form class="formulaire"method="post" action= "{{ route('race.store') }}">
  @csrf
     <label for="name">RACE NAME</label><input type="text" name="name"/>
     <label for="classification">CLASSIFICATION</label><input type="text" name="classification" />
     <label for="name">ESPERENCE DE VIE</label><input type="text" name="esperence_vie"/>

     <input class="btnAdd" type="submit" value="Insert" />
</form>
@endsection
