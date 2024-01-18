<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    footer {
            background-color: rgb(30, 185, 197);
            color: white; 
            padding: 16px;
        }
        h4 {
            background-color: rgb(101, 166, 215); 
            color: white; 
            padding: 16px;
            text-align: center;
        }
    </style>
</head>
<body>
<!-- awal nav -->
<nav class="bg-blue-100">
  <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <!-- awal navbar -->
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-20 w-30" src="logo2.png" alt="logo">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="index.php" class="text-black hover:bg-gray-100 hover:text-black text-black rounded-md px-3 py-6 text-sm font-medium" aria-current="page">Beranda</a>
            <a href="Artikel.php" class="text-black hover:bg-gray-100 hover:text-black rounded-md px-3 py-6 text-sm font-medium">Artikel</a>
            <a href="etalase.php" class="text-black hover:bg-gray-100 hover:text-black rounded-md px-3 py-6 text-sm font-medium">Etalase</a>
          </div>
        </div>
      </div>
      <!-- tutup navbar -->
      <?php
            session_start();
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) : ?>
          <a href="logout.php" class="px-3 py-2 text-sm font-medium text-center text-white bg-sky-400 rounded-lg hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500 dark:focus:ring-sky-500">Logout</a>
      <?php else : ?>
          <a href="login.php" class="px-3 py-2 text-sm font-medium text-center text-white bg-sky-400 rounded-lg hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500 dark:focus:ring-sky-500">Login</a>
      <?php endif; ?>
      <!-- <a href="login.php" class="px-3 py-2 text-sm font-medium text-center text-white bg-sky-400 rounded-lg hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500 dark:focus:ring-sky-500">Login</a> -->
</nav>
<!-- tutup nav -->


<div class="bg-white mt-20 ml-20 mr-20">
<h2 class="mb-8 font-bold text-2xl">Artikel Terpopuler</h2>
  <div id="carousel" class="overflow-hidden relative">
    <div id="slides" class="flex transition-transform duration-500 ease-in-out">
      <div class="slide min-w-full flex items-center">
        <img src="https://img.freepik.com/premium-vector/mental-health-improving-trends-rectangle-infographic-template_106317-25905.jpg" alt="Image 1" class="w-full h-full">
      </div>
      <div class="slide min-w-full flex items-center">
        <img src="https://sayaberani.org/wp-content/uploads/2020/12/social-post-0182-1200x600.jpg" alt="Image 2" class="w-full h-full">
      </div>
      <div class="slide min-w-full flex items-center">
        <img src="https://cdn0-production-images-kly.akamaized.net/PBQGqYNbM5ct_DYaIQsDs95trug=/500x281/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1653102/original/045613300_1500452004-YouTube.jpg" alt="Image 3" class="w-full h-full">
      </div>
      <div class="slide min-w-full flex items-center">
        <img src="https://imgcdn.solopos.com/@space/2023/09/red-ribbon-syringe-with-white-background-hiv-aids-ribbon-awareness-1.jpg" alt="Image 4" class="w-full h-full">
      </div>
    </div>
    <div id="prev" onclick="prevSlide()" class="absolute top-1/2 transform -translate-y-1/2 text-24px cursor-pointer left-10 bi bi-arrow-left-square-fill" style="color: white; font-size: 30px;"></div>
    <div id="next" onclick="nextSlide()" class="absolute top-1/2 transform -translate-y-1/2 text-24px cursor-pointer right-10 bi bi-arrow-right-square-fill" style="color: white; font-size: 30px;"></div>
  </div>
</div>

