@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea name="content" class="form-control" rows="5" required>{{ old('content', $post->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
