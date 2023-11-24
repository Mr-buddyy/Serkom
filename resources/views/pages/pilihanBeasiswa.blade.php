@extends('layout.header')
@section('content')
<section class="py-10 overflow-hidden bg-gray-50 md:py-0 sm:py-16 2xl:py-16">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <!-- grid -->
        <div class="py-10 grid items-center grid-cols-1 md:grid-cols-2 gap-9">
            <!-- beasiswa 1 -->
            <!-- title -->
            <div>
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Beasiswa Akademik</h2>
                <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-600 md:mt-8">Beasiswa akademik adalah bentuk bantuan keuangan yang diberikan kepada siswa atau pelajar berprestasi untuk membantu membiayai pendidikan mereka. Beasiswa ini diberikan berdasarkan prestasi akademis atau keberhasilan di bidang-bidang tertentu, seperti olahraga, seni, atau kegiatan ekstrakurikuler. </p>

                <p class="mt-4 text-xl text-gray-600 md:mt-8">
                    <span class="relative inline-block">
                        <span class="absolute inline-block w-full bottom-0.5 h-2 bg-yellow-300"></span>
                        <span class="relative"> Ayo daftar Sekarang! </span>
                    </span>
                    <br class="block sm:hidden" /><a href="/daftar" title="" class="transition-all duration-200 text-sky-500 hover:text-sky-600 hover:underline">Daftar</a>
                </p>
            </div>
            <!-- end title -->
            <!-- ilustration -->
            <div class="relative">
                <img class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110" src="{{ asset('assets/img/Education-amico.svg') }}" alt="" />
            </div>
            <!-- end ilustration -->

            <!-- beasiswa 2 -->
            <!-- ilustration -->
            <div class="relative">
                <img class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110" src="{{ asset('assets/img/Winners-amico.svg') }}" alt="" />
            </div>
            <!-- end ilustration -->
            <!-- title -->
            <div>
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Beasiswa Non Akademik</h2>
                <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-600 md:mt-8">
                    Beasiswa non-akademik adalah bentuk bantuan keuangan yang diberikan kepada individu berdasarkan kriteria selain prestasi akademis. Berbeda dengan beasiswa akademik yang memfokuskan pada pencapaian akademis, beasiswa non-akademik dapat diberikan berdasarkan berbagai kriteria, seperti keberhasilan dalam olahraga, seni, keterlibatan dalam kegiatan sosial atau sukarela, dan faktor-faktor lain yang tidak terkait langsung dengan prestasi akademis.</p>

                <p class="mt-4 text-xl text-gray-600 md:mt-8">
                    <span class="relative inline-block">
                        <span class="absolute inline-block w-full bottom-0.5 h-2 bg-yellow-300"></span>
                        <span class="relative"> Ayo daftar Sekarang! </span>
                    </span>
                    <br class="block sm:hidden" /><a href="/daftar" title="" class="transition-all duration-200 text-sky-500 hover:text-sky-600 hover:underline">Daftar</a>
                </p>
            </div>
            <!-- end titile -->
        </div>
    </div>
</section>
@endsection