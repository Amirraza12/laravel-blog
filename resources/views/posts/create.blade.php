@extends('layouts.app')

@section('title','Crud Page')

@section('content')
    
<div class="container">
    <h1>Create New Post</h1>    
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                    <label >Title</label>
                    <input type="text" name="title" class="form-control">
                    @error('title') <p class="text-danger">{{$message}}</p> @enderror
                        
            </div>
            <div class="mb-3">
                <label>Content</label>
                <input type="text" name="content" class="form-control">
                @error('content') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <button type="submit" class="btn btn-success">Save</button>

        </form>
</div>
@endsection