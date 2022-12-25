@extends('../general/layouts/main')

@section('contents')
    <div class="flex flex-wrap mb-20">
        <div class="w-full self-center px-16 lg:w-1/2 lg:pl-32">
            <h1 class="text-base font-semibold md:text-xl lg:text-2xl">
                Selamat Datang, di Situs Belajar
                <span class="block text-3xl mt-5 mb-2 text-cyan-900 md:text-3xl lg:text-5xl">
                    Ariga Nursing Management</span>
            </h1>
            <br>
            {{-- <h2 class="medium text-stone-800 mb-5">
              Developer & <span class="text-stone-800"> Video Editor</span>
            </h2> --}}
            {{-- <p class="light text-gray-600 mb-10">
                Mulai belajar manajemen kepearawatan dengan terarah sekarang
            </p> --}}
            @if (Auth::user())
                <a href="{{ route('academies') }}"
                    class="text-base font-semibold text-white bg-cyan-900 py-3 px-9 rounded-full hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out">
                    Mulai Belajar Sekarang</a>
            @else
                <a href="{{ route('register') }}"
                    class="text-base font-semibold text-white bg-cyan-900 py-3 px-9 rounded-full hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out">
                    Mulai Belajar Sekarang</a>
            @endif

        </div>
        @foreach ($landingimages as $landingimage)
            <div class="w-full self-end px-4 lg:max-w-lg">
                <div class="mt-10 lg:mt-9 lg:right-0">
                    <img src="{{ asset('storage/' . $landingimage->image) }}" alt="Ariga Nursing Management"
                        class="object-cover object-center  h-96 overflow-hidden w-96 mx-auto" />
                </div>
            </div>
        @endforeach
    </div>
    <!-- Display Container (not part of component) START -->

    <div class="flex flex-wrap bg-slate-200 p-16 min-w-full">

        <div class="w-full self-center lg:w-2/3">
            <div class="w-full relative flex items-center justify-center">
                <button aria-label="slide backward"
                    class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                    id="prev">
                    <svg class="dark:text-gray-900" width="30" height="30" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="slider"
                        class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">


                        @foreach ($welcomes as $welcome)
                            <a class="flex flex-shrink-0 relative w-full sm:w-auto" href="/academies/materi">
                                <img src="{{ asset('storage/' . $welcome->image) }}" alt="sitting area"
                                    class="object-cover object-center h-96 overflow-hidden w-60" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    {{-- <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white ">BOR</h2> --}}
                                    <div class="flex h-full items-end pb-6">
                                        <h3 class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white ">
                                            {{ $welcome->name }}
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
                <button aria-label="slide forward"
                    class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                    id="next">
                    <svg class="dark:text-gray-900" width="30" height="30" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full self-center px-8 lg:w-1/3">
            <h1 class="text-base font-semibold md:text-xl lg:text-2xl text-gray-800 mb-8">
                Materi Nursing Management
            </h1>
            {{-- <h2 class="medium text-stone-800 mb-5">
              Developer & <span class="text-stone-800"> Video Editor</span>
            </h2> --}}
            <p class="light text-gray-600 mb-10">
                Kurikulum disusun oleh Tim Ariga Nursing Management dan pelaku industri di bidang Keperawatan. Pengguna
                dipersiapkan untuk mengetahui seputar manajemen keperawatan sesuai standar.
            </p>
        </div>

        <section class="my-5">
            <div class="text-center py-8">
                <h2 class="font-semibold text-3xl text-teal-800 mb-2">Indikator Pelayanan Rumah Sakit</h2>
                <p class="light text-gray-600 mb-10">
                    Gunakan perhitungan untuk mempermudah kamu menghitung BOR, ALOS, dan TOI
                </p>
                <div class="mt-3 gap-2 md:flex">
                    <div>
                        <a href="/bor"
                            class="text font-semibold text-white bg-cyan-900 py-3 px-9 rounded-md hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out">
                             Perhitungan BOR</a>
                    </div>
                    <div>
                        <a href="/alos"
                            class="text-base font-semibold text-white bg-cyan-900 py-3 px-9 rounded-md hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out">
                            Perhitungan ALOS</a>
                    </div>
                    <div>
                        <a href="/toi"
                            class="text-base font-semibold text-white bg-cyan-900 py-3 px-9 rounded-md hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out">
                            Perhitungan TOI</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- Inner -->
    <section id="about" class="pt-20 pb-16 bg-white">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-3xl text-teal-700 mb-2">Tentang Kami</h4>
            <p class="font-medium text-md text-black"></p>
        </div>

        <div class="lg:flex justify-center sm:flex flex-wrap">
            <div class="w-full self-center lg:w-1/2">
                <h2 class="medium text-stone-800 mb-5">
                    Ariga Nursing Management
                </h2>
                <p class="light text-gray-600 mb-10">
                    Webiste ini dibangun untuk membantu mahasiswa hingga perawat yang sudah bekerja agar dapat mendapatkan
                    materi seputar nursing management secara gratis
                </p>
                <a href="https://wa.me/6285276536798"
                    class="text-base font-semibold text-white bg-slate-800 py-3 px-9 rounded-full hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out">Hubungi
                    Kami</a>
            </div>
            <div class="max-w-sm w-full px-4">
                <div class="mt-10">
                    <img src="{{ asset('/images/me.jpeg') }}" alt="Me"
                        class="object-none object-center rounded-full" />
                </div>
            </div>
        </div>
        </div>

    </section>

    <!-- Display Container (not part of component) END -->
@endsection
