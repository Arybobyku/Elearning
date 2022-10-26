<x-app-layout>
    @if (session('status'))
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    @endif
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-lg text-blueGray-700">
                        Kelola Isian Materi
                    </h3>
                </div>

            </div>
            @if (session()->has('success'))
                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                    <p class="font-bold">Pesan Informasi</p>
                    <p class="text-sm">{{ session('success') }}</p>
                </div>
            @endif
            @if (session()->has('delete'))
                <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3" role="alert">
                    <p class="font-bold">Pesan Informasi</p>
                    <p class="text-sm">{{ session('delete') }}</p>
                </div>
            @endif
        </div>

        <a href="/dashboard/news/create"
            class="flex flex-wrap gap-3 bg-cyan-900 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded m-8 w-44">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Tambah Berita</a>
        <div class="block w-full overflow-x-auto px-2">

            <table class="items-center w-full bg-transparent border-collaps ">

                <th
                    class=" px-2 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-100 text-slate-500 border-gray-100">
                    #
                </th>
                <th
                    class="px-2 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-100 text-slate-500 border-gray-100">
                    Judul Berita
                </th>
                <th
                    class="px-2 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-100 text-slate-500 border-gray-100">
                    Isi
                </th>

                <th
                    class="px-2  align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-100 text-slate-500 border-gray-100">
                    Aksi
                </th>
                @foreach ($newss as $news)
                    <tr>
                        <td class="border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-2">
                            {{ $loop->iteration }}</td>
                        <td class="border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-2">
                            {{ $news->title }}
                        </td>
                        <td class="border-t-0 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-2">
                            {{ $news->excerpt }}
                        </td>
                        <td class="flex flex-auto">
                            <a href="/dashboard/news/{{ $news->slug }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 text-blue-700 hover:bg-cyan-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>
                            <div>
                                <a href="/dashboard/news/{{ $news->slug }}/edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-yellow-600 hover:bg-yellow-300">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </div>

                            <div>
                                <form action="/dashboard/news/{{ $news->slug }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class=""
                                        onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus?') ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-red-700 hover:bg-red-400">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </table>

        </div>

    </div>
    <div class="p-4">
       {{ $newss->links() }}
</div>

    </div>
</x-app-layout>
