@extends('../general/layouts/main')

@section('contents')
    <div class="flex flex-wrap px-16">
        <div class="w-full self-center ">
            <h1 class="text-base font-semibold md:text-xl lg:text-2xl">
                Belajar Nursing Management
            </h1>
                @if (session()->has('success'))
                <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
                <p class="font-bold">Pesan Informasi</p>
                <p class="text-sm">{{ session('success') }}</p>
                </div>
                @endif
            <p class="light text-gray-600 mb-10">
            </p>
            {{-- <a
              href="{{ route('register') }}"
              class="text-base font-semibold text-white bg-cyan-900 py-3 px-9 rounded-full hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out"
              >Mulai Belajar Sekarang</a> --}}
        </div>
    </div>

    <div class="mt-8 grid grid-cols-2 gap-4 mx-16 pb-20">
        <a href="/academies/materi" class="bg-green-100 rounded overflow-hidden shadow-md p-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
            </svg>
            <h3 class="pt-8 ">Materi</h3>
            <p class="block pb-4">Mulai Kelas Sekarang</p>

        </a>


        <a href="/academies/kuis" class="bg-yellow-100 rounded overflow-hidden shadow-md p-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
            </svg>

            <h3 class="pt-8">Kuis</h3>
            <p class="block pb-4">Selesaikan Materi dan Isi Kuis</p>
        </a>

        <div class="bg-red-100 rounded overflow-hidden shadow-md p-4">
            <a href="diskusi">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                </svg>

                <h3 class="pt-8">Forum Diskusi </h3>
                <p class="block pb-4">Berikan Pendapat dan Komentar mu</p>
            </a>
        </div>

        </div>

    </div>
@endsection
