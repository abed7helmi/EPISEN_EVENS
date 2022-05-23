@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
















@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <form role="form" class="form-horizontal">
            <fieldset>
               <div class="form-group">
                <label class="col-sm-4 control-label">Address</label>
                <div class="col-sm-8">
                  <input id="user_input_autocomplete_address" name="user_input_autocomplete_address"
                         class="form-control" placeholder="tapez l'adresse...">
                </div>
              </div>
            </fieldset>

            <fieldset class="disabled">
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>numéro</code></label>
                <div class="col-sm-8">
                  <input id="street_number" name="street_number" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>avenue</code></label>
                <div class="col-sm-8">
                  <input id="route" name="route" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>ville</code></label>
                <div class="col-sm-8">
                  <input id="locality" name="locality" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>région</code></label>
                <div class="col-sm-8">
                  <input id="administrative_area_level_1" name="administrative_area_level_1" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>code postale</code></label>
                <div class="col-sm-8">
                  <input id="postal_code" name="postal_code" disabled="true" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label"><code>Pays</code></label>
                <div class="col-sm-8">
                  <input id="country" name="country" disabled="true" class="form-control">
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>

    
    {{-- type="text/javascript" --}}
    <!-- Include Google Maps JS API -->
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyCGsFtqWDkHH4JYmOui4b2vmnaSVL40OoI "></script>

    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGsFtqWDkHH4JYmOui4b2vmnaSVL40OoI&libraries=places" async defer></script> --}}

    <!-- Custom JS code to bind to Autocomplete API -->
    <script type="text/javascript" src="/js/autocomplete.js"></script>
  @endsection
