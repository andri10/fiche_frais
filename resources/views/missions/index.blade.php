@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Missions')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <div class="card">
        <header class="card-header">
            <p class="card-header-title">Missions</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($missions as $mission)
                            <tr>
                                <td>{{ $mission->id }}</td>
                                <td><strong>{{ $mission->name }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('missions.show', $mission->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('missions.edit', $mission->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('missions.destroy', $mission->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        </div>
      </div>
    </div>
  </div>
@endsection