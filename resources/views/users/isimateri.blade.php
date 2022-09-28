@extends('..general/layouts/main')

@section('contents')



 <div class=" px-16">
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
      </div>
@endsection
