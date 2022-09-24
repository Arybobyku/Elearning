@extends('../general/layouts/main')

@section('contents')

 <div class="flex flex-wrap px-16">
          <div class="w-full self-center ">
            <h1
              class="text-base text-center font-semibold md:text-xl lg:text-2xl"
            >
              Materi Belajar Nursing Management
            </h1>
            {{-- <h2 class="medium text-stone-800 mb-5">
              Developer & <span class="text-stone-800"> Video Editor</span>
            </h2> --}}
            <p class="light text-gray-600 mb-10">
            </p>
            {{-- <a
              href="{{ route('register') }}"
              class="text-base font-semibold text-white bg-cyan-900 py-3 px-9 rounded-full hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out"
              >Mulai Belajar Sekarang</a> --}}
          </div>
        </div>
          <div class="mt-4 grid gap-4 mx-16">
            <a href="isimateri"class="bg-white rounded overflow-hidden shadow-md px-4">
                <h3 class="pt-8 ">Bab 1</h3>
                <p class="block pb-4">Bedsite Teaching</p>
            </a>
          </div>
          <div class="mt-4 grid gap-4 mx-16">
            <a href="isimateri"class="bg-white rounded overflow-hidden shadow-md px-4">
                <h3 class="pt-8 ">Bab 2</h3>
                <p class="block pb-4">BOR</p>
            </a>
          </div>

          <div class="mt-4 grid gap-4 mx-16 ">
            <a href="#"class="bg-white rounded overflow-hidden shadow-md px-4">
                <h3 class="pt-8 ">Bab 3</h3>
                <p class="block pb-4">LOS</p>
            </a>
          </div>
          <div class="mt-4 grid gap-4 mx-16">
            <a href="#"class="bg-white rounded overflow-hidden shadow-md px-4">
                <h3 class="pt-8 ">Bab 4</h3>
                <p class="block pb-4">TOL</p>
            </a>
          </div>
          <div class="mt-4 grid gap-4 mx-16 pb-10">
            <a href="#"class="bg-white rounded overflow-hidden shadow-md px-4">
                <h3 class="pt-8 ">Bab 5</h3>
                <p class="block pb-4">Dokumentasi Keperawatan</p>
            </a>
          </div>
@endsection