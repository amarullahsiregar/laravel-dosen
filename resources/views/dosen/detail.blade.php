<!-- lokasi file pada /views/dosen/index.blade.php -->
@extends('layouts.dosen') <!-- Menggunakan Layout bernama "app.blade.php" pada direktori /views/layouts/ -->
@section('title','Detail')
@section('content')

@php
    $nav1 = "Detail Dosen";
    $nav1ref = url('detail-dosen').'/' .$details->email;
    $nav2 = "Status Hadir Dosen";
    $nav2ref = url('dashboard-dosen').'/'.$details->email ;
    $nav3 = "Antrian Bimbingan";
    $nav3ref = url('antrian-mahasiswa').'/'.$details->email ;
    $nav4 = "Logout";
    $nav4ref =  url('logout');
    $class = "text-orange-500";
@endphp

@include('partials.navbar')
<div class="dosen-container py-4">
    <div class="card dosen-dashboard">
        <div class="card-body pt-4 p-3">
            @if($details!=null)
            <div class="col-span-4 sm:col-span-3">
                <div class="viewing-area bg-white shadow rounded-lg p-6">

                    <span class="text-gray-700 font-bold tracking-wider mb-2">
                        <h1 class="text-2xl font-bold leading-6 text-gray-900 pb-5">
                            Detail Dosen
                        </h1>
                    </span>

                    {{-- viewing --}}


                    <div class="flex flex-col items-center">
                        <h1 class="text-xl font-bold text-center">{{ $details->nama }}</h1>
                        <p class="text-gray-700">{{ $details->inisial_dosen }}</p>
                        <p class="text-gray-700">No. Induk {{ $details->id }}</p>
                        <p class="text-gray-700">{{ $details->email }}</p>

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 w-full max-w-6xl">

                            @switch($details->status_kehadiran)
                                @case('Hadir')
                                <div class="flex items-center p-4 bg-white rounded">
                                    <div class="flex flex-shrink-0 items-center justify-center bg-green-300 h-16 w-16 rounded">
                                        <div class="text-white">
                                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-grow flex flex-col ml-4">
                                        <span class="text-xl font-bold">{{ $details->status_kehadiran }}</span>
                                        <div class="flex items-center justify-between">
                                            <span class="text-gray-500">Status Hadir</span>
                                            <span class="text-green-500 text-sm font-semibold ml-2"></span>
                                        </div>
                                    </div>
                                </div>
                                    @break
                                @case('Mengajar')
                                <div class="flex items-center p-4 bg-white rounded">
                                    <div class="flex flex-shrink-0 items-center justify-center bg-sky-400 h-16 w-16 rounded">
                                        <div class="text-white">
                                            <svg width="35" height="32" viewBox="0 0 39 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.8315 35C17.6999 35 15.8433 34.3124 14.5025 33.0403L14.4681 33.0059H3.74116C2.09086 33.0059 0.75 31.665 0.75 30.0147V2.99116C0.75 1.34086 2.09086 0 3.74116 0H13.9867C16.2215 0 18.3188 0.997053 19.7284 2.75049L19.8659 2.88802L20.0034 2.75049C21.4131 0.997053 23.5103 0 25.7451 0H35.9907C37.641 0 38.9818 1.34086 38.9818 2.99116V30.0491C38.9818 31.6994 37.641 33.0403 35.9907 33.0403H25.195L25.1606 33.0747C23.8197 34.3468 21.9632 35 19.8315 35ZM25.6763 1.78782C22.582 2.16601 20.9317 3.50688 20.9317 5.63851V33.109L21.1036 33.0747C22.0319 32.8684 22.8571 32.4214 23.4759 31.7338L23.5791 31.5963C23.751 31.3212 23.9916 31.1493 24.0948 31.1493H37.0565L36.9877 1.78782H25.6763ZM16.1871 31.7682C16.806 32.4214 17.6311 32.8684 18.6626 33.0747L18.8345 33.109V5.63851C18.8345 2.95678 16.2215 1.92534 13.9867 1.8222H2.5722V31.1837H15.5339C15.6026 31.1837 15.9465 31.4244 16.084 31.6307L16.1871 31.7682Z" fill="currentColor"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-grow flex flex-col ml-4">
                                        <span class="text-xl font-bold">{{ $details->status_kehadiran }}</span>
                                        <div class="flex items-center justify-between">
                                            <span class="text-gray-500">Status Hadir</span>
                                            <span class="text-green-500 text-sm font-semibold ml-2"></span>
                                        </div>
                                    </div>
                                </div>
                                    @break
                                @case('Tidak Hadir')
                                <div class="flex items-center p-4 bg-white rounded">
                                    <div class="flex flex-shrink-0 items-center justify-center bg-red-400 h-16 w-16 rounded">
                                        <div class="text-white">
                                            <svg width="38" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-grow flex flex-col ml-4">
                                        <span class="text-xl font-bold">{{ $details->status_kehadiran }}</span>
                                        <div class="flex items-center justify-between">
                                            <span class="text-gray-500">Status Hadir</span>
                                            <span class="text-green-500 text-sm font-semibold ml-2"></span>
                                        </div>
                                    </div>
                                </div>
                                    @break
                                @default
                            @endswitch

                        @if($details->kesediaan_bimbingan=='Bersedia')
                        <a href="{{ url('antrian-mahasiswa').'/'.$details->email }}">
                        <div class="flex items-center p-4 bg-white rounded">
                            <div class="flex flex-shrink-0 items-center justify-center bg-green-300 h-16 w-16 rounded">
                                <div class="text-white">
                                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow flex flex-col ml-4">
                                <span class="text-xl font-bold">Bersedia Bimbingan</span>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-500">Kesediaan Membimbing</span>
                                    <span class="text-green-500 text-sm font-semibold ml-2">Slot : {{ $details->slot_bimbingan }}</span>
                                </div>
                            </div>
                        </div>
                        </a>
                        @elseif($details->kesediaan_bimbingan=='Tidak')
                        <a href="{{ url('antrian-mahasiswa').'/'.$details->email }}">
                        <div class="flex items-center p-4 bg-white rounded">
                            <div class="flex flex-shrink-0 items-center justify-center bg-red-400 h-16 w-16 rounded">
                                <div class="text-white">
                                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow flex flex-col ml-4">
                                <span class="text-xl font-bold">{{ $details->kesediaan_bimbingan }}</span>
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
                        <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Mahasiswa TA Yang Dibimbing (Semua) </span>
                    </div>

                    {{-- viewing --}}
        </div>
        <div class="card-body pt-4 p-3">
            @if($details==null)
                Maaf user tidak ditemukan!
            @else
                <p>{{$details->nama}}</p>
            @endif
            <table>
                <thead class="border-2">
                    <th class="py-2 px-5 border-2 bg-gray-300 font-bold">NIM</th>
                    <th class="py-2 px-5 border-2 bg-gray-300 font-bold">Nama Mahasiswa</th>
                    <th class="py-2 px-5 border-2 bg-gray-300 font-bold">Sebagai Pembimbing</th>
                </thead>
                <tbody class="border-2">
                    @foreach ($mahasiswas as $item)

                    @if ($item->dosbing1==$details->email)
                        <tr class="">
                            <td class="py-2 px-5 border-2">
                                {{ $item->nim }}
                            </td>
                            <td class="py-2 px-5 border-2">
                                {{ $item->nama }}
                            </td>
                            <td class="py-2 px-5 border-2">
                                1
                            </td>
                        </tr>
                    @elseif($item->dosbing2==$details->email)
                        <tr class="">
                            <td class="py-2 px-5 border-2">
                                {{ $item->nim }}
                            </td>
                            <td class="py-2 px-5 border-2">
                                {{ $item->nama }}
                            </td>
                            <td class="py-2 px-5 border-2">
                                2
                            </td>
                        </tr>
                    @endif

                    @endforeach
                </tbody>
            </table>
        </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
