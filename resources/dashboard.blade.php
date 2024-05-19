@extends('layouts.dosen')
@section('title','Dashboard')
@section('content')


@php
    $nav1 = "Status Hadir Dosen";
    $nav1ref =  url('dashboard-dosen').'/'.$details->email ;
    $nav2 = "Antrian Bimbingan";
    $nav2ref =  url('antrian-mahasiswa').'/'.$details->email ;
    $nav3 = "Detail Dosen";
    $nav3ref =  url('detail-dosen').'/' .$details->email;
    $nav4 = "Logout";
    $nav4ref =  url('logout');
    $class = "text-orange-500";
@endphp

<h2 class="tanggal-dashboard-dosen px-10 text-gray-400"> {{ \Carbon\Carbon::now()->isoFormat('dddd') }}  {{" ".date("d F Y");}}</h2>

@include('partials.navbar')

<div class="dosen-container py-4">
    <div class="card dosen-dashboard">
        <div class="card-body pt-4 p-3">
            @if($details!=null)
            <div class="col-span-4 sm:col-span-3">
                <div class="viewing-area bg-white shadow rounded-lg p-6">
                    <span class="text-gray-700 uppercase font-bold tracking-wider mb-2"><h1 class="text-2xl font-bold leading-6 text-gray-900">
                        Status Hadir
                    </h1></span>
                    <div class="flex flex-col items-center">
                        <h1 class="text-xl font-bold text-center">{{ $details->nama }}</h1>
                        <p class="text-gray-700">No. Induk {{ $details->id }}</p>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 w-full max-w-6xl">
                        @if ( $details->status_kehadiran == 'Hadir')

                        <div class="flex items-center p-4 bg-white rounded">
                            <div class="flex flex-shrink-0 items-center justify-center bg-green-200 h-16 w-16 rounded">
                            </div>
                            <div class="flex-grow flex flex-col ml-4">
                                <span class="text-xl font-bold">{{ $details->status_kehadiran }}</span>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-500">Revenue last 30 days</span>
                                    <span class="text-green-500 text-sm font-semibold ml-2"></span>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if ( $details->status_kehadiran == 'Mengajar')

                        <div class="flex items-center p-4 bg-white rounded">
                            <div class="flex flex-shrink-0 items-center justify-center bg-sky-400 h-16 w-16 rounded">
                            </div>
                            <div class="flex-grow flex flex-col ml-4">
                                <span class="text-xl font-bold">{{ $details->status_kehadiran }}</span>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-500">Revenue last 30 days</span>
                                    <span class="text-green-500 text-sm font-semibold ml-2"></span>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if ( $details->status_kehadiran == 'Tidak Hadir')

                        <div class="flex items-center p-4 bg-white rounded">
                            <div class="flex flex-shrink-0 items-center justify-center bg-red-400 h-16 w-16 rounded">
                            </div>
                            <div class="flex-grow flex flex-col ml-4">
                                <span class="text-xl font-bold">{{ $details->status_kehadiran }}</span>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-500">Revenue last 30 days</span>
                                    <span class="text-green-500 text-sm font-semibold ml-2"></span>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if($details->kesediaan_bimbingan=='Bersedia')
                        <a href="{{ url('antrian-mahasiswa').'/'.$details->email }}">
                        <div class="flex items-center p-4 bg-white rounded">
                            <div class="flex flex-shrink-0 items-center justify-center bg-green-200 h-16 w-16 rounded">
                            </div>
                            <div class="flex-grow flex flex-col ml-4">
                                <span class="text-xl font-bold">Bersedia Bimbingan</span>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-500">Kesediaan Membimbing</span>
                                    <span class="text-red-500 text-sm font-semibold ml-2"></span>
                                </div>
                            </div>
                        </div>
                        </a>
                        @endif
                        @if($details->kesediaan_bimbingan=='Tidak')
                        <a href="{{ url('antrian-mahasiswa').'/'.$details->email }}">
                        <div class="flex items-center p-4 bg-white rounded">
                            <div class="flex flex-shrink-0 items-center justify-center bg-red-200 h-16 w-16 rounded">

                            </div>
                            <div class="flex-grow flex flex-col ml-4">
                                <span class="text-xl font-bold">{{ $details->kesediaan_bimbingan }} Bersedia</span>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-500">Kesediaan Membimbing</span>
                                    <span class="text-red-500 text-sm font-semibold ml-2"></span>
                                </div>
                            </div>
                        </div>
                        </a>
                        @endif
                        </div>
                    </div>
                    <hr class="my-6 border-t border-gray-300">
                    <div class="flex flex-col">
                        <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Ubah Status</span>
                        <ul>
                            <li class="mb-2"></li>
                        </ul>
                    </div>
                    <form action="/kehadiran-set-put/{{$details->email}}" method="POST" class="form-status-kehadiran" >
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <label for="email"></label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $details->email }}" readonly hidden>
                        </div>
                        <div>
                            <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">

                                <span class="checkmark"></span>
                                @if ($details->status_kehadiran=='Hadir')
                                <input id="hadir" type="radio" checked="checked" name="status_kehadiran" value="Hadir">
                                <input id="kesediaan_bimbingan" type="text" name="kesediaan_bimbingan" value="Bersedia" hidden>
                                @else
                                    <input id="hadir" type="radio" name="status_kehadiran" value="Hadir">
                                @endif
                                <p class="pl-2">Hadir</p>
                            </label>
                            <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                                <span class="checkmark"></span>
                                @if ($details->status_kehadiran=='Mengajar')
                                    <input id="mengajar" type="radio" checked="checked"   name="status_kehadiran" value="Mengajar">
                                @else
                                    <input id="mengajar" type="radio"  name="status_kehadiran" value="Mengajar">
                                @endif
                                <p class="pl-2">Sedang Mengajar</p>
                            </label>
                            <label class="flex bg-gray-100 text-gray-700 rounded-md px-3 py-2 my-3  hover:bg-indigo-300 cursor-pointer ">
                                <span class="checkmark"></span>
                                @if ($details->status_kehadiran=='Tidak Hadir')
                                    <input id="absen" type="radio" checked="checked"   name="status_kehadiran" value="Tidak Hadir">
                                @else
                                    <input id="absen" type="radio"  name="status_kehadiran" value="Tidak Hadir">
                                @endif
                                <p class="pl-2">Tidak Hadir</p>
                            </label>
                        </div>

                        <input id="kesediaan_bimbingan" type="text" name="kesediaan_bimbingan" value="Bersedia" hidden>

                        <div class="row mt-5">
                            <button type="submit" class="bg-sky-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Set Status</button>
                        </div>
                    </form>
                </div>
            </div>

            @else
                <p>Maaf Dosen tidak ditemukan! (set)</p>
            @endif
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush
