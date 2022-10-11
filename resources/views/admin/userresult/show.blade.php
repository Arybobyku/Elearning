<x-app-layout>
    @if (session('status'))
    <div class="card-body">
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    </div>
    @endif
    <div class="w-full px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-lg text-blueGray-700 pt-4">
                            Hasil Jawaban Dari {{ $answeres[0]->nama->name }}

                        </h3>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto p-8">

                @foreach ($answeres as $answere)

        <div class="col">
          <label for="firstName" class="form-label">{{ $loop->iteration}}. {{ $answere->kuis->soal}}</label>
        <div class="col">
          <input type="radio" id="opsi1" @if ($answere->answer==1)
          checked 
          @else
            disabled
          @endif>
          <label for="html">{{$answere->kuis->opsi1}}</label><br>
       
          <input type="radio" id="opsi2" @if ($answere->answer==2)
          checked 
          @else
            disabled
          @endif>
          <label for="css">{{$answere->kuis->opsi2}}</label><br>

          <input type="radio" id="opsi3" @if ($answere->answer==3)
          checked 
          @else
            disabled
          @endif>
          <label for="javascript">{{$answere->kuis->opsi3}}</label><br>

          <input type="radio" id="opsi4" @if ($answere->answer==4)
          checked 
          @else
            disabled
          @endif>
          <label for="javascript">{{$answere->kuis->opsi4}}</label>

        </div>
        </div>
        <br/>
        @endforeach

                
            </div>
            
        </div>


    </div>
  
</x-app-layout>
