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
    <div class="lg:pl-[650px]">
             @if (Route::has('login'))
            @auth
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
            @else
            
               <a href="{{ route('login') }}" class="text-base text-black py-2 mx-8 hover:text-cyan-900">Login</a>  
                    @endauth
                    @endif
    </div>
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