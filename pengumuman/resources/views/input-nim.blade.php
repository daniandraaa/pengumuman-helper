<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | HelPhin</title>
    <link rel="icon" href="assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <style>
      .error-message {
        color: red;
        font-size: 0.9rem;
        margin-bottom: 1rem;
        display: none; /* Tersembunyi secara default */
      }
    </style>
  </head>
  <body style="background-image: url(./assets/images/bg-section.svg); background-size: auto;" class="font-sans antialiased text-white bg-x-extra-lightblue-transparan">
    <!-- Header -->
    @include('general.navbar')

    <section class="relative flex-1 grid overflow-hidden">
      <div class="relative sm:p-6 flex items-center justify-evenly gap-1 p-4 lg:px-18">
        <div class="flex-1 space-y-6 md:space-y-8 lg:space-y-10">
          <div class="flex items-center gap-4 mb-4">
            <img
              src="./aset/iconPengumuman.png"
              alt="about 1"
              class="basis-1/3 sm:basis-1/3 flex-1 hidden sm:block max-w-64 sm:max-w-xs md:max-w-sm lg:max-w-md xl:max-w-2lg"
            />
            <div class="flex-1 space-y-6 md:space-y-8 lg:space-y-10">
              <img
                src="./aset/iconPengumuman.png"
                alt="about 1"
                class="basis-1/3 sm:basis-1/3 sm:hidden mx-auto"
              />
              <div class="flex-1 md:px-kelulusan p-kelulusan">
                <h1 style="font-size: calc(1.5rem + 1vw); color: #2D78DB;" class="text-center sm:text-left font-bold font-mplus">
                  PENGUMUMAN HELPER
                </h1>
                <h3 style="font-size: calc(1rem + 0.5vw); color: #74B0FF;" class="mb-4 text-center sm:text-left font-bold font-mplus">
                  Cek Kelulusan Anda di Sini
                </h3>
                <!-- Pesan kesalahan -->
                <div id="error-message" class="error-message">
                  Masukkan NIM dengan angka saja!
                </div>
                <form id="nim-form" style="color: black;" action="{{ route('check-nim') }}" method="POST">
                  @csrf
                  <input
                    class="mb-2"
                    type="text"
                    id="nim"
                    name="nim"
                    placeholder="Masukkan NIM"
                    required
                  />
                  <button id="check-button" class="btn-check" type="submit">LIHAT KELULUSAN</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      // Event listener pada form submit
      document.getElementById('nim-form').addEventListener('submit', function (event) {
        const nimInput = document.getElementById('nim');
        const nimValue = nimInput.value.trim();
        const errorMessage = document.getElementById('error-message');

        // Validasi input: hanya angka
        if (!/^\d+$/.test(nimValue)) {
          event.preventDefault(); // Mencegah form terkirim
          errorMessage.style.display = 'block'; // Tampilkan pesan kesalahan
          nimInput.focus(); // Fokus kembali ke input
        } else {
          errorMessage.style.display = 'none'; // Sembunyikan pesan kesalahan jika valid
        }
      });
    </script>
  </body>
</html>
