@extends('../general/layouts/main')

@section('contents')

<div class="mb-5">
 
<h3 class=" font-medium text-center text-2xl ">Kuis Ariga Nursing Management</h3>
<a href='/academies' class="text-md font-light text-white bg-slate-500 p-5 ml-4 mb-2 rounded-sm hover:bg-slate-700">Kembali
  </a>
      <div class="m-8 p-8 font-light lg:pl-32 bg-slate-100 rounded shadow-xl">
        @if ($user_result_count>=1)
    <div class="container py-5 center">
    <center>
        <img src="{{ asset('/images/doneimage.svg') }}" alt="Done image" class="img-fluid center"
            style="height: 400px" />
        <div class="container py-4">
            <h1 class="text-xl font-medium">Kamu Telah Menyelesaikan Kuis</h1>

        </div>
@else
        <form class="needs-validation"  method="POST" action="{{ Route('insertKuis') }}">
          @csrf
          @method('POST')
            <div>
              @foreach ($kuiss as $kuis)
              <div class="col">
                <label for="soal  " class="form-label">{{ $loop->iteration}}. {{ $kuis->soal}}</label>
              <div class="col">
                <input type="radio" id="opsi1" name="jawaban{{$loop->iteration}}" value="1" required>
                <label for="opsi1">{{$kuis->opsi1}}</label><br>
  
                <input type="radio" id="opsi2" name="jawaban{{$loop->iteration}}" value="2" required>
                <label for="opsi2">{{$kuis->opsi2}}</label><br>
  
                <input type="radio" id="opsi3" name="jawaban{{$loop->iteration}}" value="3" required>
                <label for="opsi3">{{$kuis->opsi3}}</label><br>
  
                <input type="radio" id="opsi4" name="jawaban{{$loop->iteration}}" value="4" required>
                <label for="opsi4">{{$kuis->opsi4}}</label>

                <input hidden name="kusionerId{{$loop->iteration}}" value="{{$kuis->id}}" required>
              </div>
              </div>
              <br/>
              @endforeach
  
            <hr class="my-4">
            <input hidden id="opsi3" name="jumlah_soal" value="{{$kuiss->count()}}">
            <button  class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"type="submit">Kirim Jawaban</button>
            </div>
        </form>
      </div>
      @endif
    </div>
@endsection