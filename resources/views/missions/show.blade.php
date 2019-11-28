@extends('layouts.app', ['activePage' => 'missions', 'titlePage' => __('Missions')])

@section('content')
<div class="content">
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('missions.update', $mission) }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('put')

                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">card_travel</i>
                            </div>
                            <h4 class="card-title">{{ __('Edit mission') }}</h4>
                            
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
                                <div class="col-sm-12 ml-5 mt-2 mb-2">
                                    <h4><b style="color:blue">Total</b> x.xx EUR &nbsp;&nbsp;<b style="color:blue">Remboursable</b> x.xx EUR &nbsp;&nbsp;<b style="color:blue">Valideur</b> : x</h4>
                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-6"> 
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-6">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $mission->name) }}" required="true" aria-required="true" />
                                            @if ($errors->has('name'))
                                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                    <div class="col-sm-6">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" type="description" placeholder="{{ __('Description') }}" value="{{ old('description', $mission->description) }}" required />
                                            @if ($errors->has('description'))
                                            <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                        
                        <div class="card-body">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-info">{{ __('Save') }}</button>                     
                        </div>

                        <a href="#" class="btn btn-success col-3 m-auto"><i class="material-icons">done</i> Approuver</a>
                        <hr class="col-8 ml-auto mr-auto mt-4">

                        <div class="card-body">
                            <a href="{{ route('notes.create', $mission) }}" class="btn btn-primary"><i class="material-icons">add_box</i> Add notes</a>
                            <a href="{{ route('fraisKms.create', $mission) }}" class="btn btn-primary"><i class="material-icons">add_box</i> Add frais KM</a>
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
                                        @if ($note === "No data")
                                        
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
