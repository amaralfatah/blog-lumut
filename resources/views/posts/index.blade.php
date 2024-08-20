@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <h1>Daftar Post</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Tambah Post</a>
    <ul class="list-group mt-3">
        @foreach ($posts as $post)
            <li class="list-group-item">
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->content }}</p>
                <small>Ditulis oleh: {{ $post->username }} pada {{ $post->created_at->format('d M Y') }}</small>
                <div>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
