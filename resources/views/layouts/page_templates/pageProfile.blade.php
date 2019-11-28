@extends('layouts.app', ['activePage' => 'notes', 'titlePage' => __('Fiche Frais')])

@section('content')
<div class="content">
    <div class="container-fluid">
    
    <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">perm_identity</i>
            </div>
            <h4 class="card-title">Edit Profile
            </h4>
          </div>
          <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="https://material-dashboard-pro-laravel.creative-tim.com/profile" autocomplete="off" class="form-horizontal">
              <input type="hidden" name="_token" value="4lflOT5vawRXLOVooJsEzQ9EtsbIYLVsTnsw2oUy">              <input type="hidden" name="_method" value="put">
              <div class="row">
                <label class="col-sm-2 col-form-label">Profile photo</label>
                <div class="col-sm-7">
                  <div class="fileinput text-center fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail img-circle">
                                              <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/placeholder.jpg" alt="...">
                                          </div>
                    <div class="fileinput-preview fileinput-exists thumbnail img-circle" style=""></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="hidden" value="" name="photo"><input type="file" name="" id="input-picture">
                      <div class="ripple-container"></div></span>
                        <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove<div class="ripple-container"><div class="ripple-decorator ripple-on ripple-out" style="left: 59.2969px; top: 22.2656px; background-color: rgb(255, 255, 255); transform: scale(15.5098);"></div></div></a>
                    </div>
                                      </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-7">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="name" id="input-name" type="text" placeholder="Name" value="Admin" required="true" aria-required="true">
                                      </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                  <div class="form-group bmd-form-group is-filled">
                    <input class="form-control" name="email" id="input-email" type="email" placeholder="Email" value="admin@material.com" required="">
                                      </div>
                </div>
              </div>
              <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>

    </div>
</div>



            <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">lock</i>
            </div>
            <h4 class="card-title">Change password</h4>
          </div>
          <div class="card-body">
            <form method="post" action="https://material-dashboard-pro-laravel.creative-tim.com/profile/password" class="form-horizontal">
              <input type="hidden" name="_token" value="Y6fVM0wVq6fFCiiN4gAMinFQ7jbNvtmOabmAoAal">              <input type="hidden" name="_method" value="put">
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-current-password">Current Password</label>
                <div class="col-sm-7">
                  <div class="form-group bmd-form-group">
                    <input class="form-control" input="" type="password" name="old_password" id="input-current-password" placeholder="Current Password" value="" required="">
                                      </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password">New Password</label>
                <div class="col-sm-7">
                  <div class="form-group bmd-form-group">
                    <input class="form-control" name="password" id="input-password" type="password" placeholder="New Password" value="" required="">
                                      </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">Confirm New Password</label>
                <div class="col-sm-7">
                  <div class="form-group bmd-form-group">
                    <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="Confirm New Password" value="" required="">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-rose pull-right">Change password</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
@endsection
