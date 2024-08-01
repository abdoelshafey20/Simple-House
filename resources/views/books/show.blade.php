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
                            <th>Title_en</th>
                            <th>Title_ar</th>
                            <th>Description_en</th>
                            <th>Description_ar</th>
                       
                            <th>Created At</th>
                            <th>Operation</th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{$result->id}}</td>
                            <td>{{$result->title_en}}</td>
                            <td>{{$result->title_ar}}</td>
                            <td>{{$result->description_en}}</td>
                            <td>{{$result->description_ar}}</td>
                          
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
