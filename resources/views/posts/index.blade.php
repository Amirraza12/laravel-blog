@extends('layouts.app')

@section('title','Show Data')
    
    @section('content')
            <h3>All Post</h3>

            <a href="{{route('posts.create')}}" class="btn btn-primary mb-3">Create New Post</a>

            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th width="200px">Actions</th>
                </tr>
                
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id}}</td>
                        <td>{{ $post->title}}</td>
                        <td>{{ $post->content}}</td>
                    </tr>
                @endforeach

            </table>
            
@endsection