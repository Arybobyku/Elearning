@extends('../general/layouts/main')


@section('contents')
    <a href='/news' class="text-md font-light text-white bg-slate-800 p-5 ml-4 mb-2 rounded-md hover:bg-slate-600">Kembali
    </a>
            <div class="block w-full overflow-x-auto p-8">

    <div class="mb-6">
        <h1 class="text-3xl text-center">{{ $news->title }}</h1>
    </div>
    @if ($news->image)
        <div class="grid mx-40 my-10 place-items-center h-96 overflow-hidden">
            <img src="{{ asset('/storage/' . $news->image) }}" class="rounded w-screen">

        </div>
    @else
        <div class="grid mx-40 my-10 place-items-center">
            <img src="https://source.unsplash.com/1200x600?forest" class="rounded">

        </div>
    @endif
    <div class="m-6 text-base text-gray-800">
        <article class="trix-editor">
            {!! $news->isi !!}
        </article>
    </div></div>
@endsection
