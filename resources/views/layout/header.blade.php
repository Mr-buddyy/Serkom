<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <!-- navbar -->
    <header>
        <!-- lg+ -->
        <div class="relative">
            <div class="relative px-4 mx-auto sm:px-6 lg:px-8">
                <nav class="flex items-center justify-between h-16 lg:h-20">
                    <button type="button" class="inline-flex p-2 text-black focus:text-white transition-all duration-200 rounded-md lg:hidden focus:bg-orange-600 hover:bg-orange-600">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                    <div class="hidden lg:flex lg:items-center lg:space-x-10">
                        <a href="/pilihanBeasiswa" title="" class="text-base font-medium  focus:text-orange-600 hover:text-orange-600"> Pilihan Beasiswa </a>
                        <a href="/daftar" title="" class="text-base font-medium focus:text-orange-600 hover:text-orange-600"> Daftar </a>
                        <a href="/hasil" title="" class="text-base font-medium focus:text-orange-600 hover:text-orange-600 "> Hasil </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- xs to lg -->
        <nav class="flex flex-col justify-between w-full max-w-xs min-h-screen px-4 py-10 bg-black sm:px-6 lg:hidden">
            <button type="button" class="inline-flex p-2 text-white transition-all duration-200 rounded-md focus:bg-gray-800 hover:bg-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="flex flex-col flex-grow h-full">
                <nav class="flex flex-col flex-1 mt-10 space-y-2">
                    <a href="/pilihanBeasiswa" title="" class="flex w-full py-2 font-medium text-white transition-all duration-200 focus:text-opacity-70 focus:text-orange-600 hover:text-orange-600"> Pilihan Beasiswa </a>
                    <a href="/daftar" title="" class="flex w-full py-2 font-medium text-white transition-all duration-200 focus:text-opacity-70 focus:text-orange-600 hover:text-orange-600"> Daftar </a>
                    <a href="/hasil" title="" class="flex w-full py-2 font-medium text-white transition-all duration-200 focus:text-opacity-70 focus:text-orange-600 hover:text-orange-600"> Hasil </a>
                </nav>
            </div>
        </nav>
    </header>
    <!-- navbar -->
    @yield('content')
    @include('layout.footer')