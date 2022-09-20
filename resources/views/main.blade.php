<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
 {{-- @vite('resources/js/script.js') --}}
</head>
<body>
      <!-- Header Section Start -->
<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
<div class="container">
  <div class="flex items-center justify-between relative">
    <div class="ml-10">
            <a href="#home" class="font-bold text-lg text-cyan-900 block py-6">Ariga Nursing Management</a>
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
            <li class="group"> 
              <a href="{{ route('login') }}" class="text-base text-black py-2 mx-8 hover:text-cyan-900">Login</a>  
            </li>
           
        </ul>
      </nav>
    </div>
  </div>
</div>
</header>
      <div class="container pt-32">
        @yield('contents')
      </div>
  <!-- Header Section End -->
</body>
</html>