<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Not Found!!</title>
    <link rel="icon" href="./assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
  </head>
  <body class="font-sans antialiased text-white bg-x-blue">
    <!-- Header -->
    @include('general.navbar')

    <!-- Hero -->
    <section
      class="relative flex-1 bg-x-lightblue grid pb-24 min-h-screen overflow-hidden">
      <img
        src="./assets/images/hero-vector.png"
        alt="hero"
        class="absolute inset-0 w-full h-full object-cover"
      />
    <div class="value relative mt-20 rounded-[3rem] flex justify-center items-center justify-evenly mx-10 bg-x-navy/80 gap-4 p-8 lg:px-16">
        <div class="flex-1 p-2 space-y-1 md:space-y-8 lg:space-y-8 xl:space-y-8 2xl:space-y-8">
            <h1 class="text-center text-3xl sm:text-4xl mb-2 font-bold font-mplus">404</h1>
            <h2 class="text-sm  text-center sm:text-3xl">Oops! Halaman Ini Tidak Dapat Ditemukan</h2>
            <a style="margin-top: 3rem;" class="btn relative max-w-64 mx-auto flex justify-center" href="{{ url('/') }}">Kembali</a>
        </div>
    </div>
    </section>

    <!-- Download -->
    <section class="px-4 py-6 bg-x-navy">
      <div
        class="max-w-4xl 2xl:max-w-4xl mx-auto flex sm:justify-evenly sm:items-center flex-col sm:flex-row gap-6"
      >
        <div class="space-y-2">
          <h1 class="text-xl sm:text-2xl font-bold">
            Dapatkan Kami Di Device Anda
          </h1>
          <p class="text-sm xl:text-base">
            Anda bisa men-download aplikasi kami di Android dan juga iOS
          </p>
        </div>

        <div class="flex gap-2 flex-none">
          <a href="#">
            <img
              src="./assets/images/download-app-store.png"
              alt="download-app-store"
              class="h-12 2xl:h-16"
            />
            <span class="sr-only">Download di App Store</span>
          </a>
          <a href="#">
            <img
              src="./assets/images/download-play-store.png"
              alt="download-play-store"
              class="h-12 2xl:h-16"
            />
            <span class="sr-only">Download di Play Store</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    @include('general.footer')

    <script src="./assets/js/index.js"></script>
  </body>
</html>
