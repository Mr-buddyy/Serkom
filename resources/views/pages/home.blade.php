@extends('layout.header')
@section('content')
<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="flex flex-row justify-center">
        <h1 class="text-3xl font-bold">Daftar Beasiswa</h1>
    </div>
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative max-w-md mx-auto mt-8 md:mt-16">
            <div class="overflow-hidden bg-white rounded-md shadow-md">
                <div class="px-4 py-6 sm:px-8 sm:py-7">
                    <!-- card form -->
                    <form action="{{ route('submit.form') }}" method="POST">
                        @csrf
                        <div class="space-y-5">
                            <!-- field nama -->
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Masukkan Nama </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M17 20C18.1046 20 19.0454 19.0899 18.7951 18.0141C18.1723 15.338 16.0897 14 12 14C7.91032 14 5.8277 15.338 5.20492 18.0141C4.95455 19.0899 5.89543 20 7 20H17Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 11C14 11 15 10 15 7.5C15 5 14 4 12 4C10 4 9 5 9 7.5C9 10 10 11 12 11Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <input type="text" name="nama" id="" placeholder="Masukkan Nama" class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                </div>
                            </div>
                            <!-- end field nama -->
                            <!-- field email -->
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Masukkan Email </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M16 12C16 14.2091 14.2091 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8C14.2091 8 16 9.79086 16 12ZM16 12V13.5C16 14.8807 17.1193 16 18.5 16V16C19.8807 16 21 14.8807 21 13.5V12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21H16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <input type="email" name="email" id="" placeholder="Masukkan Email" class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                </div>
                            </div>
                            <!-- end field email -->
                            <!-- field nomor hp -->
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Nomor Hp </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M4.09253 5.63644C4.91414 12.8995 11.1005 19.0859 18.3636 19.9075C19.3109 20.0146 20.1346 19.3271 20.3216 18.3922L20.7004 16.4979C20.8773 15.6135 20.4404 14.7202 19.6337 14.3168L18.3983 13.6992C17.5886 13.2943 16.6052 13.5264 16.062 14.2507C15.7082 14.7224 15.14 15.01 14.5962 14.782C12.7272 13.9986 10.0014 11.2728 9.21796 9.40381C8.99002 8.86004 9.27761 8.2918 9.7493 7.93802C10.4736 7.39483 10.7057 6.41142 10.3008 5.60168L9.68316 4.36632C9.27982 3.55963 8.38646 3.12271 7.50207 3.29959L5.60777 3.67845C4.67292 3.86542 3.98537 4.68912 4.09253 5.63644Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <input type="tel" name="nomor_hp" id="" pattern="[0-9]{11,13}" placeholder="Masukkan nomor HP" class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                </div>
                            </div>
                            <!-- end field nomor hp -->
                            <!-- field semester saat ini -->
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Semester Saat ini </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M21 10L12 5L3 10L6 11.6667M21 10L18 11.6667M21 10V10C21.6129 10.3064 22 10.9328 22 11.618V16.9998M6 11.6667L12 15L18 11.6667M6 11.6667V17.6667L12 21L18 17.6667L18 11.6667" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <select name="semester" id="semester" class="block w-full py-4 pl-10 pr-4 text-black  transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600">
                                        <option value="" disabled selected class="text-gray-500">Semester saat ini</option>
                                        @for ($i = 1; $i <= 8; $i++) <option value="{{ $i }}">Semester {{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                            </div>
                            <!-- end field semester saat ini -->
                            <!--  field IPK Terakhir -->
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> IPK Terakhir </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M9 17H12M9 9H15M9 13H15M10 2H14M7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <input type="text" name="ipk" id="ipk" placeholder="IPK terakhir" class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                </div>
                            </div>
                            <!-- end field IPK Terakhir -->
                            <!--  field Pilih Beasiswa -->
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Pilih Beasiswa </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <circle cx="221.091" cy="174.545" r="11.636"></circle>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <circle cx="290.909" cy="174.545" r="11.636"></circle>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M418.909,108.218V34.909c0-5.818-4.655-10.473-9.309-11.636L258.327,0c-1.164,0-2.327,0-3.491,0L103.564,23.273 c-5.818,1.164-10.473,5.818-10.473,11.636c0,5.818,4.655,10.473,9.309,11.636l37.236,5.818V128 c0,23.273,8.145,77.964,9.309,79.127c2.327,19.782,10.473,38.4,22.109,53.527l2.327,3.491c19.782,24.436,50.036,38.4,82.618,38.4 c32.582,0,61.673-13.964,82.618-38.4l2.327-3.491c12.8-15.127,19.782-33.745,22.109-52.364c0,0,3.491-22.109,5.818-44.218 c1.164-5.818-3.491-11.636-10.473-12.8s-11.636,3.491-12.8,10.473c-2.327,20.945-5.818,43.055-5.818,43.055 c-1.164,15.127-8.146,29.091-17.455,40.727L320,249.018c-15.127,19.782-38.4,30.255-64,30.255c-25.6,0-48.873-10.473-64-30.255 l-2.327-3.491c-9.309-11.636-16.291-25.6-17.455-41.891c0,0-9.309-54.691-9.309-76.8V55.855l90.764,13.964 c1.164,0,1.164,0,2.327,0s1.164,0,2.327,0l90.764-13.964v51.2c-48.873,10.473-108.218,11.636-161.745,4.655 c-5.818-1.164-12.8,3.491-12.8,9.309c-1.164,5.818,3.491,12.8,9.309,12.8c23.273,3.491,46.545,4.655,70.982,4.655 c37.236,0,75.636-3.491,108.218-11.636c4.655-1.164,9.309-5.818,9.309-11.636V52.364l23.273-3.491v59.345 C388.655,111.709,384,119.855,384,128c0,12.8,10.473,23.273,23.273,23.273c12.8,0,23.273-10.473,23.273-23.273 C430.545,119.855,425.891,111.709,418.909,108.218z M256,46.545l-74.473-11.636L256,23.273l74.473,11.636L256,46.545z"></path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M407.273,342.109l-79.127-16.291c-3.491-1.164-6.982,0-9.309,2.327l-47.709,39.564c-8.146,6.982-20.945,6.982-30.255,0 c0,0-1.164,0-1.164-1.164l-24.436-16.291c-5.818-3.491-12.8-2.327-16.291,3.491s-2.327,12.8,3.491,16.291l23.273,16.291 c5.818,4.655,11.636,6.982,17.455,9.309v58.182c0,6.982,4.655,11.636,11.636,11.636s11.636-4.655,11.636-11.636v-58.182 c6.982-1.164,12.8-4.655,18.618-9.309l43.055-36.073l73.309,15.127c16.291,3.491,27.927,17.455,27.927,33.745v77.964 c0,6.982-4.655,11.636-11.636,11.636H93.091c-6.982,0-11.636-4.655-11.636-11.636v-77.964c0-16.291,11.636-31.418,27.927-33.745 l79.127-16.291c5.818-1.164,10.473-6.982,9.309-13.964c-1.164-5.818-6.982-10.473-13.964-9.309l-79.127,16.291 c-26.764,5.818-46.545,29.091-46.545,57.018v77.964c0,19.782,15.127,34.909,34.909,34.909h325.818 c19.782,0,34.909-15.127,34.909-34.909v-77.964C453.818,371.2,434.036,346.764,407.273,342.109z"></path>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M267.636,221.091h-23.273c-6.982,0-11.636,4.655-11.636,11.636s4.655,11.636,11.636,11.636h23.273 c6.982,0,11.636-4.655,11.636-11.636S274.618,221.091,267.636,221.091z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <select name="beasiswa" id="beasiswa" class="block w-full py-4 pl-10 pr-4 text-black  transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600">
                                        <option value="" disabled selected>Pilihan Beasiswa</option>
                                        <option value="akademik">Beasiswa Akademik</option>
                                        <option value="non-akademik">Beasiswa Non-Akademik</option>
                                    </select>
                                </div>
                            </div>
                            <!--  end field Pilih Beasiswa -->

                            <!--  field Upload Berkas -->
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Upload Berkas Syarat </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M7 16H6C4.89543 16 4 15.1046 4 14V7C4 5.89543 4.89543 5 6 5H18C19.1046 5 20 5.89543 20 7V14C20 15.1046 19.1046 16 18 16H17M12 20V9M12 9L15 12M12 9L9 12" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <input type="file" name="berkas" id="berkas" placeholder="Enter email to get started" class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                                </div>
                            </div>
                            <!-- end field Upload Berkas -->
                            <!-- button konfirmasi -->
                            <div class="flex flex-row mx-auto gap-5">
                                <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold transition-all duration-200 border rounded-md focus:outline-none hover:bg-blue-700 hover:text-white focus:bg-blue-700">
                                    Batal
                                </button>
                                <button type="submit" id="submitBtn" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none hover:bg-blue-700 focus:bg-blue-700">
                                    Daftar
                                </button>
                            </div>
                            <!-- end button konfirmasi -->
                        </div>
                    </form>
                    <!-- end card form -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection