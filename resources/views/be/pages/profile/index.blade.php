@extends('be.layouts.main')

@push('title')
    Dashboard
@endpush

@push('pageHeader')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Profileku
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endpush
@section('content')
    <div class="container-xl mt-3">
        @if (optional($profile)->exists)
            <!-- Jika ada data -->
            <div class="card">
                <!-- Card Status Top -->
                <div class="card-status-top bg-green"></div>
                <!-- Card Header dengan Navigasi -->
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('profile.index') }}">Profil</a>
                        </li>
                        <li class="nav-item">
                            <button id="editProfileLink" class="nav-link">
                                <i class="ti ti-pencil icon"></i>
                                Edit
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table mb-0 table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="w-25">Nama</th>
                                        <td class="w-75">{{ Auth::user()->name }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="w-25">Email</th>
                                        <td class="w-75">{{ Auth::user()->email }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="w-25">No telp</th>
                                        <td class="w-75">{{ Auth::user()->phone ? Auth::user()->phone : '-' }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="w-25">Alamat</th>
                                        <td class="w-75">{{ Auth::user()->address ? Auth::user()->address : '-' }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="w-25">Bio</th>
                                        <td class="w-75">{{ Auth::user()->bio ? Auth::user()->bio : '-' }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="w-25">Introduction</th>
                                        <td class="w-75">
                                            {{ Auth::user()->introduction ? Auth::user()->introduction : '-' }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="w-25">Hero Image</th>
                                        <td class="w-75">
                                            <div style="border: 1px solid #9e9e9e; display: inline-block;" class="rounded">
                                                <img src="{{ asset('storage/' . Auth::user()->profile_image) ? asset('storage/' . Auth::user()->profile_image) : '-' }}"
                                                    alt="Blog Image"
                                                    style="max-width: auto; max-height: 250px; object-fit: cover;"
                                                    class="rounded">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="w-25">File Resume</th>
                                        <td class="w-75">
                                            @if (Auth::user()->resume_file)
                                                <iframe src="{{ asset('storage/' . Auth::user()->resume_file) }}"
                                                    width="100%" height="400px" frameborder="0">
                                                </iframe>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <th scope="row" class="w-25">GitHub</th>
                                        <td class="w-75">
                                            {{ Auth::user()->github_url ? Auth::user()->github_url : '-' }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="w-25">LinkedIn</th>
                                        <td class="w-75">
                                            {{ Auth::user()->linkedin_url ? Auth::user()->linkedin_url : '-' }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row" class="w-25">Instagram</th>
                                        <td class="w-75">
                                            {{ Auth::user()->instagram_url ? Auth::user()->instagram_url : '-' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        @else
            <!-- Jika tidak ada data -->
            <div class="card ">
                <div class="card-status-top bg-danger"></div>
                <div class="container-xl d-flex flex-column justify-content-center">
                    <div class="empty">
                        <!-- Gambar Ilustrasi -->
                        <div class="empty-img">
                            <img src="{{ asset('be/static/illustrations/undraw_no_data_re_kwbl.svg') }}"
                                style="width: 200px; height: auto;" alt="No Data">
                        </div>

                        <!-- Pesan Tidak Ada Data -->
                        <p class="empty-title mt-0">Belum ada data profile</p>
                        <p class="empty-subtitle text-secondary">
                            Harap tambahkan data terlebih dahulu
                        </p>

                        <!-- Tombol Tambah Data -->
                        <div class="empty-action mt-3">
                            <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                data-bs-target="#modalAdd">
                                <i class="ti ti-plus icon"></i>
                                Tambah Data Profil
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    {{-- @include('be.pages.profile.modalAdd') --}}
@endsection


@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('editProfileLink').addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah navigasi langsung

                Swal2.fire({
                    title: 'Konfirmasi Edit Profil',
                    text: 'Apakah Anda yakin ingin mengedit profil?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Lanjutkan',
                    cancelButtonText: 'Batal',
                    allowOutsideClick: false, // Menghindari penutupan dengan klik di luar
                    allowEscapeKey: false // Menghindari penutupan dengan tombol Esc
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('profile.edit', Auth::user()->id) }}";
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let successMessage = '{{ session('success') }}';
            if (successMessage) {
                Swal2.fire({
                    icon: "success",
                    title: "Success!",
                    text: successMessage,
                    showConfirmButton: false,
                    timer: 1500
                });
            }

            @if ($errors->any())
                Swal2.fire({
                    icon: "error",
                    title: "Terjadi Kesalahan",
                    html: `
                  @foreach ($errors->all() as $error)
                      <p>{{ $error }}</p>
                  @endforeach
              `,
                    showConfirmButton: true,
                }).then(() => {
                    window.location.reload();
                });
            @endif
        });
    </script>
@endpush
