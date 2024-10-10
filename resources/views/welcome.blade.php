<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="font-ubuntu">
    <header class="navbar py-0 bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] h-[80px] shadow-lg fixed top-0 left-0 w-full z-50">   
        <div class="container mx-auto flex items-center h-full px-5 text-white font-bold">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="/img/inaklug.png" alt="Inaklug Logo" class="h-[50px] mr-3">
                <h1 class="text-xl sm:text-2xl">Inaklug</h1>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="ml-auto md:hidden">
                <button onclick="toggleMenu()" class="text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Route for Desktop -->
            <nav class="hidden md:flex gap-5 text-sm ml-10">
                <a href="#home" class="hover:text-gray-200 transition-colors duration-300">Home</a>
                <a href="#tentang-kami" class="hover:text-gray-200 transition-colors duration-300">Tentang Kami</a>
                <a href="#layanan-kami" class="hover:text-gray-200 transition-colors duration-300">Layanan Kami</a>
                <a href="#artikel" class="hover:text-gray-200 transition-colors duration-300">Artikel</a>
                <a href="#hubungi-kami" class="hover:text-gray-200 transition-colors duration-300">Hubungi Kami</a>
            </nav>

            <!-- Button Daftar for Desktop -->
            <button type="button" class="hidden md:block ml-auto px-4 sm:px-6 py-2 bg-[#1C5194] text-white rounded-full hover:bg-blue-700 transition-all duration-300">
                Daftar Online
            </button>
        </div>

        <!-- Mobile Menu -->
        <nav id="mobile-menu" class="hidden md:hidden bg-[#46074E] text-white w-full px-5 py-5 absolute top-[80px] left-0 z-40 shadow-md">
            <a href="#home" class="block py-2 hover:text-gray-200 transition-colors duration-300">Home</a>
            <a href="#tentang-kami" class="block py-2 hover:text-gray-200 transition-colors duration-300">Tentang Kami</a>
            <a href="#layanan-kami" class="block py-2 hover:text-gray-200 transition-colors duration-300">Layanan Kami</a>
            <a href="#artikel" class="block py-2 hover:text-gray-200 transition-colors duration-300">Artikel</a>
            <a href="#hubungi-kami" class="block py-2 hover:text-gray-200 transition-colors duration-300">Hubungi Kami</a>
            <button type="button" class="w-full mt-4 px-6 py-2 bg-[#1C5194] text-white rounded-full hover:bg-blue-700 transition-all duration-300">
                Daftar Online
            </button>
        </nav>
    </header>    

    <main class="pt-[80px]">
        <!-- Body 1 -->
        <div class="w-full h-[400px] sm:h-[550px] bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] relative">
            <h1 class="absolute text-white left-1/4 sm:left-[9%] top-[70%] sm:top-[87.4%] text-2xl sm:text-4xl">TENTANG KAMI</h1>
            <img src="/img/dresden2.jpg" class="h-full w-full object-cover">
        </div>

        <!-- Body 2 -->
        <div class="w-full max-w-[860px] mx-auto px-4 sm:px-0">
            <!-- Bagian Profil -->
            <h1 class="mt-10 text-2xl">Profil</h1>
            <p class="mt-4 text-sm sm:text-base">
                Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional yang berpengalaman,
                terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda Indonesia untuk menuntut ilmu
                di berbagai negara maju dunia.
            </p>

            <!-- Gambar 1 dan Gambar 2 -->
            <div class="flex flex-col sm:flex-row justify-center gap-6 mt-10">
                <img src="/img/visi.png" alt="Visi" class="w-full sm:w-[400px] h-[200px] object-cover bg-purple-600">
                <img src="/img/misi.png" alt="Misi" class="w-full sm:w-[400px] h-[200px] object-cover bg-purple-600">
            </div>

            <!-- Bagian Visi dan Misi -->
            <div class="flex flex-col lg:flex-row justify-between gap-8 mt-10">
                <!-- Visi -->
                <div class="w-full lg:w-[400px]">
                    <h2 class="text-[20px] mb-4 ml-5">Visi</h2>
                    <p class="text-sm sm:text-base ml-5">
                        Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.
                    </p>
                </div>

                <!-- Misi -->
                <div class="w-full lg:w-[400px]">
                    <h2 class="text-[20px] mb-4">Misi</h2>
                    <p class="text-sm sm:text-base">
                        Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.
                    </p>
                </div>              
            </div>

            <!-- Button Layanan Kami -->
            <div class="flex justify-center my-10">
                <button class="px-6 py-2 bg-gray-300 text-black border border-black rounded-full">
                    Layanan Kami
                </button>
            </div>
        </div>

        <hr>

        <!-- Body 3 -->
        <div class="text-center py-8 px-4">
            <h1 class="text-2xl font-semibold">Hubungi Kami</h1>
            <h2 class="text-xl font-medium mt-2">Kantor Pusat</h2>
            <p class="text-base mt-1">MULA BY GALERIA JAKARTA, CILANDAK TOWN SQUARE, LT. BASEMENT.</p>
            <p class="text-base mt-2">Phone: 085286754052</p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-6">
                <button class="px-6 py-2 text-white font-semibold bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] rounded-full">
                    LOKASI KAMI
                </button>
                <button class="px-6 py-2 text-black font-semibold bg-gray-200 border border-black rounded-full">
                    KIRIM PESAN
                </button>
            </div>
        </div>
    </main>

    <footer class="flex items-center justify-center py-0 bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] h-[80px] shadow-lg text-white mt-10">
        Copyright @ 2020 - Inaklug Indonesia | Hak cipta dilindungi undang undang
    </footer>      

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('
