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
                        <td>
                            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{route('posts.destroy',$post->id)}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are your sure ?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>
            
@endsection