<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
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
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
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
      <!-- <a href="login.php" class="px-3 py-2 text-sm font-medium text-center text-white bg-sky-400 rounded-lg hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500 dark:focus:ring-sky-500">Login</a> -->
      <?php 
      session_start();
      if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) : ?>
          <span class="mr-12 text-xl font-bold">Welcome, <?php echo $_SESSION['username']; ?></span>
          <a href="logout.php" class="px-3 py-2 text-sm font-medium text-center text-white bg-sky-400 rounded-lg hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500 dark:focus:ring-sky-500">Logout</a>
      <?php else : ?>
          <a href="login.php" class="px-3 py-2 text-sm font-medium text-center text-white bg-sky-400 rounded-lg hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500 dark:focus:ring-sky-500">Login</a>
      <?php endif; ?>
    </nav>
<!-- tutup nav -->

<div class="bg-black mt-20 ml-20 mr-20">
  <div id="carousel" class="overflow-hidden relative">
    <div id="slides" class="flex transition-transform duration-500 ease-in-out">
      <div class="slide min-w-full flex items-center">
        <img src="https://down-ws-id.img.susercontent.com/id-11134210-7r98o-lpukx5zxr2866b.webp" alt="Image 1" class="w-full h-full">
      </div>
      <div class="slide min-w-full flex items-center">
        <img src="https://down-ws-id.img.susercontent.com/id-11134210-7r98p-lpkp1wawh66813.webp" alt="Image 2" class="w-full h-full">
      </div>
      <div class="slide min-w-full flex items-center">
        <img src="https://down-ws-id.img.susercontent.com/id-11134210-7r990-lpukx5zxmuiub0.webp" alt="Image 3" class="w-full h-full">
      </div>
      <div class="slide min-w-full flex items-center">
        <img src="https://down-ws-id.img.susercontent.com/id-11134210-7r98w-lpkp1wawo70g21.webp" alt="Image 4" class="w-full h-full">
      </div>
      <div class="slide min-w-full flex items-center">
        <img src="https://down-ws-id.img.susercontent.com/id-11134210-7r991-lpuktuievo8vde.webp" alt="Image 5" class="w-full h-full">
      </div>
    </div>
    <div id="prev" onclick="prevSlide()" class="absolute top-1/2 transform -translate-y-1/2 text-24px cursor-pointer left-10 bi bi-arrow-left-square-fill" style="color: white; font-size: 30px;"></div>
    <div id="next" onclick="nextSlide()" class="absolute top-1/2 transform -translate-y-1/2 text-24px cursor-pointer right-10 bi bi-arrow-right-square-fill" style="color: white; font-size: 30px;"></div>
  </div>
</div>

<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="mb-8 font-bold text-2xl">Diskon Spesial</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 xl:gap-x-8">
    <div class="bg-white-200 border rounded-2xl shadow-sm">
      <a href="paramexnyeriotot.php" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://images.tokopedia.net/img/cache/900/hDjmkQ/2023/12/6/f8b4cb6a-0ff5-446d-b40f-0491c24d6088.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Paramex Nyeri Otot (1 Box 100 Strip)</h3>
        <p class="mt-1 text-base font-medium text-gray-900">Rp45.000</p>
      </a>
    </div>
    <div class="bg-white-200 border rounded-2xl shadow-sm">
      <a href="bodrexmigra.php" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2021/5/20/30fab8be-a913-44e3-867d-561426a026c4.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Bodrex Migra 1 Folding Box isi 25 Blister</h3>
        <p class="mt-1 text-base font-medium text-gray-900">Rp65.000</p>
      </a>
      </div>
      <div class="bg-white-200 border rounded-2xl shadow-sm">
      <a href="panadolflubatuk.php" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://images.tokopedia.net/img/cache/900/hDjmkQ/2023/11/27/d782c6e3-2151-4416-be8e-7d6d2cf33617.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Panadol Flu & Batuk (10 Kaplet)</h3>
        <p class="mt-1 text-base font-medium text-gray-900">Rp16.000</p>
      </a>
      </div>
      <div class="bg-white-200 border rounded-2xl shadow-sm">
      <a href="obhcombiplusbatukflu.php" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://images.tokopedia.net/img/cache/900/hDjmkQ/2023/6/14/e9665211-f81a-479f-af8e-1b322b9584cf.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">OBH Combi Plus Batuk Flu Menthol 100 ml</h3>
        <p class="mt-1 text-base font-medium text-gray-900">Rp15.000</p>
      </a>
      </div>
      <div class="bg-white-200 border rounded-2xl shadow-sm">
      <a href="tolakanginhoney.php" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/11/8/c16a9768-e095-4102-8653-b3cc78915d7b.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Tolak Angin + honey</h3>
        <p class="mt-1 text-base font-medium text-gray-900">Rp45.000</p>
      </a>
      </div>
    </div>
    
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="mb-8 font-bold text-2xl">Produk Terlaris</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
        <a href="wellmove.php" class="bg-white-200 border rounded-2xl shadow-sm">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//87/MTA-10209405/welmove_welmove-suplemen-makanan-1-strip-5-kaplet-_full01.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Wellmove</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">Rp28.000</p>
        </a>
        <a href="betadine.php" class="bg-white-200 border rounded-2xl shadow-sm">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://images.tokopedia.net/img/cache/900/VqbcmM/2023/5/4/2db3115b-b9e8-410e-9b79-cb3451f0e3c4.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">BETADINE Antiseptic Solution 60mL | Obat Cairan Antiseptik Luka 60 mL</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">Rp32.500</p>
        </a>
        <a href="tolaklinu.php" class="bg-white-200 border rounded-2xl shadow-sm">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://d2qjkwm11akmwu.cloudfront.net/products/10207-1665780541.webp" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">Tolaklinu / Tolak Linu herbal 1 Box</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">Rp15.000</p>
        </a>
      </div>
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

<!-- Footer -->
<!-- <footer class="bg-dark text-white mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>&copy; HealtMart, 2024 All RIGHT RESERVED.</p>
            </div>
        </div>
    </div>

</footer> -->
</body>
</html>