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
            {{-- Logo --}}
            <div class="flex items-center">
                <img src="/img/inaklug.png" alt="Inaklug Logo" class="h-[50px] mr-3">
                <h1 class="text-2xl">Inaklug</h1>
            </div>

            {{-- Route --}}
            <nav class="flex gap-5 text-sm ml-10 md:flex">
                <a href="#home" class="hover:text-gray-200 transition-colors duration-300">Home</a>
                <a href="#tentang-kami" class="hover:text-gray-200 transition-colors duration-300">Tentang Kami</a>
                <a href="#layanan-kami" class="hover:text-gray-200 transition-colors duration-300">Layanan Kami</a>
                <a href="#artikel" class="hover:text-gray-200 transition-colors duration-300">Artikel</a>
                <a href="#hubungi-kami" class="hover:text-gray-200 transition-colors duration-300">Hubungi Kami</a>
            </nav>

            {{-- Button Daftar --}}
            <button type="button" class="ml-auto px-6 py-2 bg-[#197BD0] text-white rounded-full hover:bg-blue-700 transition-all duration-300">Daftar Online</button>
        </div>
    </header>    

    <main>
        <!-- Body 1 -->
        <div class="w-full h-[550px] py-0 bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] relative">
            <h1 class="absolute text-white left-[9%] top-[87.4%] text-4xl">TENTANG KAMI</h1>
        </div>

        <!-- Body 2 -->
        <div class="w-[860px] h-auto py-0 mx-auto flex flex-col">
            <!-- Bagian Profil -->
            <h1 class="mt-[42px] text-[26px] text-le">Profil</h1>
            <h2 class="mt-[20px] text-[12px] max-w-[800px]">
            Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional yang berpengalaman,
            terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para anak-anak muda Indonesia untuk menuntut ilmu
            di berbagai negara maju dunia.
            </h2>
        
            <!-- Gambar 1 dan Gambar 2 -->
            <div class="flex justify-center gap-6 mt-[40px]">
            <div class="w-[400px] h-[200px] bg-purple-600 text-white text-center flex items-center justify-center">
                <span>GAMBAR 1</span>
            </div>
            <div class="w-[400px] h-[200px] bg-purple-600 text-white text-center flex items-center justify-center">
                <span>GAMBAR 2</span>
            </div>
        </div>
        
        <!-- Bagian Visi dan Misi -->
        <div class="flex justify-between gap-8 mt-[40px]">
            <!-- Visi -->
            <div class="w-[400px]">
                <h2 class="text-[20px] mb-4 ml-5">Visi</h2>
                <p class="text-[12px] ml-5">
                Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.
                </p>
            </div>
            
            <!-- Misi -->
            <div class="w-[400px]">
                <h2 class="text-[20px] mb-4">Misi</h2>
                <p class="text-[12px]">
                Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang tangguh, mandiri, dan profesional.
                </p>
            </div>              
            </div>
            <!-- button -->
            <div class="flex justify-center my-20">
                <button class="px-6 py-2 bg-gray-300 text-black border border-black rounded-full">
                Layanan Kami
                </button>
            </div>
        </div>

        <hr>
        <!-- Body 3 -->
        <div class="text-center py-8">
            <!-- Heading "Hubungi Kami" -->
            <h1 class="text-[24px] font-semibold">Hubungi Kami</h1>
            
            <!-- Subheading "Kantor Pusat" -->
            <h2 class="text-[18px] font-medium mt-2">Kantor Pusat</h2>
            
            <!-- Address -->
            <p class="text-[14px] mt-1">MULA BY GALERIA JAKARTA, CILANDAK TOWN SQUARE, LT. BASEMENT.</p>
            
            <!-- Phone -->
            <p class="text-[14px] mt-2">Phone: 085286754052</p>
            
            <!-- Buttons -->
            <div class="flex justify-center gap-4 mt-6">
            <!-- Button Lokasi Kami with gradient -->
            <button class="px-6 py-2 text-white font-semibold bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] rounded-full">
                LOKASI KAMI
            </button>
            
            <!-- Button Kirim Pesan with border -->
            <button class="px-6 py-2 text-black font-semibold bg-gray-200 border border-black rounded-full">
                KIRIM PESAN
            </button>
            </div>
        </div>
    </main>

    <footer class="flex items-center justify-center py-0 bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] h-[80px] shadow-lg text-white">
        Copyright @ 2020 - Inaklug Indonesia | Hak cipta dilindungi undang undang
    </footer>      
</body>
</html>