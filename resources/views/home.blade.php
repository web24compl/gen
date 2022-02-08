@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">Pracownicy</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a href='/employees/create'>
                          <button class='btn btn-primary mb-3'>Dodaj Pracownika</button>  
                        </a>
                        <h3>Lista pracowników</h3>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imie i Nazwisko</th>
                                <th scope="col">Firma</th>
                                <th scope="col">Stanowisko</th>
                                <th scope="col">Wydział</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">=====</th>
                                <th scope="col">=====</th>
                              </tr>
                            </thead>   
                            <tbody>                
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->company}}</td>   
                                    <td>{{$employee->position}}</td>
                                    <td>{{$employee->department}}</td>   
                                    <td>{{$employee->mobile}}</td>   
                                    <td>{{$employee->email}}</td>   
                                    <td>
                                      <a href="/footer/{{$employee->id}}" download='stopka {{$employee->name}}'>                            
                                        <button class='btn btn-secondary'>
                                          HTML
                                        </button>
                                      </a>
                                      <a href="/image/{{$employee->id}}">                               
                                        <button class='btn btn-secondary'>
                                          PNG
                                        </button>
                                      </a>
                                    </td>    
                                    <td>
                                      <a href="/employees/{{$employee->id}}/edit">                                      
                                        <button class='btn btn-secondary'>
                                          Edytuj
                                        </button>
                                      </a>
                                      <form action="/employees/{{$employee->id}}" method="POST">
                                        @csrf
                                        @method('delete')                                      
                                        <button class='btn btn-danger' onclick="if(!confirm('czy chcesz usunąć')){event.preventDefault()}">
                                          Usuń
                                        </button>
                                      </form>
                                    </td>    
                                </tr>                            
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
