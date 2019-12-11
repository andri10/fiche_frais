@extends('layouts.app', ['activePage' => 'comptable', 'titlePage' => __('Fiche Frais')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('Les notes de frais') }}</h4>
                        <p class="card-category"> {{ __('Gestion comptable') }}</p>
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
                                <a href="{{ route('missions.create') }}" class="btn btn-sm btn-primary">{{ __('+ Add note') }}</a>
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

                                        @if ($note === "No data")
                                        
                                        @elseif ($note->etat === "À la compta")
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
                                                {{ $note->created_at }}
                                            </td>
                                            <td>
                                                {{ $note->ttc }}
                                            </td>
                                            <td>
                                                <strong>{{ $note->etat }}</strong>
                                            </td>
                                            <td class="td-actions">
                                                <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
                                                <i class="material-icons">remove_red_eye</i>
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

                        <a href="#" class="btn btn-success"><i class="material-icons">done</i> Valider</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
