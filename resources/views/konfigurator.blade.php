@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  @isset($employee)
                      Edytuj
                      @else
                      Dodaj  
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
                        <label for="company">Nazwa Firmy</label>
                        <input class="form-control" id="company" name='company' value="{{$company?->company}}">
                      </div>
                      <div class="row">
                        <div class='col-md-10'>
                          <label for="street">Ulica</label>
                          <input class="form-control" id="street" name='street' value="{{$company?->street}}">
                        </div>
                        <div class='col-md-2'>
                          <label for="street_number">Numer Ulicy</label>
                          <input class="form-control" id="street_number" name='street_number' value="{{$company?->street_number}}">
                        </div>
                      </div>
                      <div class="row">
                        <div class='col-md-3'>
                          <label for="post_code">Kod Pocztowy</label>
                          <input class="form-control" id="post_code" name='post_code' value="{{$company?->post_code}}">
                        </div>
                        <div class='col-md-9'>
                          <label for="city">Miejscowość</label>
                          <input class="form-control" id="city" name='city' value="{{$company?->city}}">  
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input type="tel" class="form-control" id="phone" name='phone' value="{{$company?->phone}}">
                      </div>
                      <div class="form-group">
                        <label for="fax">Fax</label>
                        <input type="tel" class="form-control" name='fax' id="fax" value="{{$company?->fax}}">
                      </div>
                      <div class="form-group">
                        <label for="nip">NIP</label>
                        <input class="form-control" id="nip" name='nip' value="{{$company?->nip}}">
                      </div>
                      <div class="form-group">
                        <label for="www">WWW</label>
                        <input class="form-control" id="www" name='www' value="{{$company?->www}}">
                      </div>
                      <button type="submit" class="btn btn-primary mt-4">
                        Dodaj
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
