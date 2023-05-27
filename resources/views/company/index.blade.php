@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a href="{{route('companies.create')}}" class="btn btn-primary">Add Company</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
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
                                <td><img src="/logo/{{$company->logo}}" width="100px" height="100"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
