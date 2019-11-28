@extends('layouts.template')


{{ 'Liste des races' }}
@section('content')
    <h1>AJOUT D'UNE RACE</h1>

    <form method="post" action= "{{ route('race.store') }}">
  @csrf
     <label for="name">RACE NAME</label><input type="text" name="name"/>
     <label for="classification">CLASSIFICATION</label><input type="text" name="classification" />
     <label for="name">ESPERENCE DE VIE</label><input type="text" name="esperence_vie"/>

     <input class="btnAdd" type="submit" value="Insert" />
</form>
@endsection
