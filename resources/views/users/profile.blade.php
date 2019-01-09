@extends('users.layout')

@section('account-content')
  <form method="post" action="{{ action('User\UserController@update', Auth::user()->id) }}" class="form-horizontal">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="profile-pict">
        <img src="{{$user->avatar_original}}" alt="profil_pict" class="avatar">
        <a href=")}}" class="btn btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Upload New Picture </a>
      </div>
      <div class="row form-group">
          <div class="col-sm-2">
              <label class="control-label">Name</label>
          </div>
          <div class="col-sm-7">
              <input type="text" class="form-control" value="{{$user->name}}" name="name">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-sm-2">
              <label class="control-label">Address</label>
          </div>
          <div class="col-sm-7">
              <input id="address" type="text" class="form-control" value="{{$user->address}}" name="address">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-sm-2">
              <label class="control-label">Email</label>
          </div>
          <div class="col-sm-7">
              <input type="text" class="form-control" value="{{$user->email}}" name="email" readonly="readonly">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-sm-2">
              <label class="control-label">Telephone</label>
          </div>
          <div class="col-sm-7">
              <input type="text" name="telephone" class="form-control" value="{{$user->telephone}}">
          </div>
      </div>
      <div class="row form-group">
        <div class="col-sm-7">
            <a href="" class="btn btn-default pull-left"><i class="glyphicon glyphicon-arrow-left"></i> Back </a>
            <button class="btn btn-danger pull-right" type="submit"> <span class="glyphicon glyphicon-ok " ></span> Save Changes</button>
        </div>
      </div>
  </form>
@endsection
