@extends('../general/layouts/main')


@section('contents')
    <a href='/' class="text-md font-light text-white bg-slate-800 p-5 ml-4 mb-2 rounded-md hover:bg-slate-600">Kembali
    </a>
    <h1 class="text-2xl text-center font-bold">Perhitungan Bed Cccupancy Rate (BOR)</h1>
    <form method="post" action="/bor">
        @csrf
        <div class="flex flex-row m-16 gap-8 justify-center items-center">
            <div class="mb-6">
                <label for="harirawat" class="block mb-2 text-sm font-medium text-gray-900 ">Masukkan Jumlah Hari
                    Rawatan</label>
                <input type="number" id="harirawat" name="harirawat" value="{{ $harirawat }}"
                    class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-half p-2.5"
                    placeholder="" required>
            </div>
            <div class="mb-6">
                <label for="tempattidur" class="block mb-2 text-sm font-medium text-gray-900 ">Masukkan Jumlah Tempat
                    Tidur</label>
                <input type="number" id="tempattidur" name="tempattidur" value="{{ $tempattidur }}"
                    class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-half p-2.5"
                    placeholder="" required>
            </div>
            <div class="mb-6">
                <label for="hariwaktu" class="block mb-2 text-sm font-medium text-gray-900 ">Masukkan Jumlah Hari Persatuan
                    Waktu</label>
                <input type="number" id="hariwaktu" name="hariwaktu" value="{{ $hariwaktu }}"
                    class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-half p-2.5"
                    placeholder="" required>
            </div>

        </div>

        <div class="flex flex-row gap-8 justify-center items-center">

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>


        </div>

        <div class="flex flex-row m-8 gap-8 justify-center items-center">

            <div class="mb-6">
                <label for="hariwaktu" class="block mb-2 text-sm font-medium text-gray-900 ">Hasil</label>
                <input type="number" id="hasilJawaban" name="hasilJawaban" value="{{ $hasilJawaban }}"
                    class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-half p-2.5"
                    placeholder="" disabled>
            </div>


        </div>

    </form>
@endsection
