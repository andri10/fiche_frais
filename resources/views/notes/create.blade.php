@extends('layouts.app', ['activePage' => 'missions', 'titlePage' => __('Mission Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('notes.store', $mission) }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('post')

                    <div class="card ">
                        
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Ajouter une note') }}</h4>
                            <p class="card-category"></p>
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
                                <div class="col-md-12 text-right">
                                    <a href="{{ route('missions.show', $mission->id) }}" class="btn btn-sm btn-rose">{{ __('Retour') }}</a>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Titre') }} <span style="color:red">*</span></label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-name" type="text" placeholder="{{ __('Ex : Déjeuner avec l\'équipe') }}" value="{{ old('title') }}" required="true" aria-required="true" />
                                        @if ($errors->has('title'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Pays') }} <span style="color:red">*</span></label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('pays') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('pays') ? ' is-invalid' : '' }}" name="pays" id="input-name" type="text" placeholder="{{ __('Ex : FRANCE') }}" value="{{ __('FRANCE') }}" required="true" aria-required="true" />
                                        @if ($errors->has('pays'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('pays') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Date') }} <span style="color:red">*</span></label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('start') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('start') ? ' is-invalid' : '' }}" name="start" id="input-name" type="date" value="{{ old('pays') }}" required="true" aria-required="true" />
                                        @if ($errors->has('date'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('date') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label label-checkbox">{{ __('Moyen de paiement') }} <span style="color:red">*</label>
                                <div class="col-sm-10 checkbox-radios">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value=""> Carte
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value=""> Espèces
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('TTC') }} <span style="color:red">*</span></label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('ttc') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('ttc') ? ' is-invalid' : '' }}" name="ttc" id="input-name" type="text" placeholder="{{ __('0.00 €') }}" value="{{ old('ttc') }}" required="true" aria-required="true" />
                                        @if ($errors->has('ttc'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('ttc') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Description') }} <span style="color:red">*</span></label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-name" type="text" placeholder="{{ __('Vos commentaire ici') }}" value="{{ old('description') }}" required="true" aria-required="true" />
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
<!--                                         <input class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-name" type="text" placeholder="{{ __('Description') }}" value="{{ old('description') }}" required="true" aria-required="true" />
 -->                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Ajouter et nouveau') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
