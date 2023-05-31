@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('employees.create')}}" class="btn btn-primary">Add Employee</a>
                    <a href="{{route('home')}}" class="btn btn-danger btn-xs py-1 float-end">Back</a>
                </div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <p> {{$message}} </p>
                    </div>
                    @endif

                    <table class="table table-border">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email </th>
                            <th>Phone Number</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->last_name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>
                                    <a href="{{route('employees.edit', $employee)}}" class="btn  btn-xs py-1 "> <i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <form action="{{route('employees.destroy',$employee)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn  btn-xs py-1 "> <i class="fa-solid fa-trash" style="color: #e40707;"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div class="row">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
