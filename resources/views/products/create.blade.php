@extends('layouts.app')
@section('content')
@include('temp.navbar')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 m-auto ">
            <h3 class="text-center">Create New Product</h3>
                <form action="{{route('products.savenew')}}" method="post" enctype="multipart/form-data">
                    
                    @csrf
             

                <label >ID</label>
                <input type="text" name="id" class="form-control mb-3">    
              
                @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
               
                <label >Title_en</label>
                <input type="text" name="title_en" class="form-control mb-3">    
                
                  @error('title_en')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  
                  <label >Title_ar</label>
                  <input type="text" name="title_ar" class="form-control mb-3">    
                  
                    @error('title_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    <label >Description_en</label>
                    <input type="text" name="description_en" class="form-control mb-3">    
                    
                      @error('description_en')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      
                      <label >Description_ar</label>
                      <input type="text" name="description_ar" class="form-control mb-3">    
                      
                        @error('description_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    
                        <label >Price</label>
                      <input type="double" name="price" class="form-control mb-3">    
                      
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    
                        <label >quantity</label>
                      <input type="int" name="quantity" class="form-control mb-3">    
                      
                        @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        
        
               
                <input type="submit" class="btn btn-success btn-block"value="Create New product">

                </form>
        </div>
    </div>
</div>
    
@endsection