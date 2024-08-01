@extends('layouts.app')
@section('content')
@include('temp.navbar')
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 m-auto">
            <form enctype="multipart/form-data" method="POST" action="{{route('users.saveedit')}}">
                @csrf
                <input type="hidden" name="old_id"  value="{{$item->id}}">

                <label>ID</label>
                <input class="form-control mb-4" type="text" name="id" value="{{$item->id}}">
                
                @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
           
     
                <label >Name</label>
                <input type="text" name="name" class="form-control mb-3" value="{{$item->name}}">    
                
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  
                  <label >Email</label>
                  <input type="email" name="email" class="form-control mb-3" value="{{$item->email}}">    
                  
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <label >Role</label>
                    <input type="enum" name="role" class="form-control mb-3" value="{{$item->role}}">    
                    
                      @error('role')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
     
                <input type="submit" value="Save Edit" class="btn btn-success btn-block">
            </form>
        </div>
    </div>
</div>




@endsection