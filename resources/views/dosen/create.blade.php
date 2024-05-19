<!-- lokasi file pada /views/dosen/create.blade.php -->
@extends('layouts.app') <!-- Menggunakan Layout bernama "app.blade.php" pada direktori /views/layouts/ -->

@section('content') 

<div class="container-xl">
    <div class="card form-container mt-8">
        <div class="card-header mb-5 pb-1 text-left bg-transparent">
                <h1 class="position-absolute">Input Data Dosen</h1>
        </div>
        <div class="mt-5 mt-lg-4">
            <form action="/dosen-add" method="post">
                @csrf <!-- Laravel CSRF token-->
                <div class="row">
                    <label for="email">E-mail : </label>
                    <input type="email" name="email" id="email" required>
                </div>
                <br>
                <div class="row">
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" required>
                </div>
                <br>
                <div class="row">
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password" required>
                </div>
                <br>
                <div class="row justify-content">
                    <button type="submit">Simpan</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
        