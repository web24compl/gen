@extends('generator::layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  @isset($employee)
                      {{__("Edit")}}
                      @else
                      {{__("Add")}}  
                  @endisset
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <form method="POST" action="{{isset($company) ? route('companies.update',['company'=>$company->id]) : route('companies.store')}}">
                    @csrf
                    @isset($company)
                    @method('patch')
                    @endisset
                      <div class="form-group">
                        <label for="company">{{__("Company Name")}}</label>
                        <input class="form-control" id="company" name='company' value="{{$company?->company}}">
                      </div>
                      <div class="row">
                        <div class='col-md-9'>
                          <label for="street">{{__("Street")}}</label>
                          <input class="form-control" id="street" name='street' value="{{$company?->street}}">
                        </div>
                        <div class='col-md-3'>
                          <label for="street_number">{{__("Street Number")}}</label>
                          <input class="form-control" id="street_number" name='street_number' value="{{$company?->street_number}}">
                        </div>
                      </div>
                      <div class="row">
                        <div class='col-md-4'>
                          <label for="post_code">{{__("Post Code")}}</label>
                          <input class="form-control" id="post_code" name='post_code' value="{{$company?->post_code}}">
                        </div>
                        <div class='col-md-8'>
                          <label for="city">{{__("City")}}</label>
                          <input class="form-control" id="city" name='city' value="{{$company?->city}}">  
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="phone">{{__("Phone")}}</label>
                        <input type="tel" class="form-control" id="phone" name='phone' value="{{$company?->phone}}">
                      </div>
                      <div class="form-group">
                        <label for="fax">{{__("Fax")}}</label>
                        <input type="tel" class="form-control" name='fax' id="fax" value="{{$company?->fax}}">
                      </div>
                      <div class="form-group">
                        <label for="nip">{{__("NIP")}}</label>
                        <input class="form-control" id="nip" name='nip' value="{{$company?->nip}}">
                      </div>
                      <div class="form-group">
                        <label for="www">{{__("WWW")}}</label>
                        <input class="form-control" id="www" name='www' value="{{$company?->www}}">
                      </div>
                      <button type="submit" class="btn btn-primary mt-4">
                        @isset($company)
                            {{__("Edit")}}
                            @else
                            {{__("Add")}}
                          @endisset
                      </button>
                  </form>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
      
    </script>
</div>
@endsection
