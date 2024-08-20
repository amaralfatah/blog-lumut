@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <small>Ditulis oleh: {{ $post->username }} pada {{ $post->created_at->format('d M Y') }}</small>
    <div class="mt-3">
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Hapus</button>
        </form>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
