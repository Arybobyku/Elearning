@extends('users/layouts/main')

@section('contents')



 <div class="flex flex-wrap px-16">
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

          <div class="mt-4 grid gap-4 mx-16 py-20">
            <p class="font-light justify-between text-lg">
                           {!! $isimateri->isi !!} 

            </p>
          </div>
@endforeach
        </div>
                    <div class="p-4">
       {{ $isi_materis->links() }}
</div>
@endsection
