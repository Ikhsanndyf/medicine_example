<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedQue Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/medque-logo.png') }}">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-700 via-purple-500 to-purple-300 text-white">

    <!-- Navbar -->
    <nav class="fixed w-full bg-purple-900 bg-opacity-90 shadow-md z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#hero" class="text-2xl font-bold">MedQue</a>
            <div x-data="{ open: false }" class="relative">
                <!-- Hamburger Button -->
                <button @click="open = !open" class="block md:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <!-- Menu -->
                <ul :class="open ? 'block' : 'hidden'"
                    class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded-lg shadow-md md:hidden">
                    <li><a href="#about" class="block px-4 py-2 hover:bg-gray-100">About</a></li>
                    <li><a href="#features" class="block px-4 py-2 hover:bg-gray-100">Features</a></li>
                    <li><a href="#benefits" class="block px-4 py-2 hover:bg-gray-100">Benefits</a></li>
                    <li><a href="#team" class="block px-4 py-2 hover:bg-gray-100">Our Team</a></li>
                </ul>
            </div>
            <ul class="hidden md:flex space-x-6 text-sm uppercase font-medium">
                <li><a href="#about" class="hover:text-gray-200">About</a></li>
                <li><a href="#features" class="hover:text-gray-200">Features</a></li>
                <li><a href="#benefits" class="hover:text-gray-200">Benefits</a></li>
                <li><a href="#team" class="hover:text-gray-200">Our Team</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="h-screen flex flex-col items-center justify-center bg-gradient-to-r from-purple-600 to-purple-700 text-center">
        <div data-aos="fade-down">
            <!-- Logo -->
            <img src="{{ asset('images/medque-logo.png') }}" alt="MedQue Logo" class="w-24 h-auto mx-auto mb-6">

            <!-- Judul -->
            <h1 class="text-5xl font-extrabold mb-4">MedQue</h1>
            <p class="text-lg font-bold mb-8">Aplikasi Manajemen Pasien & Antrian Obat Terbaik untuk Klinik dan Apotek</p>
            <a href="/admin" class="px-6 py-3 bg-purple-700 rounded-md shadow-md hover:bg-purple-500 transition-all">Get Started</a>
        </div>
    </section>


<!-- Tentang MedQue -->
<section id="about" class="py-16 bg-white text-gray-800 flex items-center justify-center">
    <div class="container mx-auto px-8 lg:px-24">
        <div class="grid grid-cols-1 md:flex md:items-center md:gap-12">
            <!-- Gambar -->
            <div class="md:w-1/2" data-aos="fade-right">
                <img src="{{ asset('images/hero.jpg') }}"
                     alt="Tentang MedQue"
                     class="w-full h-auto">
            </div>
            <!-- Teks -->
            <div class="md:w-1/2" data-aos="fade-right">
                <h3 class="text-4xl font-bold text-purple-700 mb-6 mt-4 sm:mt-8">Apa Itu MedQue?</h3>
                <p class="text-lg text-gray-600 mb-4 text-justify">
                    Medque adalah suatu website yang memanfaatkan perkembangan teknologi dengan menggabungkan alat wireless calling system dalam proses pengelolaan kebutuhan pasien rawat inap. Website ini hanya dapat diakses dan dikelola oleh perawat dan bagian farmasi saja, sedangkan pasien atau keluarga hanya mendapatkan konfirmasi terkait pemesanan kebutuhan dari perawat dan informasi pengambilan dari alat tersebut (Ringque).
                </p>
            </div>
        </div>
    </div>
</section>




    <!-- Features -->

<section id="features" class="py-16 bg-gradient-to-r from-purple-500 to-purple-700 text-white flex items-center min-h-screen">
    <div class="container mx-auto px-8 lg:px-24 text-center">
        <h2 class="text-4xl font-bold mb-12" data-aos="fade-down">Fitur - Fitur MedQue</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                 <!-- Fitur 1 -->
                 <div class="p-6 bg-purple-800 rounded-lg shadow-md" data-aos="fade-up">
                    <h3 class="text-2xl font-semibold mb-4">Multi User & Roles</h3>
                    <p class="text-gray-300">Mengelola berbagai pengguna dengan peran berbeda seperti perawat & farmasi.</p>
                </div>
            <!-- Fitur 1 -->
            <div class="p-6 bg-purple-800 rounded-lg shadow-md" data-aos="fade-up">
                <h3 class="text-2xl font-semibold mb-4">Manajemen Data Pasien</h3>
                <p class="text-gray-300">Perawat dapat memasukkan data pasien yang dirawat inap.</p>
            </div>
            <!-- Fitur 2 -->
            <div class="p-6 bg-purple-800 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl font-semibold mb-4">Manajemen Data Medicine</h3>
                <p class="text-gray-300">
                    Melakukan input data obat dan alat medis dengan mudah.
                </p>
            </div>
            <!-- Fitur 3 -->
            <div class="p-6 bg-purple-800 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-semibold mb-4">Manajemen Resep Pasien</h3>
                <p class="text-gray-300">Memasukan resep obat sesuai dengan kebutuhan pasien.</p>
            </div>
            <!-- Fitur Baru 1 -->
            <div class="p-6 bg-purple-800 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-semibold mb-4">Dashboard Interaktif</h3>
                <p class="text-gray-300">Pantau semua aktivitas dengan mudah dengan dashboard yang interaktif.</p>
            </div>
            <!-- Fitur Baru 3 -->
            <div class="p-6 bg-purple-800 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-semibold mb-4">Tracking</h3>
                <p class="text-gray-300">
                    Meliputi pelacakan status pemesanan dan stok obat atau kebutuhan lainnya.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section: Benefits MedQueue -->
