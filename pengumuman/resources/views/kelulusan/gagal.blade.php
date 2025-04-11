<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | HelPhin</title>
    <link rel="icon" href="./assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/styles-lulus.css') !!}">
  </head>
  <body style="background-image: url(./assets/images/bg-section.svg); background-size: auto; " class="font-sans antialiased text-white bg-x-extra-lightblue-transparan">
    <!-- Header -->
    

    <section >
        <div id="Lulus" > 
            <div style="justify-content: center; align-items: center;" class="flex lulus-gap-2">
                <img
                    src="./assets/images/Nexilium-logo.svg"
                    alt="download-app-store"
                    class="h-12 lulus-h-12 2xl:h-16"
                />
                <img
                    src="./assets/images/logo-text2.svg"
                    alt="download-play-store"
                    class="lulus-h-10 2xl:h-16"
                />
            </div>
            <h1 class="font-bold font-mplus ">Pengumuman Helper</h1>
            <div class="lulus-object mt-10 mb-4">
                    <h3 class="font-bold font-mplus">{{ $nama }}</h3>
                    <h3 class="font-bold font-mplus">{{ $nim }}</h3>
                    <h3  style="color: #C62A2B;" class="status font-bold font-mplus">(Belum Lulus)</h3>
            </div>
            <h2 class="lulus-mb-4">Terima kasih atas partisipasi dan dedikasi Anda. Saat ini, Anda dinyatakan belum lulus pada seleski ini, kami sangat menghargai kemampuan dan komptensi Anda. Tetap semangat, terus berkembang, dan semoga sukses di kesempatan berikutnya.</h2>
            <a class="font-bold font-mplus" href="{{ url('/pengumuman') }}">Kembali</a>
        </div>
    </section>
   
  </body>
</html>
