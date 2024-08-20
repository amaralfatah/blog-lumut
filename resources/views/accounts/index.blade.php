@extends('layouts.app')

@section('title', 'Daftar Akun')

@section('content')
    <div class="d-flex justify-content-between ">
        <h1>Daftar Akun</h1>
        <a href="{{ route('accounts.create') }}" class="btn btn-primary mb-4">Tambah Akun</a>
    </div>
    @foreach ($users as $user)
        <div class="card mb-2">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="card-title">{{ $user->name }}</h4>
                        <p class="card-text">Role: {{ $user->role }}</p>
                    </div>
                    <div>
                        <a href="{{ route('accounts.edit', $user->id) }}" class="btn btn-warning me-2">Edit</a>
                        <form action="{{ route('accounts.destroy', $user->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun ini?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
