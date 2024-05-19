@extends('layouts.app')
@section('title','Mahasiswas')
@section('content')

<div class="container-fluid py-4 ">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0"><span> <h1>🗿</h1></span>All Users </h5>
                        </div>
                        <div class="ms-auto my-auto mt-lg-0 mt-4">
                            <div class="ms-auto my-auto">
                                <a href="{{'/mahasiswa-add'}}" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Tambah Mahasiswa</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label>Show <select class="dataTable-selector"><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Cari" type="text"></div></div>
                            <div class="dataTable-container">

                                <!-- Show All Mahasiswa -->
                                <table class="m-5 b-2 max-w-full" id="users-list">
                                    <thead class="thead-light">
                                        <tr class="">
                                            <th data-sortable="" style="width: 20%;"><a href="#" class="font-bold border-2">ID</a></th>
                                            <th data-sortable="" style="width: 20%;"><a href="#" class="font-bold border-2">NAME</a></th>
                                            <th data-sortable="" style="width: 20%;"><a href="#" class="font-bold border-2">DOSBING 1</a></th>
                                            <th data-sortable="" style="width: 20%;"><a href="#" class="font-bold border-2">DOSBING 2</a></th>
                                            <th data-sortable="" style="width: 20%;"><a href="#" class="font-bold border-2">ACTION</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mahasiswas as $mahasiswa)
                                        <tr>
                                            <td class="text-sm px-2 xl:px-5 py-2 xl:py-3 border-2">{{ $mahasiswa->nim }}</td>

                                            <td class="text-sm px-2 xl:px-5 py-2 xl:py-3 border-2">{{ $mahasiswa->nama }}</td>

                                            <td class="text-sm px-2 xl:px-5 py-2 xl:py-3 border-2">
                                                @for ($i = 0; $i < count($dosens); $i++)
                                                @if ($dosens[$i]->email==$mahasiswa->dosbing1)
                                                    {{ $dosens[$i]->inisial_dosen }}
                                                @endif
                                                @endfor
                                            </td>
                                            <td class="text-sm px-2 xl:px-5 py-2 xl:py-3 border-2">
                                                @for ($i = 0; $i < count($dosens); $i++)
                                                @if ($dosens[$i]->email==$mahasiswa->dosbing2)
                                                    {{ $dosens[$i]->inisial_dosen }}
                                                @endif
                                                @endfor
                                            </td>

                                            <td class="text-sm px-2 xl:px-5 py-2 xl:py-3 border-2">
                                                <a href="#" class="mx-3 p-auto" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                                    <svg width="25px" height="25px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.144"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM10.95 17.51C10.66 17.8 10.11 18.08 9.71 18.14L7.25 18.49C7.16 18.5 7.07 18.51 6.98 18.51C6.57 18.51 6.19 18.37 5.92 18.1C5.59 17.77 5.45 17.29 5.53 16.76L5.88 14.3C5.94 13.89 6.21 13.35 6.51 13.06L10.97 8.6C11.05 8.81 11.13 9.02 11.24 9.26C11.34 9.47 11.45 9.69 11.57 9.89C11.67 10.06 11.78 10.22 11.87 10.34C11.98 10.51 12.11 10.67 12.19 10.76C12.24 10.83 12.28 10.88 12.3 10.9C12.55 11.2 12.84 11.48 13.09 11.69C13.16 11.76 13.2 11.8 13.22 11.81C13.37 11.93 13.52 12.05 13.65 12.14C13.81 12.26 13.97 12.37 14.14 12.46C14.34 12.58 14.56 12.69 14.78 12.8C15.01 12.9 15.22 12.99 15.43 13.06L10.95 17.51ZM17.37 11.09L16.45 12.02C16.39 12.08 16.31 12.11 16.23 12.11C16.2 12.11 16.16 12.11 16.14 12.1C14.11 11.52 12.49 9.9 11.91 7.87C11.88 7.76 11.91 7.64 11.99 7.57L12.92 6.64C14.44 5.12 15.89 5.15 17.38 6.64C18.14 7.4 18.51 8.13 18.51 8.89C18.5 9.61 18.13 10.33 17.37 11.09Z" fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!-- Show All Mahasiswa -->
                            </div>
                            <div class="dataTable-bottom">
                                <div class="dataTable-info">Showing 1 to {{ sizeof($mahasiswas) % 5 }} of {{ sizeof($mahasiswas) }} entries</div>
                                <nav class="dataTable-pagination" style="border: #252f40 solid 5px">
                                    <ul class="dataTable-pagination-list" style="border: 2px thick black !important;">

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer pt-3  ">

    </footer>
</div>
@endsection
