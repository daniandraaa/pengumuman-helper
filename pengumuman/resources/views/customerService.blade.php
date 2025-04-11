<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | HelPhin</title>
    <link rel="icon" href="assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.css" />
  </head>
  <body style="background-image: url(./assets/images/bg-section.svg); background-size: auto; " class="font-sans antialiased text-white bg-x-extra-lightblue-transparan">
    <!-- Header -->
    @include('general.navbar')

    <!-- Hero -->
    <section class="relative  flex-1 pt-6  grid pb-24 overflow-hidden">
      <img
        src="./aset/gelombang n.svg"
        alt="hero"
        class="absolute inset-0 w-full h-full sm:w-full object-cover scale-[2.5] sm:scale-100"
      />

      <div class="relative sm:p-6 flex items-center justify-evenly gap-1 p-4 lg:px-18">
        <div
          class="flex-1 space-y-6 md:space-y-8 lg:space-y-15 "
        >
          <img
            src="./aset/CustomerService.png"
            alt="demo"
            class="sm:hidden mx-auto"
          />

          <div class="z-10 " id="konten">
            <h1 class="font-mplus font-bold">Customer Service</h1>
            <h3>
              Hubungi kami untuk mendapatkan solusi cepat atas pertanyaan atau
              masalah Anda.
            </h3>
            <a id="hubungi-kami" href="{{ url('/contactUs') }}" onclick="hubungiKami(event)">Hubungi Kami</a>
          </div>

          <div class="flex gap-2 sm:hidden justify-center">
            <div class="z-10">
              <div id="icon-icon" class="icons">
                <a id="icon1" href="#"><img src="aset/Frame 6606.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon2" href="#"><img src="aset/Frame 6607.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon3" href="#"><img src="aset/Frame 6608.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon4" href="#"><img src="aset/Frame 6611.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon5" href="#"><img src="aset/Frame 6646.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon6" href="#"><img src="aset/Frame 6647.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
              </div>
            </div>
          </div>

          <div class="gap-2 hidden sm:flex">
            <div class="z-10">
              <div id="icon-icon" class="icons">
                <a id="icon1" href="#"><img src="aset/Frame 6606.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon2" href="#"><img src="aset/Frame 6607.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon3" href="#"><img src="aset/Frame 6608.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon4" href="#"><img src="aset/Frame 6611.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon5" href="#"><img src="aset/Frame 6646.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
                <a id="icon6" href="#"><img src="aset/Frame 6647.svg" alt="icon twitter" class="h-13 icon-animation"/></a>
              </div>
            </div>
          </div>
        </div>

        <img
          src="./aset/CustomerService.png"
          alt="demo"
          class="flex-1 hidden sm:block max-w-64 sm:max-w-xs md:max-w-sm lg:max-w-md xl:max-w-2lg "
        />
      </div>
    </section>

    <script src="./assets/js/index.js"></script>
  </body>
</html>
