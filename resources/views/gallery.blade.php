<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri Masjid Raden Patah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lora:ital,wght@0,400..700;1,400..700&display=swap');

      .kaushan-script {
        font-family: 'Kaushan Script', cursive;
      }
      .lora-font {
        font-family: 'Lora', serif;
      }

      /* Custom animation for rows */
      .scroll-animation {
        display: flex;
        animation: scroll-loop 30s linear infinite;
      }
      .scroll-animation-second {
        display: flex;
        animation: scroll-loop 30s linear infinite;
        animation-delay: 2.5s; /* Delay untuk baris kedua */
      }

      @keyframes scroll-loop {
        0%,100% {
          transform: translateX(0);
        }
        50% {
          transform: translateX(calc(-100% + 100vw));
        }
      }

      .gallery-row {
        display: flex;
        gap: 40px; /* Jarak antar gambar */
        width: max-content; /* Agar hanya selebar konten */
      }
    </style>
  </head>
  <body class="bg-neutral-50">
    <section class="mt-[100px] lg:mt-[158px] px-[20px]">
      <!-- Title -->
      <div>
        <p class="text-center text-[#222222] text-[40px] md:text-[48px] lg:text-[64px] font-semibold lora-font">Masjid Raden Patah</p>
        <p class="text-center text-[#424242] text-[26px] md:text-3xl lg:text-5xl font-normal kaushan-script">at Glance</p>
        <div class="mt-[40px] md:mt-[50px] lg:mt-[88px] flex justify-center">
          <img src="./image/mrp.png" alt="gallery-mrp" />
        </div>
      </div>

      <!-- Gallery Section -->
      <div class="mt-[60px]">
        <p class="text-center text-[#424242] text-5xl font-normal kaushan-script">Gallery</p>
        <!-- First Row -->
        <div class="overflow-hidden mt-[40px] relative">
          <div class="scroll-animation gallery-row">
            <img src="./image/MRP_0516.png" alt="Gallery Image 1" class="w-[300px] md:w-[400px] lg:w-[500px] rounded-lg shadow-md" />
            <img src="./image/MRP_0516.png" alt="Gallery Image 2" class="w-[300px] md:w-[400px] lg:w-[500px] rounded-lg shadow-md" />
            <img src="./image/MRP_0516.png" alt="Gallery Image 3" class="w-[300px] md:w-[400px] lg:w-[500px] rounded-lg shadow-md" />
            <img src="./image/MRP_0516.png" alt="Gallery Image 4" class="w-[300px] md:w-[400px] lg:w-[500px] rounded-lg shadow-md" />
          </div>
        </div>

        <!-- Second Row -->
        <div class="overflow-hidden mt-[60px] relative">
          <div class="scroll-animation-second gallery-row">
            <img src={{ asset('/image/MRP_0516.png')}} alt="Gallery Image 1" class="w-[300px] md:w-[400px] lg:w-[500px] rounded-lg shadow-md" />
            <img src={{ asset('/image/MRP_0516.png')}} alt="Gallery Image 2" class="w-[300px] md:w-[400px] lg:w-[500px] rounded-lg shadow-md" />
            <img src={{ asset('/image/MRP_0516.png')}} alt="Gallery Image 3" class="w-[300px] md:w-[400px] lg:w-[500px] rounded-lg shadow-md" />
            <img src={{ asset('/image/MRP_0516.png')}} alt="Gallery Image 4" class="w-[300px] md:w-[400px] lg:w-[500px] rounded-lg shadow-md" />
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
