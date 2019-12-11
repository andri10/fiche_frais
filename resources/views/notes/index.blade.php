@extends('layouts.app', ['activePage' => 'notes', 'titlePage' => __('Fiche Frais')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose card-header-text">
                        <div class="card-text">
                            <h4 class="card-title">Mes notes de frais</h4>
                        </div>
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
                                    <button class="btn btn-primary dropdown-toggle mb-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">add_box</i>&nbsp; Ajouter une dépenses
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('note.create') }}">+ Note</a>
                                        <a class="dropdown-item" href="{{ route('fraisKm.create') }}">+ Frais Kilométrique</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            
                            <table class="table table-striped">
                                <thead style="background:#515151; color:white">
                                    <th>

                                    </th>
                                    <th class="text-center">
                                        {{ __('Image') }}
                                    </th>
                                    <th>
                                        {{ __('Titre') }}
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
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <img src="{{ asset('image/depenses/' . $note->image) }}" width="50px" height="50px" alt="Image">
                                            </td>
                                            <td>
                                                <strong>{{ $note->title }}</strong>
                                            </td>
                                            <td>
                                                {{ $note->start->format('j/m/Y') }}
                                            </td>
                                            <td>
                                                @money($note->ttc) €
                                            </td>
                                            <td>
                                                <strong>{{ $note->etat }}</strong>
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

                        <a href="#" class="btn btn-success"><i class="material-icons">done</i> Approuver</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
