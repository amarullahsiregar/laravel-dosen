@extends('layouts.dosen')
@section('title','Login')
@section('adds')
<link rel="stylesheet" href="{{asset('css/glass.css')}}">
@endsection
@section('content')
    <div class="login-container">
        <div class="row">
            <div class="col-md-6">

                <h1>{{ $title }} Dosen</h1>
                <form method="POST" action="/login-post">
                    @csrf
                    <h3>Login Here</h3>

                    <label class="px-4 pb-4" for="email">Email</label>
                    <input class="p-4 text-white" type="text" placeholder="user@email.com" id="email"  name="email">

                    <label class="px-4 pb-4" for="password">Password</label>
                    <input class="p-4" type="password" placeholder="Masukkan Password Anda" id="password"  name="password" >

                    <button class="mt-20 bg-white py-4" type="submit">Log In</button>
                </form>
                <small><a href="https://cekdos.my.id">daftar hadir dosen</a></small>
            </div>

        </div>
    </div>
@section('content')
