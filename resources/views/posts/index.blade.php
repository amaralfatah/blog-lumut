@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <div class="d-flex justify-content-between">
        <h1>Daftar Post</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Tambah Post</a>
    </div>

    @foreach ($posts as $post)
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{{ $post->content }}</p>
                <small class="text-muted">Ditulis oleh: {{ $post->username }} pada {{ $post->created_at->format('d M Y') }}</small>
                <div class="mt-3">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus post ini?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
