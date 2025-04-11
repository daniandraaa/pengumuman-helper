<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | HelPhin</title>
    <link rel="icon" href="/assets/images/logo-short.png" type="image/x-icon"> 
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/styles-thankyou.css') !!}">
  </head>
  <body style="background-image: url(./assets/images/bg-section.svg); background-size: auto; " class="font-sans antialiased text-white bg-x-extra-lightblue-transparan">
    <!-- Header -->
    

    <section >
        <div id="Lulus" > 
            <div style="justify-content: center; align-items: center;" class="flex lulus-gap-2">
            <img
                src="{!! asset('assets/images/Nexilium-logo.svg') !!}"
                alt="download-app-store"
                class="h-12 lulus-h-12 2xl:h-16"
            />
            <img
                src="{!! asset('assets/images/logo-text2.svg') !!}"
                alt="download-play-store"
                class="lulus-h-10 2xl:h-16"
            />

            </div>
            <h1 class="font-bold font-mplus ">Terima kasih Atas Partisipasinya</h1>
            <div class="mb-4">
                    <h3 style="color:rgb(0, 0, 0);" class="status font-bold font-mplus notFound">Terima Kasih Telah Mendaftar Sebagai Helper di helPhin.id. Silahkan Tunggu
                    Pengumuman Kelulusan.</h3>
            </div>
            <a class="font-bold font-mplus" href="{{ url('/form-pendaftaran') }}">Kembali</a>
        </div>
    </section>
   
  </body>
</html>
