<!-- resources/views/dosen/show.blade.php -->
@extends('layouts.app') <!-- Gunakan layout yang sesuai -->

@section('content')
    <h1>Detail Dosen</h1>
    <p>Nama: {{ $dosen->nama }}</p>
    <p>Email: {{ $dosen->email }}</p>
    <!-- Tambahkan informasi lain sesuai kebutuhan -->
@endsection
