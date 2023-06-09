@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('companies.create')}}" class="btn btn-primary">Add Company</a>
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
                            <th>Company Name</th>
                            <th>Email </th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                            @foreach ($companies as $company)
                            <tr>
                                <td>{{$company->name}}</td>
                                <td>{{$company->email}}</td>
                                <td><img src="{{asset('upload/logo/' .$company->logo)}}" width="100px" height="100"></td>
                                <td>
                                    <a href="{{route('companies.edit',$company)}}" class="btn btn-xs py-1"><i class="fa-solid fa-pen-to-square"></i>edit</a>
                                    <form action="{{route('companies.destroy', $company)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn  btn-xs py-1 "> <i class="fa-solid fa-trash" style="color: #e40707;"></i>delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <div class="row">
                    {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
