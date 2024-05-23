@extends('layouts.dosen') <!-- Menggunakan Layout bernama "app.blade.php" pada direktori /views/layouts/ -->
@section('title','Antrian Bimbingan')
@section('content')

@php
    $nav1 = "Dashboard Dosen";
    $nav1ref =  url('dashboard-dosen').'/'.$details->email ;
    $nav2 = "Antrian Bimbingan";
    $nav2class = "active";
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

                    <span class="text-gray-700 font-bold tracking-wider mb-2">
                        <h1 class="text-3xl font-bold leading-6 text-gray-900 pb-5">
                            {{ $details->nama }}
                        </h1>
                        <p class="text-xl font-bold leading-6 text-gray-900 pb-5">({{ $details->inisial_dosen }})</p>
                        <p class="text-xl font-bold leading-6 text-gray-900 pb-5">No. Induk {{ $details->id }}</p>
                    </span>
                    <div class="flex flex-col items-center">

                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 w-full max-w-6xl">

                            <!-- v Status Kehadiran v -->
                            @if ( $details->status_kehadiran == 'Hadir')
                            <a href="{{ url('dashboard-dosen').'/'.$details->email }}">
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
                            </a>
                            @endif
                            @if ( $details->status_kehadiran == 'Mengajar')
                            <a href="{{ url('dashboard-dosen').'/'.$details->email }}">
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
                            </a>
                            @endif
                            @if ( $details->status_kehadiran == 'Tidak Hadir')
                            <a href="{{ url('dashboard-dosen').'/'.$details->email }}">
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
                                    <span class="text-xl font-bold">{{ $details->status_kehadiran }}</span>
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-500">Status Hadir</span>
                                        <span class="text-green-500 text-sm font-semibold ml-2"></span>
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endif
                            <!-- ^ Status Kehadiran ^ -->


                            <!-- v Kesediaan Bimbingan v -->
                            @if($details->kesediaan_bimbingan=='Bersedia')
                            <a href="{{ url('set-tidak-bersedia').'/'.$details->email }}">
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
                            @endif
                            @if($details->kesediaan_bimbingan=='Tidak')
                            <a href="{{ url('set-bersedia').'/'.$details->email }}">
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
                            <!-- ^ Kesediaan Bimbingan ^ -->

                        </div>
                    </div>
                    <hr class="my-6 border-t border-gray-300">
                    <div class="flex flex-col">
                        <span class="text-gray-700 uppercase font-bold tracking-wider mb-2">Ubah Status Kesediaan Bimbingan</span>
                    </div>
                        {{--  --}}
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 w-full max-w-6xl">
                            <div>
                                <h1 class="text-3xl font-bold leading-6 text-gray-900 mb-5">
                                    Terima Bimbingan
                                </h1>
                            </div>
                            @if ($details->kesediaan_bimbingan=='Tidak')
                            <div>
                                <a href="{{ url('set-bersedia').'/'.$details->email }}" aria-label="theme toggler" class="mb-5 flex h-[48px] w-[48px] items-center justify-center rounded-lg border border-stroke bg-white text-dark-4 duration-300 hover:bg-stroke dark:border-dark-2 dark:bg-dark-2 dark:text-white dark:hover:bg-dark-3 sm:flex">
                                    <span class="text-red-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            @elseif ($details->kesediaan_bimbingan=='Bersedia')
                            <div class="max-w-20">
                                <a href="{{ url('set-tidak-bersedia').'/'.$details->email }}" aria-label="theme toggler" class="mb-5 flex h-[48px] w-[48px] items-center justify-center rounded-lg border border-stroke bg-white text-dark-4 duration-300 hover:bg-stroke dark:border-dark-2 dark:bg-dark-2 dark:text-white dark:hover:bg-dark-3 sm:flex">
                                    <span class="text-green-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <form action="/set-slot/{{ $details->email }}" method="post">
                                    @csrf
                                    <label for="slot_bimbingan">Slot Bimbingan</label>
                                    <input class="py-3 px-5 max-w-24 bg-gray-200" type="number" min="0" value="{{ $details->slot_bimbingan }}" class="border mb-5 flex" id="slot_bimbingan" name="slot_bimbingan">
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white p-3" rounded>Set</button>
                                </form>
                            </div>
                            <form action="/set-jam-bimbingan/{{ $details->email }}" method="POST">
                                @csrf
                                <!--    Jam Mulai   -->
                                <div>
                                    <h1 class="text-xl  leading-6 text-gray-900 mb-5">Jam Mulai</h1>
                                    <input type="time" name="jam_mulai" id="jam_mulai" value="{{ $jambimbingan->jam_mulai ?? ''  }}">
                                </div>
                                <!--    Jam Mulai   -->

                                <!--    Jam Selesai   -->
                                <div>
                                    <h1 class="text-xl  leading-6 text-gray-900 mb-5">Jam Selesai</h1>
                                    <input type="time" name="jam_selesai" id="jam_selesai" value="{{ $jambimbingan->jam_selesai ?? ''  }}">
                                </div>
                                <!--    Selesai   -->

                                <!--    Tombol Set   -->
                                <div>
                                    <h1 class="text-xl font-bold leading-6 text-gray-900 mb-5">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                                            Set Jam
                                        </button>
                                    </h1>
                                </div>
                                <!--    Tombol Set   -->
                            </form>
                            @endif

                        </div>

                        {{--  --}}

                    <hr class="my-6 border-t border-gray-300">

                    <div class="flex flex-col">
                        <span class="text-gray-700 uppercase font-bold tracking-wider mb-2"><h1>Antrian Bimbingan Mahasiswa</h1></span>
                    </div>
                    <div class="card-body pt-4 p-3">

                        @if($antrians!=null)
                            <table class="table-mahasiswas rounded table-striped  p-1 w-full" id="users-list">
                                <thead class="thead-light">
                                    <tr class="tr-mahasiswa p-5">
                                        <th class="py-2 xl:px-5 border-2 bg-gray-300 font-bold">Urutan</th>
                                        <th class="py-2 px-5 border-2 bg-gray-300 font-bold">Nama</th>
                                        <th class="py-2 px-5 border-2 bg-gray-300 font-bold">Status</th>
                                        <th class="py-2 px-5 border-2 bg-gray-300 font-bold">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $index = 0;
                                    @endphp
                                    @foreach ($antrians as $antrian)
                                    @php
                                        $index++;
                                    @endphp
                                    <tr>
                                        <td class="text-sm xl:text-base py-2 px-1 xl:px-5 border-2">{{ $index }}</td>
                                        <td class="text-sm xl:text-base py-2 px-2 xl:px-5 border-2">{{ $antrian->nama_mahasiswa }}</td>
                                        <td class="text-sm xl:text-base py-2 px-2 xl:px-5 border-2">{{ $antrian->status }}</td>
                                        @switch($antrian->status)
                                            @case('Menunggu')
                                                <td class="text-sm xl:text-base py-2 px-2 xl:px-5 border-2">
                                                    <a href="{{ url('set-proses').'/'.$antrian->id_antrian }}">
                                                        <button class="p-1 bg-sky-400 rounded">
                                                            Proses ✎
                                                        </button>
                                                    </a>
                                                </td>
                                                @break
                                            @case('Proses')
                                                <td class="text-sm xl:text-base py-2 px-2 xl:px-5 border-2">
                                                    <a href="{{ url('set-selesai').'/'.$antrian->id_antrian }}">
                                                        <button class="p-1 bg-green-400 rounded">
                                                            Selesai ✎
                                                        </button>
                                                    </a>
                                                </td>
                                                @break
                                            @case('Selesai')
                                            <td class="text-sm xl:text-base py-2 px-2 xl:px-5 border-2">
                                                <a href="{{ url('set-hapus').'/'.$antrian->id_antrian }}">
                                                    <button class="p-1 bg-red-400 rounded">
                                                        Hapus ✎
                                                    </button>
                                                </a>
                                            </td>
                                                @break
                                            @default

                                        @endswitch
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>

                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush
