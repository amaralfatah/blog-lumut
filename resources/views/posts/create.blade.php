@extends('layouts.app')

@section('title', 'Buat Post Baru')

@section('content')
    <h1>Buat Post Baru</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
