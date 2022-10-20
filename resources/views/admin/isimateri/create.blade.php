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
                            Tambah Isi Materi
                        </h3>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto p-8">
                <form method="post" action="/dashboard/isimateri" enctype="multipart/form-data">
                    @csrf
                <div class="mb-6">
                    <label for="id_materi" class="block mb-2 text-sm font-medium text-gray-900">Judul Materi</label>
                   <select class="form-select" name="id_materi" id="id_materi">
                    @foreach ($judulmateris as $judulmateri)

                    <option value="{{ $judulmateri->id }}">{{ $judulmateri->name }}</option>

                    @endforeach
                   </select>
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Sub Bab Materi</label>
                    <input type="text" id="sub_bab" name="sub_bab" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="" required>
                </div>

                <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file</label>
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:placeholder-gray-400 @error('image') is-invalid @enderror" aria-describedby="file_input_help" id="image" name="image" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG (MAX. 800x400px).</p>
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-6">
                    <label for="youtube" class="block mb-2 text-sm font-medium text-gray-900 ">Link Youtube</label>
                    <input type="link" id="youtube" name="youtube" class="form-control bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="">
                </div>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Isi</label>
                     <input id="isi" type="hidden" name="isi">
                    <trix-editor input="isi"></trix-editor>
                </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
            
        </div>


    </div>
  
</x-app-layout>
