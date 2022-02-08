@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__("Companies")}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                               
                    <a href='/companies/create'>
                      <button class='btn btn-primary mb-3'>{{__("Add Company")}}</button>  
                    </a>
                    <h3>{{__("List Of Companies")}}</h3>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{__("Company")}}</th>
                            <th scope="col">{{__("Phone")}}</th>
                            <th scope="col">{{__("Address")}}</th>
                            <th scope="col">{{__("WWW")}}</th>
                            <th scope="col"></th>
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
                            <button class='btn btn-sm btn-secondary m-2'>
                              {{__("Edit")}}
                            </button>
                          </a>
                          <form action="/companies/{{$company->id}}" method="POST">
                            @csrf
                            @method('delete')                                      
                            <button class='btn btn-sm btn-danger m-2' onclick="if(!confirm('czy chcesz usunąć')){event.preventDefault()}">
                              {{__("Delete")}}
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
