<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | HelPhin</title>
    <link rel="icon" href="./assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/styles-perizinan.css') !!}">
  </head>
<body style="background-image: url(./assets/images/bg-section.svg); background-size: auto; " class="font-sans antialiased text-white bg-x-extra-lightblue-transparan">
    <!-- Header -->
    @include('general.navbar')
    <section id="bingkai"class="bg-x-lightblue p-4 rounded-t-[2rem] relative mt-20 md:px-perizinan">
        <div id="bingkai-dalam" style="background-color: white" class="value rounded-t-[2rem] px-12 pt-12 pb-8 z-10 relative md:px-surat ">
            {{-- konten untuk tulisan perizinan --}}
            <div id="konten-perizinan" style = "justify-content: end;" class = "relative max-w-5xl mx-auto flex -top-11">
                {{-- tulisan perizinan --}}
                <div class="absolute md:-top-perizinan md:-top-perizinan-1 bg-x-lightblue rounded-[5rem] p-3 z-20 sm:pcc-title sm:size-title ">
                    <h1 class="text-xl text-center sm:text-title-xl sm:text-3xl font-bold font-mplus px-8 sm:px-16 py-3 sm:py-4 bg-x-blue rounded-[5rem]">
                      Perizinan
                    </h1>
                </div>
            </div>
            
            {{-- surat-perizinan --}}
            <div>
                <img src="./assets/images/surat-perizinan.svg" alt="surat perizinan">
            </div>
            <div class="mt-10 mb-4 md:mx-button">
              <a id="kembali" class="relative max-w-64 mx-auto flex justify-center" href="http://127.0.0.1:8000">Kembali
              </a>
            </div>
        </div>
    </section>

     {{-- footer --}}
     @include('general.footer')

     <script src="./assets/js/index.js"></script>

</body>
</html>