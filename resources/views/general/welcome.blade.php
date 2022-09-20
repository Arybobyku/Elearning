@extends('../general/layouts/main')

@section('contents')
        <div class="flex flex-wrap">
          <div class="w-full self-center px-16 lg:w-1/2 lg:pl-32">
            <h1
              class="text-base font-semibold md:text-xl lg:text-2xl"
            >
              Selamat Datang, di Situs Belajar
              <span
                class="block text-3xl mt-5 mb-2 text-cyan-900 md:text-3xl lg:text-5xl"
              >
                Ariga Nursing Management</span  >
            </h1>
            {{-- <h2 class="medium text-stone-800 mb-5">
              Developer & <span class="text-stone-800"> Video Editor</span>
            </h2> --}}
            <p class="light text-gray-600 mb-10">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi
              natus ipsum at dolor minus laboriosam earum aspernatur accusamus,
              possimus ea totam. Labore, cumque. Maiores harum iste illum est,
              cum possimus.
            </p>
            <a
              href="{{ route('register') }}"
              class="text-base font-semibold text-white bg-cyan-900 py-3 px-9 rounded-full hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out"
              >Mulai Belajar Sekarang</a>
          </div>
          <div class="w-full self-end px-4 lg:max-w-lg">
            <div class="mt-10 lg:mt-9 lg:right-0">
              <img
                src='{{ asset('/images/arigawelcome.png') }}'
                alt="Me"
                class="max-w-full mx-auto"
              />
            </div>
          </div>
        </div>
        @endsection