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
                        <label for="nip">NIP</label>
                        <input class="form-control" id="nip" name='nip'>
                      </div>
                      <div class="form-group">
                        <label for="position">Adres</label>
                        <input class="form-control" id="position" name='position' >
                      </div>
                      <div class="form-group">
                        <label for="post_code">Kod Pocztowy</label>
                        <input class="form-control" id="post_code" name='post_code'>
                      </div>
                      <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input class="form-control" id="phone" name='phone'>
                      </div>
                      <div class="form-group">
                        <label for="fax">fax</label>
                        <input class="form-control" name='fax' id="fax" >
                      </div>
                      <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input class="form-control" type='email' id="email" name='email'>
                      </div>
                      <button type="submit" class="btn btn-primary mt-4">
                        @isset($employee)
                            Edytuj
                            @else
                            Dodaj    
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
