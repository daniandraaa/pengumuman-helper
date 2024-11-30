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

    <!-- Footer -->
    @include('general.footer')

    <script src="./assets/js/index.js"></script>
  </body>
</html>
