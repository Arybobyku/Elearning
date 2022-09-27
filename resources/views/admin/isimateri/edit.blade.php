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
                            Kelola Materi
                        </h3>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto">
                <form method="post" action="/dashboard/isimateri/{{ $isimateris->id }}">
                    @method('put')
                    @csrf
                <div class="mb-6">
                    <label for="id_materi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Judul Materi</label>
                   <select class="form-select" name="id_materi" id="id_materi">
                    @foreach ($judulmateri as $judulmateris)
                    <option value="{{ $judulmateris->id }}">{{ $judulmateris->name }}</option>
                    @endforeach
                   </select>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sub Bab Materi</label>
                    <input type="text" value="{{ $isimateris->sub_bab }}" id="sub_bab" name="sub_bab" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="" required>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Isi</label>
                     <input id="isi" type="hidden" name="isi">
                    <trix-editor input="isi">
                        {!!  old('isi', $isimateris->isi)  !!}
                    </trix-editor>
                </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
            
        </div>


    </div>
  
</x-app-layout>
