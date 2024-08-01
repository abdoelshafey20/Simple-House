@extends('layouts.app')
@section('content')
@include('temp.navbar')
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 m-auto">
            <form enctype="multipart/form-data" method="POST" action="{{route('posts.saveedit')}}">
                @csrf
                <input type="hidden" name="old_id"  value="{{$item->id}}">

                <label>ID</label>
                <input class="form-control mb-4" type="text" name="id" value="{{$item->id}}">
                
                @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
           

                <label>Title_en</label>
                <input class="form-control mb-4" type="text" name="title_en" value="{{$item->title_en}}">
                  
                @error('title_en')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              
                <label>Title_ar</label>
                <input class="form-control mb-4" type="text" name="title_ar" value="{{$item->title_ar}}">
                
                  
                @error('title_ar')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              
                <label>Description_en</label>
                <input class="form-control mb-4" type="text" name="description_en" value="{{$item->description_en}}">
                  
                @error('description_en')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
               
                
                <label>Description_ar</label>
                <input class="form-control mb-4" type="text" name="description_ar" value="{{$item->description_ar}}">
                    
                   
                @error('description_ar')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            
     
                <input type="submit" value="Save Edit" class="btn btn-success btn-block">
            </form>
        </div>
    </div>
</div>




@endsection