@extends('..general/layouts/main')

@section('contents')
    <div class="my-10 mx-3"> <a href='/academies/materi'
            class="text-md font-light text-white bg-slate-500 p-5 mb-2 rounded-md hover:bg-slate-700">Kembali
        </a></div>


    <div class="flex justify-between">

        <div class="flex justify-start">
            {{-- @if ($isi_materis->previ())
   <a href='/academies/materi/' class="text-xl font-light text-white bg-slate-500 p-4 mr-2 mb-2 rounded-sm hover:bg-slate-700">Kembali Ke Daftar Materi
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
    </svg>
  </a> --}}

            @if ($isi_materis->onFirstPage())
                <a href='/academies/materi/{{ $prev }}'
                    class="text-xl font-light text-white bg-slate-500 p-4 mr-2 mb-2 rounded-sm hover:bg-slate-700">Kembali
                    Materi Sebelumnya
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>


                </a>
            @endif
        </div>
        <div class="flex justify-end">

            @if ($isi_materis->onLastPage())
                <a href='/academies/materi/{{ $next }}'
                    class="text-xl font-light text-white bg-slate-500 p-4 mr-2 mb-2 rounded-sm hover:bg-slate-700">Lanjut
                    Materi Selanjutnya
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            @endif

        </div>
    </div>


    @foreach ($isi_materis as $isimateri)
        <div class="w-full self-center grid grid-cols-3 gap-4 ">
            <h1 class="text-base text-left font-bold md:text-xl lg:text-2xl">
            </h1>
            <h3 class="text-base text-center font-semibold md:text-xl lg:text-2xl mt-4">
                {{ $isimateri->sub_bab }}
            </h3>

        </div>



        @if ($isimateri->image)
            <div class="grid m-6 place-items-center">

                <img class="max-h-96" src="{{ asset('storage/' . $isimateri->image) }}">

            </div>
        @endif
        <div class="mt-4 mx-16 py-16">

            <div class="sm:flex flex-warp md:grid grid-cols-6 gap-6">

                <div class="p-2 mx-auto outline outline-2 rounded-md outline-slate-500 shadow-md">
                    <p class="text-center mb-2 text-xl">List Judul Sub Bab</p>
                    @foreach ($list_materis as $key=> $listmateri)
                        <a href="/academies/materi/{{ $listmateri->id_materi }}?page={{$key+1}}" class="text-xs"> {{ $listmateri->sub_bab }}</a>
                    @endforeach
                    
                </div>
                <div class="col-span-5">
                    <article class="font-light justify-between text-lg">
                        <div class="trix-editor">
                            {!! $isimateri->isi !!}
                        </div>
                    </article>
                </div>
            </div>
            @if ($isimateri->youtube)
                <div class="grid m-6 place-items-center">
                    <iframe width="640" height="480" src={{ 'https://www.youtube.com/embed/' . $isimateri->youtube }}>
                    </iframe>
                </div>
            @endif
    @endforeach
    </div>
    <div class="p-4">
        {{ $isi_materis->links() }}
    </div>
@endsection
