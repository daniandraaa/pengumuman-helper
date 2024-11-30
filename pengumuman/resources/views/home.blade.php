<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HelPhin</title>
    <link rel="icon" href="./assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">    
</head>
  <body class="font-sans antialiased text-white bg-x-blue">
    <!-- Header -->
    @include('general.navbarHome')

    <!-- Hero -->
    <section class="relative sm:pl-2 sm:pb-8 flex-1 pt-6 bg-x-lightblue grid pb-24 overflow-hidden">
      <img
        src="./assets/images/hero-vector.png"
        alt="hero"
        class="absolute inset-0 w-full h-full sm:h-full object-cover"
      />
      <img
        src="./assets/images/hero-vector-divider.png"
        alt="hero"
        class="absolute inset-0 w-full h-full sm:h-full sm:w-full object-cover sm:object-fill scale-[2.5] sm:scale-100"
      />

      <div class="relative sm:p-6 flex items-center justify-evenly gap-1 p-4 lg:px-18">
        <div
          class="flex-1 space-y-6 md:space-y-8 lg:space-y-10 "
        >
          <img
            src="./assets/images/logo-full.png"
            alt="logo"
            class="h-16 sm:h-20 lg:h-35  mx-auto sm:mx-0"
          />
          
          <p class="rounded-md sm:text-align xl:text-lg my-4 text-center sm:text-left xl:max-w-2xl 2xl:max-w-3xl"
          >
            HelPhin adalah platform edukasi kolaboratif yang menghubungkan
            sesama pelajar untuk mendapatkan bantuan akademik. Dapatkan solusi
            belajar terjangkau dan kesempatan menghasilkan pendapatan tambahan
            dengan membantu sesama. Bergabunglah di komunitas belajar yang
            mendukung di HelPhin!
          </p>

          <div class="flex gap-2 sm:hidden justify-center">
            <a href="#">
              <img
                src="./assets/images/download-app-store.png"
                alt="download-app-store"
                class="h-12"
              />
              <span class="sr-only">Download di App Store</span>
            </a>
            <a href="#">
              <img
                src="./assets/images/download-play-store.png"
                alt="download-play-store"
                class="h-13"
              />
              <span class="sr-only">Download di Play Store</span>
            </a>
          </div>

          <img
            src="./assets/images/demo.png"
            alt="demo"
            class="sm:hidden mx-auto"
          />

          <div class="gap-2 hidden sm:flex">
            <a href="#">
              <img
                src="./assets/images/download-app-store.png"
                alt="download-app-store"
                class="h-12 xl:h-20 2xl:h-20"
              />
              <span class="sr-only">Download di App Store</span>
            </a>
            <a href="#">
              <img
                src="./assets/images/download-play-store.png"
                alt="download-play-store"
                class="h-12 xl:h-25 2xl:h-20"
              />
              <span class="sr-only">Download di Play Store</span>
            </a>
          </div>
        </div>

        <img
          src="./assets/images/demo.png"
          alt="demo"
          class="flex-1 hidden sm:block max-w-64 sm:max-w-xs md:max-w-sm lg:max-w-md xl:max-w-2lg "
        />
      </div>
    </section>

    <!-- About -->
    <div class="rounded-[3rem] bg-x-blue h-40 -mt-10 relative px-12">
      <div class="relative max-w-4xl mx-auto">
        <!-- Judul "About helPhin" -->
        <div class="absolute position-text -top-10 left-0 bg-x-blue rounded-[5rem] p-3">
          <h1
            class="font-bold font-mplus px-8 sm:px-16 py-3 sm:py-2 bg-x-lightblue rounded-[5rem]"
            style="font-size: calc(1rem + 1vw);" 
          >
            About helPhin
          </h1>
        </div>
    
        <!-- Gambar Dolfi -->
        <img
          src="./assets/images/dolfi.png"
          alt="dolfi"
          class="absolute position-dolfi hidden md:block"
        />
      </div>
    </div>
    
    <section id="about"class="px-6 py-10 rounded-[3rem] bg-x-darkblue -mt-24 z-10 relative">
      <div class="grid grid-cols-1 max-w-4xl 2xl:max-w-8xl mx-auto text-sm sm:text-base xl:text-lg 2xl:text-xl">
        
        <div class="flex items-center gap-4 mt-10 mb-4">
          <img style="background-repeat: no-repeat; background-position: center; background-size: contain; background-image:url('./assets/images/bg-gif-1.png') ;"
              src="./assets/images/GifPage1.gif"
              alt="about 1"
              class="basis-1/3 sm:basis-1/3 flex-1 hidden sm:block max-w-64 sm:max-w-xs md:max-w-sm lg:max-w-md xl:max-w-2lg"
            />
          <div class="flex-1 space-y-6 md:space-y-8 lg:space-y-10 ">
            <img style="background-repeat: no-repeat; background-position: center; background-size: contain; background-image:url('./assets/images/bg-gif-1.png') ;"
              src="./assets/images/GifPage1.gif"
              alt="about 1"
              class="basis-1/3 sm:basis-1/3 sm:hidden mx-auto"
            />
            <div class="flex-1 ">
              <h1 class="text-xl mb-3 text-center sm:text-left sm:text-2xl font-bold font-mplus">Beralih Peran, Dapatkan Bantuan atau Tambah Penghasilan</h1>
              <p class="rounded-md sm:text-align xl:text-lg my-4 text-center sm:text-left xl:max-w-2xl 2xl:max-w-3xl">
                Di helPhin, kamu bisa dengan mudah beralih peran antara User dan
                Helper. Kapanpun kamu butuh uang saku, kamu bisa membantu teman
                lain. Dan kapanpun kamu butuh bantuan, kamu bisa dengan cepat
                menemukan Helper yang tepat.
              </p>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-4 mb-4">
          <div class="flex-1 space-y-6 md:space-y-8 lg:space-y-10 ">
            <img style="background-repeat: no-repeat; background-position: center; background-size: contain; background-image:url('./assets/images/bg-gif-1.png') ;"
              src="./assets/images/GifPage2.gif"
              alt="about 2"
              class="basis-1/3 sm:basis-1/3 sm:hidden mx-auto"
            />
            <div class="flex-1 ">
              <h1 class="text-xl mb-3 text-center sm:text-right sm:text-2xl font-bold font-mplus">Temukan Bantuan untuk Semua Mata Pelajaran di Helphin!</h1>
              <p class="rounded-md sm:text-align xl:text-lg my-4 text-center sm:text-right xl:max-w-2xl 2xl:max-w-3xl">
                HelPhin menyediakan pilihan mata pelajaran yang sangat beragam,
                mulai dari Matematika, Fisika, Kimia, Bahasa Inggris, hingga mata
                pelajaran lainnya. Kamu pasti akan menemukan bantuan yang kamu
                butuhkan di sini.
              </p>
            </div>
          </div>
          <img style="background-repeat: no-repeat; background-position: center; background-size: contain; background-image:url('./assets/images/bg-gif-1.png') ;"
              src="./assets/images/GifPage2.gif"
              alt="about 2"
              class="basis-1/3 sm:basis-1/3 flex-1 hidden sm:block max-w-64 sm:max-w-xs md:max-w-sm lg:max-w-md xl:max-w-2lg"
            />
        </div>

        <div class="flex items-center gap-4 mb-10">
          <img style="background-repeat: no-repeat; background-position: center; background-size: contain; background-image:url('./assets/images/bg-gif-1.png') ;"
              src="./assets/images/GifPage3.gif"
              alt="about 3"
              class="basis-1/3 sm:basis-1/3 flex-1 hidden sm:block max-w-64 sm:max-w-xs md:max-w-sm lg:max-w-md xl:max-w-2lg"
            />
          <div class="flex-1 space-y-6 md:space-y-8 lg:space-y-10 ">
            <img style="background-repeat: no-repeat; background-position: center; background-size: contain; background-image:url('./assets/images/bg-gif-1.png') ;"
              src="./assets/images/GifPage3.gif"
              alt="about 3"
              class="basis-1/3 sm:basis-1/3 sm:hidden mx-auto"
            />
            <div class="flex-1 ">
              <h1 class="text-xl mb-3 text-center sm:text-left sm:text-2xl font-bold font-mplus">Sesuaikan Harga Bantuan Sesuai Budgetmu di Helphin!</h1>
              <p class="rounded-md sm:text-align xl:text-lg my-4 text-center sm:text-left xl:max-w-2xl 2xl:max-w-3xl">
                Di helPhin, kamu bisa menentukan harga yang sesuai dengan budgetmu.
                User bisa membuat permintaan bantuan dengan tawaran harga mereka
                sendiri, dan Helper bisa menawar jika dirasa terlalu murah.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section id="team" class="bg-x-lightblue p-8 rounded-[3rem] relative z-20 -mt-14">
      <div class="relative max-w-4xl mx-auto">
        <div class="absolute -top-[3.5rem] right-4 lg:right-0 bg-x-lightblue rounded-[5rem] p-3 z-20">
          <h1 style="font-size: calc(5rem - 3.5rem);" class="font-bold font-mplus px-8 sm:px-16 py-3 sm:py-4 bg-x-blue rounded-[5rem]">
            Meet Our Team
          </h1>
        </div>
      </div>
    
      <div class="value rounded-[3rem] px-4 pt-12 pb-36 bg-x-extra-lightblue font-mplus z-10 relative">
        <!-- Flexbox Grid -->
        <div class=" team-container ">
          <!-- Baris pertama (3 foto) -->
             <div class="team-row">
               <div class="team-item">
                 <img src="./assets/images/albumDepartemen/ceo.jpg" alt="CEO" />
               </div>
               <div class="team-item">
                 <img src="./assets/images/albumDepartemen/cto.jpg" alt="CTO" />
               </div>
               <div class="team-item">
                 <img src="./assets/images/albumDepartemen/cmo.jpg" alt="CMO" />
               </div>
             </div>
             <!-- Baris kedua (2 foto) -->
             <div class="team-row">
               <div class="team-item ">
                 <img src="./assets/images/albumDepartemen/cfo.jpg" alt="CFO" />
               </div>
               <div class="team-item ">
                 <img src="./assets/images/albumDepartemen/coo.jpg" alt="COO" />
               </div>
             </div>
        </div>
    
        <a style="margin-top: 3rem;"class="btn relative max-w-64 mx-auto flex justify-center"href="{{ url('/team') }}">
          Show All
        </a>
      </div>
    </section>

    <!-- Album -->
    <section
      id="album"
      class="bg-x-blue p-4 rounded-t-[2rem] relative z-30 -mt-14"
    >
      <div class="relative max-w-4xl mx-auto">
        <div
          class="absolute -top-[3.5rem] left-4 lg:left-0 bg-x-blue rounded-[5rem] p-3 z-20"
        >
          <h1
            style="font-size: calc(5rem - 3.5rem);"
            class="font-bold font-mplus px-8 sm:px-16 py-3 sm:py-4 bg-x-lightblue rounded-[5rem]"
          >
            helPhin Album
          </h1>
        </div>
      </div>

      <div class="px-4 rounded-t-[2rem] px-4 py-12 font-mplus z-10 relative">
        <div class="grid md:px-2 grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 lg:gap-8">
          <img src="./assets/images/album-1.png" alt="album 1" />
          <img src="./assets/images/album-3.png" alt="album 3" />
          <img src="./assets/images/album-5.png" alt="album 4" />
          <img src="./assets/images/album-6.png" alt="album 4" />
          <img src="./assets/images/album-7.png" alt="album 4" />
          <img src="./assets/images/album-8.png" alt="album 4" />
        </div>
      </div>
    </section>

    <!-- Footer -->
    @include('general.footer')

    <script src="./assets/js/index.js"></script>
  </body>
</html>
