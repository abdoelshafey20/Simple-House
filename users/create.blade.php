@extends('layouts.app')
@section('content')
@include('temp.navbar')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 m-auto ">
            <h3 class="text-center">Create New User</h3>
                <form action="{{route('users.savenew')}}" method="post" enctype="multipart/form-data">
                    
                    @csrf

        
                <label >ID</label>
                <input type="text" name="id" class="form-control mb-3">    
              
                @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
               
                <label >Name</label>
                <input type="text" name="name" class="form-control mb-3">    
                
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  
                  <label >Email</label>
                  <input type="email" name="email" class="form-control mb-3">    
                  
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
           
               
                      <label >Password</label>

                 
                      <input id="password" type="password"
                      class="form-control @error('password') is-invalid @enderror" name="password"
                      required autocomplete="new-password">

                          @error('password')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
           

                    
                    <label >Role</label>
                    <input type="enum" name="role" class="form-control mb-3">    
                    
                      @error('role')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      
                  
             
                <input type="submit" class="btn btn-success btn-block"value="Create New User">

                </form>
        </div>
    </div>
</div>
    
@endsection