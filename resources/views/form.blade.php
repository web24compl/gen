@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  @isset($employee)
                    {{__("Edit")}}
                  @else
                    {{__("Add")}}
                  @endisset
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <form method="POST" action="{{isset($employee) ? route('employees.update',['employee'=>$employee->id]) : route('employees.store')}}">
                      @csrf
                      @isset($employee)
                          @method('patch')
                      @endisset
                        <div class="form-group">
                          <label for="name">{{__("Name")}}</label>
                          <input class="form-control" id="name" name='name' value="{{$employee?->name}}">
                        </div>
                        <div class="form-group">
                          <label for="company">{{__("Company")}}</label>
                          <select name="company" id="company" class='form-select'>
                            @foreach ($companies as $company)
                                <option value='{{$company->company}}'>{{$company->company}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="position">{{__("Position")}}</label>
                          <input class="form-control" id="position" name='position' value="{{$employee?->position}}">
                        </div>
                        <div class="form-group">
                          <label for="department">{{__("Department")}}</label>
                          <input class="form-control" id="department" name='department' value="{{$employee?->department}}">
                        </div>
                        <div class="form-group">
                          <label for="mobile">{{__("Mobile")}}</label>
                          <input type="tel" class="form-control" id="mobile" name='mobile' value="{{$employee?->mobile}}">
                        </div>
                        <div class="form-group">
                          <label for="email">{{__("Email")}}</label>
                          <input class="form-control" type='email' id="email" name='email' value="{{$employee?->email}}">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">
                          @isset($employee)
                            {{__("Edit")}}
                            @else
                            {{__("Add")}}
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
