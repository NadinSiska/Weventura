@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')

<div class="container">
    <h1>Profil Pengguna</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection