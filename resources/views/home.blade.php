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
                    <form action="/api/footers" method="post">
                        <div class="form-group">
                          <label for="name">Imie i Nazwisko</label>
                          <input class="form-control" id="name" name='name'>
                        </div>
                        <div class="form-group">
                          <label for="position">Stanowisko</label>
                          <input class="form-control" id="position" name='position'>
                        </div>
                        <div class="form-group">
                          <label for="phone">Telefon</label>
                          <input type="phone" class="form-control" name='phone' id="phone">
                        </div>
                        <div class="form-group">
                          <label for="email">E-Mail</label>
                          <input type="email" class="form-control" name='email' id="email">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Stwórz</button>
                    </form>
                    <div class='my-4'>
                        <h3>Lista pracowników</h3>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imie i Nazwisko</th>
                                <th scope="col">Stanowisko</th>
                                <th scope="col">Numer</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">===</th>
                                <th scope="col">===</th>
                              </tr>
                            </thead>   
                            <tbody>                
                            @foreach ($footers as $footer)
                                <tr>
                                    <td>{{$footer->id}}</td>
                                    <td>{{$footer->name}}</td>
                                    <td>{{$footer->position}}</td>
                                    <td>{{$footer->phone}}</td>
                                    <td>{{$footer->email}}</td>   
                                    <td>PNG HTML</td>    
                                    <td>Edit Delete</td>    
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
