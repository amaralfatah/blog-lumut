@extends('layouts.app')

@section('title', 'Edit Akun')

@section('content')
    <h1>Edit Akun</h1>
    <form action="{{ route('accounts.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            <small class="text-muted">Kosongkan jika tidak ingin mengubah password.</small>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" class="form-control" required>
                <option value="admin" @if ($user->role === 'admin') selected @endif>Admin</option>
                <option value="author" @if ($user->role === 'author') selected @endif>Author</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
