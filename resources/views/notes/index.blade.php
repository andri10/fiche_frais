@extends('layouts.app', ['activePage' => 'notes', 'titlePage' => __('Fiche Frais')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('Mes notes de frais') }}</h4>
                        <p class="card-category"> {{ __('Here you can manage notes') }}</p>
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
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        + Add Dépenses
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('note.create') }}">Add Note</a>
                                        <a class="dropdown-item" href="#">Add Frais KM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            
                            <table class="table table-striped">
                                <thead style="background:#515151; color:white">
                                    <th class="text-center">
                                        {{ __('Image') }}
                                    </th>
                                    <th>
                                        {{ __('Title') }}
                                    </th>
                                    <th>
                                        {{ __('Date') }}
                                    </th>
                                    <th>
                                        {{ __('Total') }}
                                    </th>
                                    <th>
                                        {{ __('Etat') }}
                                    </th>
                                    <th>
                                        {{ __('Actions') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @if (count($s) >= 1)
                                    @foreach($s as $note)

                                        @if (!empty($note->mission_id) || ($note === "No data"))
                                        
                                        @else
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('image/depenses/' . $note->image) }}" width="50px" height="50px" alt="Image">
                                            </td>
                                            <td>
                                                <strong>{{ $note->title }}</strong>
                                            </td>
                                            <td>
                                                {{ $note->created_at }}
                                            </td>
                                            <td>
                                                {{ $note->ttc }}
                                            </td>
                                            <td>
                                                <strong>{{ __('Vérifier') }}</strong>
                                            </td>
                                            <td class="td-actions">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
                                                <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    @else
                                    <tr class="text-center">
                                        <td colspan="3">
                                            <strong>{{ __('No data') }}</strong>
                                        </td>
                                    </tr>
                                    @endif
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
