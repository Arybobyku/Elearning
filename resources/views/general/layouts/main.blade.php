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
                <div class="mb-2 sm:mb-0 flex flex-row
  ">
                    <div class="h-10 w-10 self-center mx-4">
                        <img class="h-10 w-10 self-center" src="/images/logo.png" />
                    </div>
                    <div>
                        <a href="/home" class="text-xl no-underline text-cyan-900 font-semibold">Ariga</a><br>
                        <span class="font-light text-xs text-yellow-600">Nursing Management</span>
                    </div>
                </div>
                @if (Route::has('login'))
                    @auth
                        <div class="lg:pl-[450px]">

                            <button id="profilenav" type="button" class="block">
                                <span
                                    class="text-base text-black py-2 mx-8 hover:text-cyan-900">{{ Auth::user()->nickname }}</span>
                            </button>
                            <nav id="nav-profile"
                                class="hidden absolute py-5 lg:mr-80 md:mr-36 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full ">
                                <ul class="block">
                    
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li class="group">
                                            <a href="href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();""
                                                class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Log Out</a>
                                        </li>
                                    </form>
                                </ul>
                            </nav>
                        </div>
                    @else
                        <div class="lg:pl-[600px]">

                            <a href="{{ route('login') }}"
                                class="text-base text-black py-2 mx-8 hover:text-cyan-900">Login</a>
                        </div>

                    @endauth
                @endif

                <div class="flex items-center right-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-6 lg:hidden">
                        <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out origin-top-left "></span>
                    </button>
                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/"
                                    class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="/#about"
                                    class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Tentang</a>
                            </li>
                            <li class="group">
                                <a href="/news"
                                    class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Berita</a>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="group">
                                        <a href="/academies"
                                            class="text-base text-black py-2 mx-8 group-hover:text-cyan-900">Akademi</a>
                                    </li>
                                @endauth
                            @endif

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="pt-32">
        @yield('contents')
    </div>

    <section id="contact">

        <div class="py-16 min-w-full flex transition-all duration-500 bg-slate-700 pt-30">
            <div class="container max-w-screen-lg mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 content-center">
                    <div class="">
                        <p class=" font-light text-white mb-4">
                            Thank you for your attention.
                        </p>
                        <p class=" font-light text-white">
                            Sumatera Utara Ibukotanya Medan<br />
                            Tempat Bermukim Sultan Deli<br />
                            Terima Kasih Kawan" Sekalian<br />
                            Semoga Kita Dapat Berjumpa Nanti<br />
                        </p>
                    </div>
                    <div class="col-span-2 sm:col-span-1 sm:my-auto  transition-all duration-500">
                        <div class="text-lg font-extralight grid gap-5 transition-all duration-500">
                            <div>
                                <a target="blank"
                                    href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=yudhatriya07@gmail.com"
                                    class="flex items-center gap-2 text-white">
                                    <ion-icon class="text-xl" name="mail-outline"></ion-icon>ariga@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6  sm:mx-auto text-white lg:my-8" />
                <span class="block text-sm text-white sm:text-center">© 2022 Ariga Nursing Management™. All Rights
                    Reserved.
                </span>
            </div>
        </div>
    </section>

    {{-- @vite('resources/js/script.js') --}}

</body>

<script>
    //Scrip Untuk Gambar Welcome Page
    //carousel
    let defaultTransform = 0;

    function goNext() {
        defaultTransform = defaultTransform - 398;
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.3)
            defaultTransform = 0;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
    next.addEventListener("click", goNext);

    function goPrev() {
        var slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
        else defaultTransform = defaultTransform + 398;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }
    prev.addEventListener("click", goPrev);
</script>

<script>
    //Scrip Untuk Navbar
    //hamburger
    const hamburger = document.querySelector("#hamburger");
    const navMenu = document.querySelector("#nav-menu");

    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("hamburger-active");
        navMenu.classList.toggle("hidden");
    });
    const navProfile = document.querySelector("#nav-profile");
    const profileNav = document.querySelector("#profilenav");

    profileNav.addEventListener("click", function() {
        navProfile.classList.toggle("hidden");
    });
</script>

<script>
    //Scrip Untuk Navbar
    //navbar fixed
    window.onscroll = function() {
        const header = document.querySelector("header");
        const navfix = header.offsetTop;

        if (window.pageYOffset > navfix) {
            header.classList.add("navbar-fixed");
        } else {
            header.classList.remove("navbar-fixed");
        }
    };
</script>

<script>
    var botmanWidget = {
        title: "Ariga Chat Bot",
        aboutText: 'Tulis sesuatu',
        mainColor: '#164E63',
        aboutText: '',
        bubbleBackground: '#164E63',
        headerTextColor: '#fff',
        introMessage: "✋ Hi! selamat datang di website Ariga Nursing Management"
        
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</html>
