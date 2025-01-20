@extends('layouts.errors.master')
@section('title', 'Error 404')
@section('content')
    <section id="404">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-center h-screen overflow-hidden">
                <div>
                    <img src="/assets/images/other/sad.png" alt="sad.png" class="mx-auto lg:w-auto w-24">

                    <div class="text-center max-w-lg mx-auto lg:-mt-16 -mt-12">
                        <h1 class="lg:text-[250px] md:text-[180px] text-[150px] h-fit font-black text-red-500">
                            404
                        </h1>

                        <p class="text-gray-800 font-semibold lg:-mt-16 -mt-8">Halaman yang ingin Anda buka saat ini tidak
                            tersedia.
                            Ini
                            mungkin karena halaman tersebut tidak ada atau telah dipindahkan.</p>
                    </div>

                    <a href="{{ route('home') }}"
                        class="uppercase block bg-red-500 px-6 py-2 mt-4 rounded mx-auto w-fit font-bold text-white">Kembali
                        ke
                        halaman
                        utama</a>
                </div>
            </div>
        </div>
    </section>
@endsection
