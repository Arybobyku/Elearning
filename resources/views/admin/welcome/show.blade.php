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
                            Detail Gambar
                        </h3>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto p-8">
                <div class="mb-6">
    <label for="sub_bab" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
    <input type="text" id="sub_bab" value="{{ $welcome->name }}" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="name@flowbite.com" disabled>
  </div>

  <div class="grid m-6 place-items-center">
    <label for="sub_bab" class="block mb-2 text-sm font-medium text-gray-900 ">Gambar</label>
    <img src="{{ asset('/storage/'.$welcome->image) }}" class="rounded max-h-96">

  </div>
  

                
            </div>
            
        </div>


    </div>
  
</x-app-layout>
