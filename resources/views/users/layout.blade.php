@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-2">
        <div class="card">
          <div class="card-body">
            <div class="account-option">
              <a href="{{ url('/profile') }}">
                  {{ __('General Information') }}
              </a>
              <a href="{{ url('/accountpassword') }}">
                  {{ __('Password') }}
              </a>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-10">
            <div class="card">
              <div class="card-body">
              @yield('account-content')
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
