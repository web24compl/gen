@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Firmy</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                               
                    <a href='/companies/create'>
                      <button class='btn btn-primary mb-3'>Dodaj Firme</button>  
                    </a>
                    <h3>Lista firm</h3>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Telefon</th>
                            <th scope="col">Adres</th>
                            <th scope="col">WWW</th>
                            <th scope="col">=====</th>
                          </tr>
                        </thead>    
                    @foreach ($companies as $company)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$company->company}}</td>      
                        <td>{{$company->phone}}</td>      
                        <td>{{$company->street}} {{$company->street_number}}</td>      
                        <td>{{$company->www}}</td>      
                        <td>
                          <a href="/companies/{{$company->id}}/edit">                                      
                            <button class='btn btn-secondary'>
                              Edytuj
                            </button>
                          </a>
                          <form action="/companies/{{$company->id}}" method="POST">
                            @csrf
                            @method('delete')                                      
                            <button class='btn btn-danger' onclick="if(!confirm('czy chcesz usunąć')){event.preventDefault()}">
                              Usuń
                            </button>
                          </form>
                        </td>    
                    </tr>                            
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
