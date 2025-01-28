@extends('be.layouts.main')

@push('title')
    Dashboard
@endpush

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="col-12">
                <div class="card card-md mb-3">
                    <div class="card-stamp card-stamp-lg">
                        <div class="card-stamp-icon bg-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-mood-smile">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.8 10.946a1 1 0 0 0 -1.414 .014a2.5 2.5 0 0 1 -3.572 0a1 1 0 0 0 -1.428 1.4a4.5 4.5 0 0 0 6.428 0a1 1 0 0 0 -.014 -1.414zm-6.19 -5.286l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993zm6 0l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993z" />
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="h1"> 🌴 Halo Ims, apakabar hari ini? mau buat hal menarik? tetap semangat ya!
                                    🌟</h3>
                                <div class="markdown text-secondary">
                                    Halo, {{ Auth::user()->name }}! 👋 Santai aja, kau tuh hebat kok! Kalau hari ini rasanya
                                    berat, inget aja semua perjalanan keren yang udah kau lewatin. Kadang hidup ngasih rem
                                    buat kita belajar, tapi kau pasti bisa gaspol lagi. Pelan-pelan aja, yang penting terus
                                    jalan. Semangat, kau luar biasa! 💪🔥"
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
