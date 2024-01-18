<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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

<div class="bg-white">
  <div class="pt-6">
    
    <!-- Image gallery -->
    <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
      <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//101/MTA-38816092/neozep_neozep_forte_obat_flu_tablet_full03_lfsxpgkz.jpg" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
      </div>
      <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
          <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/5/14/2a8011c2-13e2-439e-bd8e-bd3c3de78dbd.jpg" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
        </div>
        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
          <img src="https://cdn.istyle.im/images/product/web/55/24/13/00/0/000000132455_01_800.jpg.webp" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
        </div>
      </div>
      <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
        <img src="https://d2qjkwm11akmwu.cloudfront.net/products/597862_22-9-2021_10-32-54-1665778677.png" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
      </div>
    </div>

    <!-- Product info -->
    <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
      <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Neozep Forte 1 Box</h1>
      </div>

      <!-- Options -->
      <div class="mt-4 lg:row-span-3 lg:mt-0">
        <h2 class="sr-only">Informasi Produk</h2>
        <div class="max-w-md mx-auto bg-white rounded p-8">
    <h1 class="text-2xl font-bold mb-4">Atur Jumlah :</h1>

    <div class="flex items-center mb-4">
        <button id="decrement" class="px-4 py-2 bg-gray-200 text-gray-600">-</button>
        <input id="quantity" type="text" class="w-16 text-center mx-2 border" value="1">
        <button id="increment" class="px-4 py-2 bg-gray-200 text-gray-600">+</button>
    </div>

    <div class="flex items-center">
        <span class="text-lg font-semibold">Price:</span>
        <span id="price" class="text-lg ml-2 font-bold">Rp63.000,00</span>
    </div>
</div>

        <!-- Reviews -->
        <div class="mt-2 ml-8">
          <h3 class="sr-only">Reviews</h3>
          <div class="flex items-center">
            <div class="flex items-center">
              <!-- Active: "text-gray-900", Default: "text-gray-200" -->
              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
              <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
              </svg>
            </div>
            <p class="sr-only">5 out of 5 stars</p>
            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">40 Ulasan</a>
          </div>
        </div>

        <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <button id="toggleFormBtn" class="mb-4 bg-blue-500 text-white py-2 px-4 rounded-md focus:outline-none">Tambah Catatan</button>

        <form id="catatanForm" class="hidden">
            <label for="catatan" class="block text-sm font-medium text-gray-700">Catatan:</label>
            <textarea id="catatan" name="catatan" rows="3" class="mt-1 p-2 block w-full border rounded-md"></textarea>
        </form>
    </div>

        <form class="mt-10">
          <button id="buyNowButton" type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Beli Sekarang</button>
        </form>
      </div>

      <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
        <!-- Description and details -->
        <div>
          <h3 class="sr-only">Description</h3>

          <div class="space-y-6">
            <p class="text-base text-gray-900">NEOZEP FORTE merupakan obat pereda flu dengan kandungan Paracetamol, Phenylpropanolamine, Salisilamida, dan Chlorpheniramine maleat. Paracetamol digunakan sebagai pereda demam dan sakit kepala, Phenylpropanolamine digunakan untuk mengobati gejala hidung tersumbat. Chlorpheniramine maleate bekerja sebagai antihistamin atau anti alergi sehingga obat ini digunakan untuk mengatasi gejala flu seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin yang disertai batuk.</p>
          </div>
        </div>


        <div class="mt-10">
          <h2 class="text-sm font-medium text-gray-900">Details</h2>

          <div class="space-y-6">
            <p class="text-sm text-gray-600">
                <br>Komposisi :
                <br>Phenylpropanolamine HCl 15 mg, Paracetamol 250 mg, Salicylamide 150 mg, Chlorpheniramine maleate 2 mg<br>
                <br>EFEK SAMPING
                <br>Mengantuk, efek samping ringan pada saluran pencernaan misalnya mual dan muntah. Pada penggunaan dosis yang lebih tinggi diketahui meningkatkan resiko terjadinya perdarahan lambung.<br>
                <br>GOLONGAN OBAT
                <br>Obat Bebas Terbatas (Biru)<br>
                <br>DOSIS
                <br>Dewasa: 3-4 x sehari 1 tablet
                <br>Anak usia 6-12 tahun: 3-4 x sehari setengah tablet.<br>
                <br>CARA PEMAKAIAN
                <br>Obat diminum sesudah makan<br>
                <br>KEMASAN
                <br>Box<br>
                <br>MANUFAKTUR
                <br>Darya Varia Laboratoria</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const decrementButton = document.getElementById('decrement');
        const incrementButton = document.getElementById('increment');
        const quantityInput = document.getElementById('quantity');
        const priceElement = document.getElementById('price');
        const toggleFormBtn = document.getElementById('toggleFormBtn');
        const catatanForm = document.getElementById('catatanForm');
        const cancelFormBtn = document.getElementById('cancelFormBtn');
        const buyNowButton = document.getElementById('buyNowButton'); // Add this line

        let quantity = parseInt(quantityInput.value);
        let price = 63000;

        function updatePrice() {
            const formattedPrice = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(quantity * price);

            priceElement.innerText = formattedPrice;
        }

        decrementButton.addEventListener('click', function () {
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
                updatePrice();
            }
        });

        incrementButton.addEventListener('click', function () {
            quantity++;
            quantityInput.value = quantity;
            updatePrice();
        });

        quantityInput.addEventListener('change', function () {
            const newQuantity = parseInt(quantityInput.value);
            if (!isNaN(newQuantity) && newQuantity > 0) {
                quantity = newQuantity;
                updatePrice();
            } else {
                quantityInput.value = quantity;
            }
        });

        // Add the following code for handling the "Beli Sekarang" button click
        buyNowButton.addEventListener('click', function () {
            const itemName = 'Neozep Forte 1 Box';
            const totalAmount = quantity * price;

            const receipt = `Nota:
                \nNama Barang: ${itemName}
                \nJumlah Barang Dibeli: ${quantity}
                \nTotal Harga: ${new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                }).format(totalAmount)}`;

            alert(receipt);
        });

        toggleFormBtn.addEventListener('click', () => {
            catatanForm.classList.toggle('hidden');
            toggleFormBtn.textContent = catatanForm.classList.contains('hidden') ? 'Tambah Catatan' : 'Batalkan Catatan';
        });

        cancelFormBtn.addEventListener('click', (e) => {
            e.preventDefault();
            catatanForm.classList.add('hidden');
            toggleFormBtn.textContent = 'Tambah Catatan';
        });
    });
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