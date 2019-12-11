@extends('layouts.app', ['activePage' => 'add-user', 'titlePage' => __('User Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('user.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Ajouter un utilisateur') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('user.index') }}" class="btn btn-sm btn-rose">{{ __('Retour') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nom') }} <span style="color:red">*</span></label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Ex : Dupont') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Prénom') }} <span style="color:red">*</span></label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="first_name" id="input-name" type="text" placeholder="{{ __('Ex : Maxime') }}" value="{{ old('first_name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('first_name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('first_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }} <span style="color:red">*</span></label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('exemple@mail.com') }}" value="{{ old('email') }}" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label label-checkbox">{{ __('Rôle') }} <span style="color:red">*</span></label>
                  <div class="col-sm-10 checkbox-radios">
                  <div class="form-check form-check-inline">
                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="user" checked> Employé
                      <span class="form-check-sign">
                          <span class="check"></span>
                      </span>
                      </label>
                  </div>
                  <div class="form-check form-check-inline">
                      <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="comptable"> Comptable
                      <span class="form-check-sign">
                          <span class="check"></span>
                      </span>
                      </label>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Password') }} <span style="color:red">*</span></label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="password" name="password" id="input-password" placeholder="{{ __('Password') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm Password') }} <span style="color:red">*</span></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm Password') }}" value="" required />
                      <span class="bmd-help">au minimum 6 caractères, dont au moins une majuscule, une miniscule et un chiffre </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Ajouter') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
