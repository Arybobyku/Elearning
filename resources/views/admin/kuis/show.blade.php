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
                            Kelola Kuis
                        </h3>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto p-4">
                <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Soal</label>
                    <input type="text" id="soal" value="{{ $kuis->soal }}" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="" disabled>
                </div>
                <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Jawaban</label>
                <input type="text" id="jawaban" value="{{ $kuis->jawaban }}" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " placeholder="" disabled>
                </div>
                <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Opsi 1</label>
                <input type="text" id="jawaban" value="{{ $kuis->opsi1 }}" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " placeholder="" disabled>
                </div> <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Opsi 2</label>
                <input type="text" id="jawaban" value="{{ $kuis->opsi2 }}" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " placeholder="" disabled>
                </div> <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Opsi 3</label>
                <input type="text" id="jawaban" value="{{ $kuis->opsi3 }}" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " placeholder="" disabled>
                </div>
                 <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Opsi 4</label>
                <input type="text" id="jawaban" value="{{ $kuis->opsi4 }}" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg " placeholder="" disabled>
                </div>

                
            </div>
            
        </div>


    </div>
  
</x-app-layout>
