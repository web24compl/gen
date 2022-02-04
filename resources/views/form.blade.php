@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/api/employees" method="post">
                      @csrf
                        <div class="form-group">
                          <label for="name">Imie i Nazwisko</label>
                          <input class="form-control" id="name" name='name' value="{{$employee->name?? ""}}">
                        </div>
                        <div class="form-group">
                          <label for="position">Stanowisko</label>
                          <input class="form-control" id="position" name='position' value="{{$employee->position?? ""}}">
                        </div>
                        <div class="form-group">
                          <label for="company">Firma</label>
                          <input class="form-control" id="company" name='company' value="{{$employee->company?? ""}}">
                        </div>
                        <div class="form-group">
                          <label for="mobile">Mobile</label>
                          <input class="form-control" id="mobile" name='mobile' value="{{$employee->mobile?? ""}}">
                        </div>
                        <div class="form-group">
                          <label for="phone">Telefon</label>
                          <input type="phone" class="form-control" name='phone' id="phone" value="{{$employee->phone?? ""}}">
                        </div>
                        <div class="form-group">
                          <label for="email">E-Mail</label>
                          <input class="form-control" id="email" name='email' value="{{$employee->email?? ""}}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Stwórz</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
      
    </script>
</div>
@endsection
