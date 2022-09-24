<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  @vite('resources/css/app.css')
</head>
<body>
      <!-- Header Section Start -->
<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
<div class="container">
  <div class="flex items-center justify-between relative">
    <div class="px-4">
            <a href="#home" class="font-bold text-lg text-cyan-900 block py-6">Ariga Nursing Management</a>
    </div>
             @if (Route::has('login'))
            @auth
    <div class="lg:pl-[400px]">

            <button id="profilenav" type="button" class="block">
            <span class="text-base text-black py-2 mx-8 hover:text-cyan-900">{{ Auth::user()->nickname }}</span>
            </button>
            <nav id="nav-profile" class="hidden absolute py-5 lg:mr-52 md:mr-36 bg-white shadow-lg rounded-lg max-w-[150px] w-full right-4 top-full ">
            <ul class="block">
            <li class="group">
               <a href="#" class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Profile</a>     
            </li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <li class="group">
               <a href="href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"" class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Log Out</a>     
            </li>
            </form> 
        </ul>
      </nav>
    </div>

            @else
    <div class="lg:pl-[550px]">
            
               <a href="{{ route('login') }}" class="text-base text-black py-2 mx-8 hover:text-cyan-900">Login</a>  
    </div>

                    @endauth
                    
                    @endif

    <div class="flex items-center right-4">
      <button id="hamburger" name="hamburger" type="button" class="block absolute right-6 lg:hidden">
        <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
        <span class="hamburger-line transition duration-500 ease-in-out"></span>
        <span class="hamburger-line transition duration-500 ease-in-out origin-top-left "></span>
      </button>
      <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
        <ul class="block lg:flex">
            <li class="group">
               <a href="/" class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Beranda</a>     
            </li>
            <li class="group">
               <a href="/about" class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Tentang</a>     
            </li>
            <li class="group">
               <a href="/about" class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Berita</a>     
            </li>
            @if (Route::has('login'))
            @auth
             <li class="group">
               <a href="/academies" class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Akademi</a>     
            </li>
            @else
@endauth
                    @endif
           
        </ul>
      </nav>
    </div>
  </div>
</div>
</header>
      <div class="container pt-32">
        @yield('contents')
      </div>
    
 @vite('resources/js/script.js')
  <!-- Header Section End -->
  
          <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-100">
      <div class="flex flex-row justify-between mx-auto">
    <button type="button" class="bg-gray-800 text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-red-700 hover:text-white px-3">
      <div class="flex flex-row align-middle">
        <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
        </svg>
        <p class="ml-2">Prev</p>
      </div>
    </button>
    <button type="button" class="bg-gray-800 text-white rounded-r-md py-2 border-l border-gray-200 hover:bg-red-700 hover:text-white px-3">
      <div class="flex flex-row align-middle">
        <span class="mr-2">Next</span>
        <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </div>
    </button>
  </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022.  All Rights Reserved.
    </span>
</footer>
</body>


    <script>
        var botmanWidget = {
            frameEndpoint: 'botman', 
            title:'Chatbot',
            introMessage:'testing',
            aboutText: 'Write Something',
            introMessage: "✋ Hi! I'm form Real Programmer"
        };
    </script>
   
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>