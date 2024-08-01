@extends('layouts.app')
@section('content')
@include('temp.navbar')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 m-auto ">
            <h3 class="text-center">Create New Category</h3>
                <form action="{{route('categories.savenew')}}" method="post" enctype="multipart/form-data">
                    
                    @csrf
                <label >Image</label>
                <input type="file" name="cate_image" class="form-control mb-3">    
                
                @error('cate_image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

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
                        
                        <label >Parent_id</label>
                       <select name="parent_id" class="form-control mb-3">
                        <option value="main">Main Category</option>
                        @foreach ($result as $item)
                        @if ($item->parent_id =="main")
                        <option value="{{$item->title_en}}">{{$item->id}}-{{$item->title_en}}</option>     
                        @endif 
                        @endforeach
                        </select>    
                        
                          @error('parent_id')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
               
                <input type="submit" class="btn btn-success btn-block"value="Create New Category">

                </form>
        </div>
    </div>
</div>
    
@endsection