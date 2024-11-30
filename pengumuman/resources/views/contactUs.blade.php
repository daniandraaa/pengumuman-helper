<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | HelPhin</title>
    <link rel="icon" href="./assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                
                <form action="{{ route('send.email') }}" method="POST">
                  @csrf
                  <input type="text" placeholder="Nama Lengkap" id="name" name="name" required/>
                  <input type="email" placeholder="Email" id="email" name="email" required/>
                  <textarea placeholder="Pesan Anda" id="message" name="message" required></textarea>
                  <button type="submit" id="kirim-button">Kirim</button>
                </form>
              </div>
        </div>
        <div id="maskot-kanan">
            <img style="background-size: cover;background-repeat: no-repeat;background-position: center;" src="./aset/CTO2mode.png" alt="" />
        </div>
    </section>

    <script src="./assets/js/index.js"></script>

    <!-- SweetAlert Script -->
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: "{{ session('success') }}",
                showConfirmButton: true,
            });
        </script>
    @endif
  </body>
</html>
