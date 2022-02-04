@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pracownicy</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <h3>Lista pracowników</h3>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imie i Nazwisko</th>
                                <th scope="col">Stanowisko</th>
                                <th scope="col">Firma</th>
                                <th scope="col">Mob</th>
                                <th scope="col">Tel</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">===</th>
                                <th scope="col">===</th>
                              </tr>
                            </thead>   
                            <tbody>                
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{$employee->id}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->position}}</td>
                                    <td>{{$employee->company}}</td>   
                                    <td>{{$employee->mobile}}</td>   
                                    <td>{{$employee->phone}}</td>   
                                    <td>{{$employee->email}}</td>   
                                    <td>
                                      <a target="_blank" href="/footer/{{$employee->id}}">                                      
                                        <button class='btn btn-secondary'>
                                          HTML
                                        </button>
                                      </a>
                                    </td>    
                                    <td>
                                      <a href="/edit/{{$employee->id}}">                                      
                                        <button class='btn btn-secondary'>
                                          Edit
                                        </button>
                                      </a>
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
    <script>

    </script>
</div>
@endsection
