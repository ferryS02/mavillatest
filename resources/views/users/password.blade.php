@extends('users.layout')

@section('account-content')
  <form method="post" action="{{ action('User\UserController@update', Auth::user()->id) }}" class="form-horizontal">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="text" hidden name="name" value="{{$user->name}}">
      <input type="text" hidden name="email" value="{{$user->email}}">
      <div class="form-group {{ $errors->first('old_password') != "" ? " has-error" : "" }}">
          <div class="col-sm-3">
              <label for="hori-pass-old" class="control-label">Old Password*</label>
          </div>
          <div class="col-sm-7">
              <input id="hori-pass-old" type="password" placeholder="Old Password" name="old_password" class="form-control">
              {!! $errors->first('old_password', '<p class="text-danger">:message</p>') !!}
          </div>
      </div>
      <div class="form-group {{ $errors->first('password') != "" ? " has-error" : "" }}">
          <div class="col-sm-3">
              <label for="hori-pass10" class="control-label">Password*</label>
          </div>
          <div class="col-sm-7">
              <input id="hori-pass10" type="password" placeholder="Password Min.6 characters" name="password" class="form-control">
              {!! $errors->first('password', '<p class="text-danger">:message</p>') !!}
          </div>
      </div>
      <div class="form-group {{ $errors->first('password_confirmation') != "" ? " has-error" : "" }}">
          <div class="col-sm-3">
              <label for="hori-pass20" class="control-label">Confirm Password*</label>
          </div>
          <div class="col-sm-7">
              <input data-parsley-equalto="#hori-pass10" type="password" placeholder="Password Confirmation" class="form-control" id="hori-pass20" name="password_confirmation">
              {!! $errors->first('password_confirmation', '<p class="text-danger">:message</p>') !!}
          </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-7">
            <a href="{{url('/profile')}}" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-arrow-left"></i> Back </a>
            <button class="btn btn-danger pull-right" type="submit"> <span class="glyphicon glyphicon-ok " ></span> Save Changes</button>
        </div>
      </div>
  </form>
@endsection
