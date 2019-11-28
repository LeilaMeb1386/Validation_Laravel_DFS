@extends('layouts.template')



@section('content')
    <h1>Nouvel animal</h1>
    @if (isset($msg))
      <div class="card-header text-white {{ $status === 1 ? 'bg-success' : 'bg-danger'}}">{{$msg}} </div>
    @endif

    @if($errors->any())
      <ul class="alert alert-danger">
          @foreach($errors->all() as $error => $value)
            <li>{{$value}}</li>
          @endforeach
      </ul>
    @endif
    <form class="formulaire"method="post" action= "{{ route('store') }}">
  @csrf
     <label for="name">Name</label><input type="text" name="name"/>
     <label for="name">Déscription</label><textarea name="description" rows="8" cols="80">description</textarea>
     <label for="sexe">Sexe</label><input type="text" name="sexe" />
      <label for="poids">Poids</label><input type="text" name="poids" />
       <label for="taille">Taille</label><input type="text" name="taille" />
     <select  class="" name="race">
       @foreach ($races as $race)
       <option value="{{ $race->id }}">{{$race->name }}</option>
     @endforeach
     </select>

     <input class="btnAdd" type="submit" value="Insert" />
</form>
@endsection
