@extends('../general/layouts/main')


@section('contents')
    @if ($newss->count())
        <div class="grid grid-cols-1 mb-10 mx-24 w-lg rounded overflow-hidden shadow-lg">

            <!--Card 1-->
            @if ($newss[0]->image)
                <div class="lg:h-96 overflow-hidden">
                    <img src="{{ asset('/storage/' . $newss[0]->image) }}" class="w-full">

                </div>
            @else
                <img class="w-max flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                    src='https://source.unsplash.com/1200x400?forest'>
            @endif
            <div class=" lg:border-gray-400 bg-white rounded-b m-6 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <div class="text-gray-900 font-bold text-xl mb-2">{{ $newss[0]->title }}</div>
                    <p class="text-gray-700 text-base">{{ $newss[0]->excerpt }}</p>
                </div>
                <div class="text-sm">
                    <p class="text-gray-900 leading-none">Last Update</p>
                    <p class="text-gray-600">{{ $newss[0]->created_at->diffForHumans() }}</p>
                </div>
                <div class=" pt-4 pb-2">
                    <a href="/article/{{ $newss[0]->slug }}"
                        class="inline-block bg-cyan-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Read
                        More</a>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 p-20">
            @foreach ($newss->skip(1) as $news)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    @if ($news->image)
                        <div class="place-items-center h-48 overflow-hidden">

                            <img src="{{ asset('/storage/' . $news->image) }}" class="w-full">
                        </div>
                    @else
                        <img class="w-full" src="https://source.unsplash.com/1200x600?forest" alt="Sunset in the mountains">
                    @endif

                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $news->title }}</div>
                        <p class="text-gray-700 text-sm">
                            {{ $news->excerpt }}
                        </p>
                    </div>
                    <div class="pt-4 pb-2 px-6">
                        <a href="/article/{{ $news->slug }}"
                            class="inline-block bg-cyan-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Read
                            More</a>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="p-4">
            {{ $newss->links() }}
        </div>
    @else
        <p class="text-center text-3xl text-slate-700 font-sans p-40"> Belum Ada Postingan</p>
    @endif
@endsection
