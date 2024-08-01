@extends('layouts.app')
@section('content')
@include('temp.navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 m-auto">
                <h3 class='text-center'>Details Of One Record</h3>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created At</th>
                            <th>Operation</th>


                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{ $result->id }}</td>
                            <td>{{ $result->name }}</td>
                            <td>{{ $result->email }}</td>
                            <td>{{ $result->role }}</td>
                      
                            <td>{{$result->created_at}}</td>
                            <td>
                                <a href="{{route('home')}}" class="btn btn-success">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