<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="mb-8 font-bold text-2xl">Artikel Terbaru</h2>
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <div class="bg-white-200 border rounded-2xl shadow-sm">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="illustrasi artikel 1.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700"><b>Simak Manfaat Yoga Bagi Ibu Hamil</b></h3>
          <p class="mt-1 text-base font-medium text-gray-500" style="font-size: small;">23 Oktober 2023</p>
        </a>
      </div>
      <div class="bg-white-200 border rounded-2xl shadow-sm">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="illustrasi artikel 2.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700"><b>Perhatikan Gejala Covid-19!</b></h3>
          <p class="mt-1 text-base font-medium text-gray-500" style="font-size: small;"> 25 Oktober 2023</p>
        </a>
      </div>
      <div class="bg-white-200 border rounded-2xl shadow-sm">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="illustrasi artikel 3.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700"><b>7 Makanan Yang Bisa Meringankan Sakit Kepala</b></h3>
          <p class="mt-1 text-base font-medium text-gray-500" style="font-size: small;">15 November 2023</p>
        </a>
      </div>
      <div class="bg-white-200 border rounded-2xl shadow-sm">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="illustrasi artikel 4.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700"><b>Jangan Lakukan 6 Hal Ini Jika Sedang Migrain</b></h3>
          <p class="mt-1 text-base font-medium text-gray-500" style="font-size: small;">28 November 2023</p>
        </a>
      </div>
      <div class="bg-white-200 border rounded-2xl shadow-sm">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="illustrasi artikel 5.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700"><b>Berikut Daftar Bumbu Dapur Yang Jarang Diketahui Dapat Menjadi Obat Tradisional</b></h3>
          <p class="mt-1 text-base font-medium text-gray-500" style="font-size: small;">8 Desember 2023</p>
        </a>
      </div>
      <div class="bg-white-200 border rounded-2xl shadow-sm">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="illustrasi artikel 6.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700"><b>Manfaat Melakukan Aktifitas Fisik</b></h3>
          <p class="mt-1 text-base font-medium text-gray-500" style="font-size: small;">17 Desember 2023</p>
        </a>
      </div>
      <div class="bg-white-200 border rounded-2xl shadow-sm">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="illustrasi artikel 7.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700"><b>Jarang Ada Yang Tahu, Inilah Manfaat Vitamin K2 Untuk Kesehatan Tulang, Dapat Menyehatkan Tulang Lansia</b></h3>
          <p class="mt-1 text-base font-medium text-gray-500" style="font-size: small;">1 Januari 2024</p>
        </a>
      </div>
    <div class="bg-white-200 border rounded-2xl shadow-sm">
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="illustrasi artikel 8.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700"><b>5 Pilihan Obat Batuk Yang Ampuh Di Apotek</b></h3>
        <p class="mt-1 text-base font-medium text-gray-500" style="font-size: small;">10 Januari 2024</p>
      </a>
    </div>
  </div>
</div>


<script>
  let currentIndex = 0;
  const totalSlides = document.querySelectorAll('.slide').length;
  const slidesContainer = document.getElementById('slides');
  const slides = document.querySelectorAll('.slide');

  const firstSlideClone = slides[0].cloneNode(true);
  slidesContainer.appendChild(firstSlideClone);

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % (totalSlides + 1);
    updateCarousel();
  }

  function updateCarousel() {
    slidesContainer.style.transition = 'transform 0.5s ease-in-out';
    slidesContainer.style.transform = `translateX(${-currentIndex * 100}%)`;

    if (currentIndex === totalSlides) {
      slidesContainer.addEventListener('transitionend', function resetTransition() {
        slidesContainer.style.transition = 'none';
        currentIndex = 0;
        slidesContainer.style.transform = `translateX(${-currentIndex * 100}%)`;
        setTimeout(() => {
          slidesContainer.style.transition = 'transform 0.5s ease-in-out';
          slidesContainer.removeEventListener('transitionend', resetTransition);
        });
      });
    }
  }

  setInterval(nextSlide, 5000);
</script>

<footer class="text-white p-4">
        <div class="container mx-auto flex flex-col md:flex-row justify-between">
            <!-- Left side of the footer -->
            <div class="ml-8 mb-4 md:mb-0">
                <h2 class="text-xl font-bold">Quick Menu</h2>
                <p class="text-sm mt-2">Tentang Kami</p>
                <p class="text-sm mt-2">FAQ</p>
                <p class="text-sm mt-2">Blog</p>
                <p class="text-sm mt-2">Promo</p>
            </div>

            <!-- Center of the footer -->
            <div class="mb-4 md:mb-0 mr-8">
                <ul>
                    <li class="mb-2 mt-8 text-sm"><a href="#" class="text-sm hover:text-gray-300">Security</a></li>
                    <li class="mb-2 text-sm"><a href="#" class="text-sm hover:text-gray-300">Karir</a></li>
                    <li class="mb-2 text-sm"><a href="#" class="text-sm hover:text-gray-300">Kupon</a></li>
                    <li class="text-sm"><a href="#" class="text-sm hover:text-gray-300">Partnership</a></li>
                </ul>
            </div>

            <!-- Right side of the footer -->
            <div class="mb-4 md:mb-0 mr-8">
                <ul>
                    <li class="mb-2 mt-8 text-sm"><a href="#" class="text-sm hover:text-gray-300">Layanan Pengaduan Konsumen</a></li>
                    <li class="mb-2 text-sm"><a href="#" class="text-sm hover:text-gray-300">Universitas Indonesia, Jl. Prof. DR. G.A. Siwabessy, <br>Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425</a></li>
                    <li class="mb-2 text-sm"><a href="#" class="text-sm hover:text-gray-300">0812 3456 7891 (WhatsApp)</a></li>
                  </ul>
            </div>
        </div>
    </footer>
    <h4 class="text-base font-bold text-white">©HealthMart, 2024. ALL RIGHTS RESERVED</p>
</body>
</html>