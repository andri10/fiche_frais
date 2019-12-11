@extends('layouts.app', ['activePage' => 'missions', 'titlePage' => __('Mission Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('missions.update', $mission) }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('put')

                    <div class="card ">
                        <div class="card-header card-header-primary card-header-text">
                            <div class="card-text">
                                <h4 class="card-title">Modifier mission</h4>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('missions.index') }}" class="btn btn-sm btn-primary">{{ __('RETOUR') }}</a>
                                </div>
                            </div>
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
                                        <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-name" type="text" placeholder="{{ __('Description') }}" value="{{ old('description', $mission->description) }}" required="true" aria-required="true" />
                                        @if ($errors->has('description'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Mis à jour') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
