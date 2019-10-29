@extends('layouts.app', ['activePage' => 'missions', 'titlePage' => __('Missions')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('Mes missions') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage missions') }}</p>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('missions.create') }}" class="btn btn-sm btn-primary">{{ __('+ Add mission') }}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        {{ __('Name') }}
                                    </th>
                                    <th>
                                    </th>
                                    <th>
                                    </th>
                                    <th>
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($missions as $mission)
                                    <tr>
                                        <td>
                                            <strong>{{ $mission->name }}</strong>
                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="{{ route('missions.show', $mission->id) }}">Voir</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('missions.edit', $mission->id) }}">Modifier</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('missions.destroy', $mission->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger data-original-title="" title="" onclick=" confirm('{{ __("Are you sure you want to delete this mission?") }}') ? this.parentElement.submit() : ''" type=" submit">Supprimer</button>
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
