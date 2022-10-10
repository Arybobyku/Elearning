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
                        <h3 class="font-semibold text-lg text-blueGray-700">
                            Tambah Soal Kuis
                        </h3>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto p-8">
                <form method="post" action="/dashboard/kuis">
                    @csrf
                <div class="mb-6">
                    <label for="soal" class="block mb-2 text-sm font-medium text-gray-900 ">Soal</label>
                    <input type="text" id="soal" name="soal" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="jawaban" class="block mb-2 text-sm font-medium text-gray-900">Jawaban</label>
                   <select class="form-select" name="jawaban" id="jawaban">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                   </select>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Opsi 1</label>
                    <input type="text" id="opsi1" name="opsi1" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Opsi 2</label>
                    <input type="text" id="opsi2" name="opsi2" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Opsi 3</label>
                    <input type="text" id="opsi3" name="opsi3" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Opsi 4</label>
                    <input type="text" id="opsi4" name="opsi4" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="" required>
                </div>


  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
            
        </div>


    </div>
  
</x-app-layout>
