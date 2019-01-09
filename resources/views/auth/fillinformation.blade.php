@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div>
            <div class="form-group text-md-center">
                <div class="row text-center" style="color:#000000;">
                  <p style="font-size:25px">Wellcome {{$newUser->name}}</b>
                  <p style="font-size:25px">We almost connect, we want know you more</b>
                </div>
            </div>
          </div>
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                @if ($errors->has('telephone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus placeholder="Enter your address">

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-detail" href="{{url('/home')}}">
                                    Skip
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content-js')
<script type="text/javascript">
  var autocomplete;

  function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('address')),
            {types: ['geocode']});
    }
</script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoqj7ZJeTk6TZvMVcj6Saxn8EAHjgItso&amp;libraries=places&callback=initAutocomplete"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1NzxH7C1D82CsQh3IJo9c-9KXvun8QBU&amp;libraries=places&callback=initAutocomplete" async defer></script>

@endsection
