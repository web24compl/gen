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
                      <div class="form-group">
                        <label for="address">Adres</label>
                        <input class="form-control" id="address" name='address'  value="{{$company?->address}}">
                      </div>
                      <div class="form-group">
                        <label for="post_code">Kod Pocztowy</label>
                        <input class="form-control" id="post_code" name='post_code' placeholder="XX-XXX Miasto" value="{{$company?->post_code}}">
                      </div>
                      <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input class="form-control" id="phone" name='phone' value="{{$company?->phone}}">
                      </div>
                      <div class="form-group">
                        <label for="fax">Fax</label>
                        <input class="form-control" name='fax' id="fax" value="{{$company?->fax}}">
                      </div>
                      <div class="form-group">
                        <label for="vat_no">VAT No</label>
                        <input class="form-control" id="vat_no" name='vat_no' value="{{$company?->vat_no}}">
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
