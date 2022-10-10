@extends('..general/layouts/main')

@section('contents')



 <div class=" px-16"></div>
       

<div class="flex justify-between">
<div class="flex justify-start">
             {{-- @if($isi_materis->previ())
   <a href='/academies/materi/' class="text-xl font-light text-white bg-slate-500 p-4 mr-2 mb-2 rounded-sm hover:bg-slate-700">Kembali Ke Daftar Materi
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
    </svg>
  </a> --}}

             @if($isi_materis->onFirstPage())

  <a href='/academies/materi/{{ $prev }}' class="text-xl font-light text-white bg-slate-500 p-4 mr-2 mb-2 rounded-sm hover:bg-slate-700">Kembali Materi Sebelumnya
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
</svg>


  </a>

      @endif
</div>
<div class="flex justify-end">

       @if($isi_materis->onLastPage())
  
<a href='/academies/materi/{{ $next }}' class="text-xl font-light text-white bg-slate-500 p-4 mr-2 mb-2 rounded-sm hover:bg-slate-700">Lanjut Materi Selanjutnya
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
</svg>
  </a>
      @endif

</div>
</div>
       
           
            @foreach($isi_materis as $isimateri)

          <div class="w-full self-center ">


            <h1
              class="text-base text-left font-bold md:text-xl lg:text-2xl"
            >
            </h1>
            <h3
              class="text-base text-center font-semibold md:text-xl lg:text-2xl mt-4"
            >
             {{ $isimateri->sub_bab }} 
            </h3>
        </div>



    @if ($isimateri->image)

  <div class="grid m-6 place-items-center">
      
    <img class="max-h-96" src="{{ asset('storage/'.$isimateri->image) }}" >

  </div>
    @endif

          <div class="mt-4 mx-16 py-16">
            <article class="font-light text-center text-lg">
                           {!! $isimateri->isi !!} 

            </article>
          </div>
    @if ($isimateri->youtube)
    <div class="grid m-6 place-items-center">
    <iframe width="640" height="480"
      src={{ 'https://www.youtube.com/embed/'. $isimateri->youtube }}>
      </iframe>
  </div>
   @endif

@endforeach
        </div>
      <div class="p-4">
            {{ $isi_materis->links() }}
            {{ $isi_materis->nextPageUrl()}}
      </div>

@endsection