<section id="benefits" class="py-16 bg-gradient-to-r from-purple-500 to-purple-700 text-white">
    <div class="container mx-auto px-6 lg:px-24 flex flex-col md:flex-row items-center">
        <!-- Gambar -->
        <div class="w-full md:w-1/2 mb-8 md:mb-0" data-aos="fade-right">
            <img src="{{ asset('/images/benefits.png') }}" alt="Manfaat MedQueue" class=" mx-auto">
        </div>
        <!-- Daftar Manfaat -->
        <div class="w-full md:w-1/2 text-left md:pl-12" data-aos="fade-right">
            <h2 class="text-4xl font-bold text-white mb-6">Manfaat MedQue</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <span class="bg-white text-purple-700 rounded-full p-2 mr-4">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm3.707 6.707l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L9 10.586l3.293-3.293a1 1 0 111.414 1.414z"></path>
                        </svg>
                    </span>
                    <p>Dapat meminimalisir penggunaan kertas dalam peresepan obat</p>
                </li>
                <li class="flex items-start">
                    <span class="bg-white text-purple-700 rounded-full p-2 mr-4">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm3.707 6.707l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L9 10.586l3.293-3.293a1 1 0 111.414 1.414z"></path>
                        </svg>
                    </span>
                    <p>Memastikan pelayanan yang lebih efisien dan efektif dalam pengelolaan antrean dan pemesanan obat</p>
                </li>
                <li class="flex items-start">
                    <span class="bg-white text-purple-700 rounded-full p-2 mr-4">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm3.707 6.707l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L9 10.586l3.293-3.293a1 1 0 111.414 1.414z"></path>
                        </svg>
                    </span>
                    <p>Mengurangi beban kerja apoteker dan meningkatkan kualitas pelayanan</p>
                </li>
                <li class="flex items-start">
                    <span class="bg-white text-purple-700 rounded-full p-2 mr-4">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm3.707 6.707l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L9 10.586l3.293-3.293a1 1 0 111.414 1.414z"></path>
                        </svg>
                    </span>
                    <p>Mempermudah koordinasi antara perawat dan farmasi</p>
                </li>
                <li class="flex items-start">
                    <span class="bg-white text-purple-700 rounded-full p-2 mr-4">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm3.707 6.707l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L9 10.586l3.293-3.293a1 1 0 111.414 1.414z"></path>
                        </svg>
                    </span>
                    <p>Menyediakan riwayat obat yang diambil</p>
                </li>
                <li class="flex items-start">
                    <span class="bg-white text-purple-700 rounded-full p-2 mr-4">
                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm3.707 6.707l-4 4a1 1 0 01-1.414 0l-2-2a1 1 0 111.414-1.414L9 10.586l3.293-3.293a1 1 0 111.414 1.414z"></path>
                        </svg>
                    </span>
                    <p>Meningkatkan keamanan dan kenyamanan klien dalam menunggu antrean</p>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Section: Our Team -->
