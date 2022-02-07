@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Konfigurator</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST">
                    @csrf
                      <div class="form-group">
                        <label for="company">Nazwa Firmy</label>
                        <input class="form-control" id="company" name='company'>
                      </div>
                      <div class="form-group">
                        <label for="address">Adres</label>
                        <input class="form-control" id="address" name='address' >
                      </div>
                      <div class="form-group">
                        <label for="post_code">Kod Pocztowy</label>
                        <input class="form-control" id="post_code" name='post_code' placeholder="XX-XXX Miasto">
                      </div>
                      <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input class="form-control" id="phone" name='phone'>
                      </div>
                      <div class="form-group">
                        <label for="fax">Fax</label>
                        <input class="form-control" name='fax' id="fax">
                      </div>
                      <div class="form-group">
                        <label for="vat_no">VAT No</label>
                        <textarea class="form-control" id="vat_no" name='vat_no'></textarea>
                      </div>
                      <div class="form-group">
                        <label for="www">WWW</label>
                        <input class="form-control" id="www" name='www'>
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
