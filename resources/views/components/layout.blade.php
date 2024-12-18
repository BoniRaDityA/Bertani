<!DOCTYPE html>
<html lang="en">

<head>
    <!DOCTYPE html>
    <html lang="en" class="h-full bg-gray-100">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/dropdown.js', 'resources/js/carousel.js'])
        {{-- <link rel="preload" as="style" href="https://4wmc4bxr-8000.asse.devtunnels.ms/build/assets/app-CyBUqrvq.css" /><link rel="modulepreload" href="https://4wmc4bxr-8000.asse.devtunnels.ms/build/assets/app-5jqjzOR5.js" /><link rel="stylesheet" href="https://4wmc4bxr-8000.asse.devtunnels.ms/build/assets/app-CyBUqrvq.css" /><script type="module" src="https://4wmc4bxr-8000.asse.devtunnels.ms/build/assets/app-5jqjzOR5.js"></script>     --}}
        {{-- <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <script>
            @if (session('error-permission'))
                alert("{{ session('error-permission') }}");
            @endif
        </script>
        <title>{{ $title }}</title>
    </head>

<body class="bg-white min-h-screen">
    <header class="bg-green-600 font-hind">
        @if (Auth::guard('admin')->check())
            <x-navbar_admin></x-navbar_admin>
        @elseif (Auth::guard('farmer')->check())
            <x-navbar_petani></x-navbar_petani>
        @else
            <x-navbar_pembeli></x-navbar_pembeli>
        @endif
    </header>

    <main class="px-7 mx-auto max-w-screen-lg">
        {{ $slot }}
    </main>
    <button id="scrollToTopBtn"
        class="fixed bottom-8 right-8 bg-indigo-500 text-white px-3 pt-3 pb-2 rounded-full shadow-lg place-content-center hover:bg-indigo-600 transition duration-300 hidden"
        onclick="scrollToTop()">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
        </svg> --}}
        <ion-icon name="arrow-up-circle-outline" class="h-6 w-6"></ion-icon>
    </button>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

<script>
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    // Tampilkan tombol saat pengguna scroll ke bawah
    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.remove("hidden");
        } else {
            scrollToTopBtn.classList.add("hidden");
        }
    });

    // Fungsi untuk scroll ke atas
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    }

    const navLinks = document.querySelector('.nav-links')

    function onToggleMenu(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu';
        navLinks.classList.toggle('top-[9%]');
        navLinks.style.zIndex = '99';
    }
</script>

</html>
