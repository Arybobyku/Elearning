@extends('../general/layouts/main')

@section('contents')
    <div class="pb-20">
        <div class="flex flex-wrap px-16">
            <div class="w-full self-center ">
                <h1 class="text-base font-semibold md:text-xl lg:text-2xl">
                    Forum Diskusi
                </h1>
                <p class="light text-gray-600 ">
                </p>
            </div>
        </div>

        
        <div class="lg:mx-16 my-8 mx-8 overflow-y-auto h-100 relative">
            @foreach ($diskusis as $diskusi)
            @if (Auth::user()->id == $diskusi->user->id)
            <div class="">
                <div class="relative  float-right">
                    <div class="bg-gray-100 ml-40 px-5 py-2 rounded-lg w-fit mb-4 lg:mr-50 align-right">
                        <p class="text-sm text-orange-600 text-right ">
                            {{ $diskusi->user->nickname }}
                        </p>
                        <p class="">
                            {{ $diskusi->komentar }}
                        </p>
                        <p class="text-sm text-slate-400 text-right">
                            {{ $diskusi->created_at }}
                        </p>
                    </div>
                </div>
            </div>
            @else
                <div class="bg-gray-100  mr-40 px-5 py-2 rounded-lg w-fit mb-3 lg:mr-50  ">
                    <p class="text-sm text-sky-600  right-0">
                        {{ $diskusi->user->nickname }}
                    </p>

                    <p class="">
                        {{ $diskusi->komentar }}
                    </p>
                    <p class="text-sm text-slate-400 text-right">
                        {{ $diskusi->created_at }}
                    </p>

                </div>
            @endif
        @endforeach
        </div>

        <div class="lg:mx-16 my-16 mx-8">
            <form method="post" action="diskusi">
                @csrf
                <textarea type="desc" id="komentar" name="komentar"
                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "
                    placeholder="Type text..." required></textarea>
                <button type="submit"
                    class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

            </form>
        </div>

    </div>
@endsection
