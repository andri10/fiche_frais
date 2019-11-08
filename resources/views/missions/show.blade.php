@extends('layouts.app', ['activePage' => 'missions', 'titlePage' => __('Missions')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('missions.update', $mission) }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('put')

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Edit Mission') }}</h4>
                            <p class="card-category">{{ __('Mission information') }}</p>
                        </div>
                        <div class="card-body ">
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
                                <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $mission->name) }}" required="true" aria-required="true" />
                                        @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="description" placeholder="{{ __('Description') }}" value="{{ old('description', $mission->description) }}" required />
                                        @if ($errors->has('description'))
                                        <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        {{ __('Image') }}
                                    </th>
                                    <th>
                                        {{ __('Title') }}
                                    </th>
                                    <th>
                                        {{ __('TTC') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @if (count($mission->notes) === 1)
                                    @foreach($mission->notes as $note)
                                    <tr>
                                        <td>
                                            <strong>{{ $note->image }}</strong>
                                        </td>
                                        <td>
                                            <strong>{{ $note->title }}</strong>
                                        </td>
                                        <td>
                                            <strong>{{ $note->ttc }}</strong>
                                        </td>
                                    </tr>
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

        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-body">
                        <div>

                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        {{ __('Image') }}
                                    </th>
                                    <th>
                                        {{ __('Title') }}
                                    </th>
                                    <th>
                                        {{ __('TTC') }}
                                    </th>
                                </thead>
                                <tbody>
                                    @if (count($mission->fraisKms) === 1)
                                    @foreach($mission->fraisKms as $fraisKm)
                                    <tr>
                                        <td>
                                            <strong>{{ __('Image') }}</strong>
                                        </td>
                                        <td>
                                            <strong>{{ $fraisKm->title }}</strong>
                                        </td>
                                        <td>
                                            <strong>{{ __('TTC') }}</strong>
                                        </td>
                                    </tr>
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

        <div class="row">
            <div class="col-md-12">
                <a href="">Add Note</a>
                <br>
                <a href="">Add Frais kilométriques</a>
            </div>
        </div>

    </div>
</div>

@endsection
