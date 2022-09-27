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
                            Kelola Akun
                        </h3>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                    <tr>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-100 text-slate-500 border-gray-100">
                            Name
                        </th>
                        <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-100 text-slate-500 border-gray-100">
                            Email
                        </th>
                        <th class=" align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-100 text-slate-500 border-gray-100">
                            Role
                        </th>
                        @if (Auth::user()->role==2)
                        <th class="border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-slate-100 text-slate-500 border-gray-100 lg:px-5">
                            Action
                        </th>
                        @endif

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                {{ $user->name }}
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                {{ $user->email }}
                            </td>
                            {{-- Role --}}
                            @if ($user->role==1)
                                <td class="text-xs font-bold">
                                    Admin
                                </td>
                            @else
                            <td class="text-xs">
                                    User
                            </td>
                            @endif

                            {{-- action --}}
                            @if (Auth::user()->role==2)
                            <td class="flex flex-row gap-1 p-4 align-items: center">
                                {{-- Role Action --}}
                                @if ($user->role==0)
                                <form action="{{ route('user.addToAdmin',  $user->id)}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <x-small-button class="bg-green-500">
                                        + Admin
                                    </x-small-button>
                                </form>
                                @else
                                <form action="{{ route('user.addToUser',  $user->id)}}" method="POST">
                                    @csrf
                                    @method('POST')
                                     <x-small-button class="bg-blue-500">
                                        + User
                                    </x-small-button>
                                </form>
                                @endif

                                {{-- Hapus User --}}
                                <form action="{{ route('user.deleteUser',  $user->id)}}" method="POST">
                                    @csrf
                                    @method('POST')
                                <x-small-button class="bg-red-600">
                                    <i class="fa fa-trash"></i>
                                </x-small-button>
                                </form>
                            </td>  
                            @endif 
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{ $users->links() }}

    </div>
</x-app-layout>
