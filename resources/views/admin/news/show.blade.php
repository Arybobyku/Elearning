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
                            Detail Berita
                        </h3>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto p-8">
                <div class="mb-6">
                    <h1 class="text-3xl text-center">{{ $news->title }}</h1>
                </div>
                @if ($news->image)
                    <div class="grid m-6 place-items-center h-72 overflow-hidden">
                        <img src="{{ asset('/storage/' . $news->image) }}" class="rounded w-screen">

                    </div>
                @else
                    <div class="grid m-6 place-items-center">
                        <img src="https://source.unsplash.com/1200x600?forest" class="rounded">

                    </div>
                @endif
                <div class="mb-6">
                    <article class="trix-editor">
                        {!! $news->isi !!}
                    </article>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