<section id="team" class="py-16 bg-gray-100 text-gray-800">
    <div class="container mx-auto px-6 lg:px-24 text-center">
        <h2 class="text-4xl font-bold text-purple-700 mb-12" data-aos="fade-down">Our Team</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                <img src="{{asset('images/team/latifa.png')}}" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover">
                <h3 class="text-xl font-semibold text-purple-700">Latifa Putri Palupi</h3>
                <p class="text-gray-600">2200931</p>
            </div>
            <!-- Team Member 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('images/team/galang.png')}}" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-purple-700">M Galang Maulana</h3>
                <p class="text-gray-600">2202287</p>
            </div>
            <!-- Team Member 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                <img src="{{asset('images/team/nadia.png')}}" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-purple-700">Nadia Fadila Surya</h3>
                <p class="text-gray-600">2200034</p>
            </div>
            <!-- Team Member 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('images/team/nafa.png')}}" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-purple-700">Nafa Alda K</h3>
                <p class="text-gray-600">2200257</p>
            </div>
            <!-- Team Member 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="500">
                <img src="{{asset('images/team/putri.png')}}" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-purple-700">Putri Kartika Dewi</h3>
                <p class="text-gray-600">2205111</p>
            </div>
            <!-- Team Member 6 -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="600">
                <img src="{{asset('images/team/risalah.png')}}" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-purple-700">Risalah Khairinnisa</h3>
                <p class="text-gray-600">2200478</p>
            </div>
            <!-- Team Member 7 -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="700">
                <img src="{{asset('images/team/syahrul.png')}}" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-purple-700">Syahrul Ramadhan</h3>
                <p class="text-gray-600">2205748</p>
            </div>
            <!-- Team Member 8 -->
            <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="400">
                <img src="{{asset('images/team/zihan.png')}}" alt="Team Member" class="w-32 h-32 mx-auto rounded-full mb-4 object-cover">
                <h3 class="text-xl font-semibold text-purple-700">Zihan Ananda</h3>
                <p class="text-gray-600">2200206</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-gradient-to-r from-purple-700 to-purple-900 text-white py-14">
    <div class="container mx-auto px-6 lg:px-24 flex flex-col lg:flex-row items-center justify-between">
        <!-- Logo dan Deskripsi -->
        <div class="flex flex-col items-center lg:items-start mb-8 lg:mb-0">
            <a href="#hero" class="text-4xl font-bold text-white hover:text-gray-300 mb-4">MedQue</a>
            <p class="text-lg text-gray-300 text-center lg:text-left">
                Aplikasi Manajemen Pasien & Antrian Obat Terbaik untuk Klinik dan Apotek.
            </p>
        </div>

       <!-- Tautan -->
        <div class="flex space-x-8 mb-8 lg:mb-0 hidden lg:flex">
            <div>
                <h4 class="text-xl font-semibold mb-4">Navigation</h4>
                <ul class="space-y-4 text-gray-300">
                    <li><a href="#about" class="hover:text-gray-200">About</a></li>
                    <li><a href="#features" class="hover:text-gray-200">Features</a></li>
                    <li><a href="#benefits" class="hover:text-gray-200">Benefits</a></li>
                    <li><a href="#team" class="hover:text-gray-200">Our Team</a></li>
                </ul>
            </div>
        </div>


        <!-- Media Sosial -->
        <div class="flex space-x-6">
            <a href="https://facebook.com" target="_blank" class="group">
                <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center shadow-lg hover:bg-purple-800 transition-all transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white group-hover:text-gray-200" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8H7v4H5v3h2v7h3v-7h2.5l.5-3H10V9.5a.5.5 0 01.5-.5H13V6h-2.5A3.5 3.5 0 007 9.5V12z" />
                    </svg>
                </div>
            </a>
            <a href="https://twitter.com" target="_blank" class="group">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-700 transition-all transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white group-hover:text-gray-200" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 6.5a7.5 7.5 0 01-2.18.6 3.75 3.75 0 001.64-2.07 7.5 7.5 0 01-2.37.91A3.75 3.75 0 0012.9 8.4a10.62 10.62 0 01-7.73-3.9 3.75 3.75 0 001.16 5 3.72 3.72 0 01-1.7-.47v.05a3.75 3.75 0 003 3.68 3.75 3.75 0 01-1.7.06 3.75 3.75 0 003.5 2.6 7.5 7.5 0 01-4.67 1.62A7.55 7.55 0 016 19a10.6 10.6 0 005.7 1.67c6.84 0 10.58-5.67 10.58-10.58 0-.16-.01-.31-.01-.46A7.56 7.56 0 0020 6.5z" />
                    </svg>
                </div>
            </a>
            <a href="https://instagram.com" target="_blank" class="group">
                <div class="w-10 h-10 bg-pink-500 rounded-full flex items-center justify-center shadow-lg hover:bg-pink-700 transition-all transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white group-hover:text-gray-200" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16.37 2H7.63A5.63 5.63 0 002 7.63v8.74A5.63 5.63 0 007.63 22h8.74A5.63 5.63 0 0022 16.37V7.63A5.63 5.63 0 0016.37 2zM12 16.1a4.1 4.1 0 110-8.2 4.1 4.1 0 010 8.2zm5.55-10.1a1.3 1.3 0 110-2.6 1.3 1.3 0 010 2.6z" />
                    </svg>
                </div>
            </a>
            <a href="https://linkedin.com" target="_blank" class="group">
                <div class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-900 transition-all transform hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white group-hover:text-gray-200" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3A2 2 0 0121 5v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14zm-8.5 6.2h-2.6V18H10V9.2zm-1.3-3.5a1.3 1.3 0 100 2.6 1.3 1.3 0 000-2.6zm9.3 12.3v-4.8a2.2 2.2 0 00-4.4 0v4.8H11v-9.6h2.6v1.3a3.3 3.3 0 013-1.6c2.1 0 3.7 1.7 3.7 3.8v6.1H17z" />
                    </svg>
                </div>
            </a>
        </div>
    </div>
    <!-- Hak Cipta -->
    <div class="text-center text-gray-300 mt-8">
        <p>&copy; 2024 MedQue. All rights reserved.</p>
    </div>
</footer>


    <script>
        AOS.init({
            duration: 1200,
        });
    </script>
</body>
</html>
