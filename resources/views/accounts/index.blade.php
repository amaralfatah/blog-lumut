@extends('layouts.app')

@section('title', 'Daftar Akun')

@section('content')
    <h1>Daftar Akun</h1>
    <a href="{{ route('accounts.create') }}" class="btn btn-primary">Tambah Akun</a>
    <ul class="list-group mt-3">
        @foreach($users as $user)
            <li class="list-group-item">
                <h4>{{ $user->name }}</h4>
                <p>Role: {{ $user->role }}</p>
                <div>
                    <a href="{{ route('accounts.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('accounts.destroy', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
