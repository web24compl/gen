@extends('generator::layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{__("Employees")}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a href='/employees/create'>
                          <button class='btn btn-primary mb-3'>{{__("Add Employee")}}</button>  
                        </a>
                        <h3>{{__("List Of Employees")}}</h3>
                        <div class="table-responsive-xl">
                          
                          <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">{{__("Name")}}</th>
                                  <th scope="col">{{__("Company")}}</th>
                                  <th scope="col">{{__("Position")}}</th>
                                  {{-- <th scope="col">{{__("Department")}}</th> --}}
                                  <th scope="col">{{__("Mobile")}}</th>
                                  <th scope="col">{{__("Email")}}</th>
                                  <th scope="col">Desktop</th>
                                  <th scope="col">Mobile</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>   
                              <tbody>                
                              @foreach ($employees as $employee)
                                  <tr>
                                      <td>{{$loop->iteration}}</td>
                                      <td>{{$employee->name}}</td>
                                      <td>{{$employee->company}}</td>   
                                      <td>{{$employee->position}}</td>
                                      {{-- <td>{{$employee->department}}</td>    --}}
                                      <td>{{$employee->mobile}}</td>   
                                      <td>{{$employee->email}}</td>   
                                      <td>
                                        {{-- <a href="/footer/desktop/{{$employee->id}}/pl" download='pl {{$employee->name}}'>                            
                                          <button class='btn btn-sm btn-secondary m-2'>HTML PL</button>
                                        </a> --}}
                                        <a href="/image/desktop/{{$employee->id}}/pl">                               
                                          <button class='btn btn-sm btn-secondary m-2'>PL</button>
                                        </a>
                                        {{-- <a href="/footer/desktop/{{$employee->id}}/en" download='en {{$employee->name}}'>                            
                                          <button class='btn btn-sm btn-secondary m-2'>HTML EN</button>
                                        </a> --}}
                                        <a href="/image/desktop/{{$employee->id}}/en">                               
                                          <button class='btn btn-sm btn-secondary m-2'>EN</button>
                                        </a>
                                      </td>  
                                      <td>
                                        {{-- <a href="/footer/mobile/{{$employee->id}}/pl" download='stopka {{$employee->name}}'>                            
                                          <button class='btn btn-sm btn-secondary m-2'>HTML PL</button>
                                        </a> --}}
                                        <a href="/image/mobile/{{$employee->id}}/pl">                               
                                          <button class='btn btn-sm btn-secondary m-2'>PL</button>
                                        </a>
                                        {{-- <a href="/footer/mobile/{{$employee->id}}/en" download='stopka {{$employee->name}}'>                            
                                          <button class='btn btn-sm btn-secondary m-2'>HTML EN</button>
                                        </a> --}}
                                        <a href="/image/mobile/{{$employee->id}}/en">                               
                                          <button class='btn btn-sm btn-secondary m-2'>EN</button>
                                        </a>
                                      </td>    
                                      <td>
                                        <a href="/employees/{{$employee->id}}/edit">                                      
                                          <button class='btn btn-sm btn-secondary m-2'>
                                            {{__("Edit")}}
                                          </button>
                                        </a>
                                        <form action="/employees/{{$employee->id}}" method="POST">
                                          @csrf
                                          @method('delete')                                      
                                          <button class='btn btn-sm btn-danger m-2' onclick="if(!confirm('czy chcesz usunąć')){event.preventDefault()}">
                                            {{__("Delete")}}
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
</div>
@endsection
