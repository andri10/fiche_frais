@extends('layouts.app', ['activePage' => 'missions', 'titlePage' => __('Mission Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('missions.storeNote', $mission) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Add Note') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="#" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
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
                                <label class="col-sm-2 col-form-label">{{ __('Pays') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('pays') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('pays') ? ' is-invalid' : '' }}" name="pays" id="input-name" type="text" placeholder="{{ __('Pays') }}" value="{{ old('pays') }}" required="true" aria-required="true" />
                                        @if ($errors->has('pays'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pays') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('TTC') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('ttc') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('ttc') ? ' is-invalid' : '' }}" name="ttc" id="input-name" type="text" placeholder="{{ __('TTC') }}" value="{{ old('ttc') }}" required="true" aria-required="true" />
                                        @if ($errors->has('ttc'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('ttc') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('TVA') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('tva') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('tva') ? ' is-invalid' : '' }}" name="tva" id="input-name" type="text" placeholder="{{ __('TVA') }}" value="{{ old('tva') }}" required="true" aria-required="true" />
                                        @if ($errors->has('tva'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('tva') }}</span>
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
                                        <!--                                         <input id="file-upload" type="file" name="image" accept="image/*" onchange="readURL(this);">
 -->
                                        <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-name" type="text" placeholder="{{ __('Description') }}" value="{{ old('description') }}" required="true" aria-required="true" />
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
