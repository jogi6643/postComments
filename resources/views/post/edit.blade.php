
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>
                <div class="card-body">

                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <form method="patch" action="{{ route('posts.update', ['id' => $post->id,'post' => $post]) }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Post Title: </label>
                            {{-- <input type="text" name="id" value="{{ $post->id }}" class="form-control" required/> --}}
                            <input type="text" name="title" value="{{ $post->title }}" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Update post"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 