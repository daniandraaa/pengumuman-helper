<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | HelPhin</title>
    <link rel="icon" href="./assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
  </head>
  <body style="background-image: url(./assets/images/bg-section.svg); background-size: auto; " class="font-sans antialiased text-white bg-x-extra-lightblue-transparan">
    <!-- Header -->
    @include('general.navbar')

    <section>    
        <div id="maskot-kiri">
            <img
             src="./aset/CMO mode.png" alt="" />
        </div>
        <div id="contact-section" class="my-8">
            <div class="form-container">
                <h1 class="font-mplus font-bold" >Contact Us</h1>
                <h3>Hubungi kami untuk mendapatkan solusi cepat atas pertanyaan atau masalah Anda.</h3>
                <form>
                  <input type="text" placeholder="Nama Lengkap" />
                  <input type="email" placeholder="Email" />
                  <textarea placeholder="Pesan Anda"></textarea>
                  <button type="submit" id="kirim-button">Kirim</button>
                </form>
              </div>
        </div>
        <div id="maskot-kanan">
            <img style="background-size: cover;background-repeat: no-repeat;background-position: center; background-image: url(./aset/Rectangle2.svg);" src="./aset/CTO2mode.png" alt="" />
        </div>
    </section>

    <script src="./assets/js/index.js"></script>
  </body>
</html>
