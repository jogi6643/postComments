
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
   
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <th>No</th>
                    <th>Title</th>
                    <th>Action</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('posts.show',$post->slug) }}" class="btn btn-sm btn-outline-primary py-0" style="font-size: 0.8em;">Read Post</a>
                    </td>
                    <td>
                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;">Edit</a>
                    </td>
                    <td>
                    <form method="delete" action="#">
                        <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Delete" />
                    </form>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection 