

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

    <section class="relative flex-1 grid overflow-hidden">
      <div class="relative sm:p-6 flex items-center justify-evenly gap-1 p-4 lg:px-18">
        <div
          class="flex-1 space-y-6 md:space-y-8 lg:space-y-10 "
        >
          <div class="flex items-center gap-4 mb-4">
            <img
                src="./aset/iconPengumuman.png"
                alt="about 1"
                class="basis-1/3 sm:basis-1/3 flex-1 hidden sm:block max-w-64 sm:max-w-xs md:max-w-sm lg:max-w-md xl:max-w-2lg"
              />
            <div class="flex-1 space-y-6 md:space-y-8 lg:space-y-10 ">
              <img
                src="./aset/iconPengumuman.png"
                alt="about 1"
                class="basis-1/3 sm:basis-1/3 sm:hidden mx-auto"
              />
              <div class="flex-1 md:px-1 p-kelulusan">
                <h1 style="font-size: calc(1.5rem + 1vw);  color: #2D78DB;" class="text-center sm:text-left font-bold font-mplus">PENGUMUMAN HELPHER</h1>
                <h3 style="font-size: calc(1rem + 0.5vw); color: #74B0FF;" class="mb-4 text-center sm:text-left font-bold font-mplus">description title</h3>
                  <form style="color: black;" action="{{ route('check-nim') }}" method="POST">
                    @csrf
                    <input type="text" placeholder="Nama Lengkap" />
                    <input class="mb-2" type="text" name="nim" placeholder="Masukkan NIM" required />
                    <button class="btn-check" type="submit">LIHAT KELULUSAN</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>   
    

    <script src="./assets/js/index.js"></script>
  </body>
</html>

