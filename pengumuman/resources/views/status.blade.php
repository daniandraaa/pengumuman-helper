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

    <!-- congaratulation -->
    @if ($status === 1)
        <section class="mb-2">
            <div class="flex flex-col justify-center items-center font-mplus ">
                <div class="py-20 mt-25 px-12 sm:px-6 ">
                <h1 style="color:#2D78DB; " class="text-cong-xl font-mplus sm:text-cong ">
                    CONGRATULATIONS!
                </h1>
                </div>
                
                <!-- untuk tulisan nama -->
                <div class = "flex pb-4 "> 
                    <h1 style="background-color: #2D78DB;" class=" rounded-[5rem] px-12 py-3 text-xl sm:text-deskrip-cong" >
                        {{ $nama }}
                    </h1>
                </div>

                <div class="=flex justify-center  ">
                    <p class="" style="color: black; font-size: calc(18px + 2px); text-align: center; ">
                    Kamu menjadi bagian dari Helper. Kamu harus siap berkontribusi secara langsung untuk membantu para pelajar.
                    </p>
                </div>

            </div>
        </section>  
    @elseif ($status === null)
        <section class="mb-2">
            <div class="flex flex-col justify-center items-center font-mplus ">
                <div class="py-20 mt-25 px-12 sm:px-6 ">
                    <h1 style="color:#2D78DB; " class="text-cong-xl font-mplus sm:text-cong ">
                        Data Anda Tidak Ditemukan
                    </h1>
                </div>

                <div class="=flex justify-center  ">
                    <p class="" style="color: black; font-size: calc(18px + 2px); text-align: center; ">
                        Hubungi pihak kami untuk mendapatkan informasi lebih lanjut.
                    </p>
                </div>
            </div>
        </section> 
    @else
        <section class="mb-2">
            <div class="flex flex-col justify-center items-center font-mplus ">
                <div class="py-20 mt-25 px-12 sm:px-6 ">
                <h1 style="color:#2D78DB; " class="text-cong-xl font-mplus sm:text-cong ">
                    Tetap Semangat YA
                </h1>
                </div>
                
                <!-- untuk tulisan nama -->
                <div class = "flex pb-4 "> 
                    <h1 style="background-color: #2D78DB;" class=" rounded-[5rem] px-12 py-3 text-xl sm:text-deskrip-cong" >
                        {{ $nama }}
                    </h1>
                </div>

                <div class="=flex justify-center  ">
                    <p class="" style="color: black; font-size: calc(18px + 2px); text-align: center; ">
                    Meskipun kali ini belum berhasil, jangan putus asa! Terus belajar dan persiapkan dirimu lebih baik lagi untuk kesempatan selanjutnya.
                    </p>
                </div>

            </div>
        </section>
    @endif

    <script src="./assets/js/index.js"></script>
  </body>
</html>

