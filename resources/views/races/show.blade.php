@extends('layouts.template')

@section('content')
{{ 'Liste des races' }}

      <table class="table table-hover">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">CLASSIFICATION</th>
        <th scope="col">ESERENCE DE VIE</th>
        @if(Auth::id() === 1)
        <th scope="col">Modifier</th>
        <th scope="col">Suppimer</th>

        @endif
      </tr>
      @foreach ($races as $race)
      <tr>
        <td>{{ $race->name }}</td>
        <td>{{ $race->classification }}</td>
        <td>{{ $race->esperence_vie}}</td>
        @if(Auth::id() === 1)

        <td><a class="btn btn-success" href="{{ route('race.edit', $race->id) }}">MODIFIER</a></td>
        <td>
        <form action="{{ route('destroy') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $race->id }}">
                <input type="submit" class="btn btn-danger" style="width:130px;" value="SUPPRIMER">
              </form>
            </td>
          @endif
      </tr>
      @endforeach;

    </table>


@endsection
