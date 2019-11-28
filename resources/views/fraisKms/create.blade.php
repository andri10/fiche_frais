@extends('layouts.app', ['activePage' => 'missions', 'titlePage' => __('Mission Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('fraisKms.store', $mission) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-depart">{{ __('Add Frais kilométriques') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="#" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Départ') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('depart') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('depart') ? ' is-invalid' : '' }}" name="depart" id="input-name" type="text" placeholder="{{ __('Départ') }}" value="{{ old('depart') }}" required="true" aria-required="true" />
                                        @if ($errors->has('depart'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('depart') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Arrivée') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('arrivee') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('arrivee') ? ' is-invalid' : '' }}" name="arrivee" id="input-name" type="text" placeholder="{{ __('Arrivée') }}" value="{{ old('arrivee') }}" required="true" aria-required="true" />
                                        @if ($errors->has('arrivee'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('arrivee') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Trajets') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('trajets') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('trajets') ? ' is-invalid' : '' }}" name="trajets" id="input-name" type="text" placeholder="{{ __('Trajets') }}" value="{{ old('trajets') }}" required="true" aria-required="true" />
                                        @if ($errors->has('trajets'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('trajets') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('TTC') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('ttc') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('ttc') ? ' is-invalid' : '' }}" name="ttc" id="input-name" type="text" placeholder="{{ __('TTC') }}" value="{{ old('ttc') }}" required="true" aria-required="true" />
                                        @if ($errors->has('trajets'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('trajets') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-name" type="text" placeholder="{{ __('Title') }}" value="{{ old('title') }}" required="true" aria-required="true" />
                                        @if ($errors->has('title'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-name" type="text" placeholder="{{ __('Description') }}" value="{{ old('description') }}" required="true" aria-required="true" />
                                        @if ($errors->has('description'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Image') }}</label>
                                <div class="col-sm-7">
                                    <div>
                                        <input id="file-upload" type="file" name="image" accept="image/*" onchange="readURL(this);">
                                        <!-- <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-name" type="text" placeholder="{{ __('Description') }}" value="{{ old('title') }}" required="true" aria-required="true" /> -->
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Add Mission') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
