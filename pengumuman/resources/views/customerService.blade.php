<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | HelPhin</title>
    <link rel="icon" href="./assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
  <body id="customerService-body" class="font-sans antialiased text-white flex-col">
        <!-- Header -->
        <div class="min-h-screen flex-col">
            @include('general.navbar')
    
          <!-- CUSTOMER SERVICE SEBELUM ANIMASI -->
          <section class="grid pb-20" id="customerService">
            <img
              src="./aset/background.svg"
              alt="hero"
              class="absolute inset-0 w-full h-full object-cover of"
            />
            <img
              src="./aset/gelombang n.svg"
              alt="hero"
              class="absolute right-0 top-0  h-full"
              id="gelombang-n"
            />
            <div class="z-10" id="konten">
              <h1 class="font-mplus font-bold">Customer Service</h1>
              <h3>
                Hubungi kami untuk mendapatkan solusi cepat atas pertanyaan atau
                masalah Anda.
              </h3>
              <a id="hubungi-kami" href="{{ url('/contactUs') }}" onclick="hubungiKami(event)">Hubungi Kami</a>
            </div>
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
    
            <!-- CUSTOMER SERVICE SETELAH ANIMASI -->
            <div class="hidden" id="hiddenIcon">
              <div id="maskot-kiri">
                <img src="./aset/CMO mode.png" alt="" />
              </div>
              <div id="contact-section">
                <div class="form-container">
                  <h1>Contact Us</h1>
                  <h3>
                    Hubungi kami untuk mendapatkan solusi cepat atas pertanyaan atau
                    masalah Anda.
                  </h3>
                  <form>
                    <input type="text" placeholder="Nama Lengkap" />
                    <input type="email" placeholder="Email" />
                    <textarea placeholder="Pesan Anda"></textarea>
                    <button type="submit" id="kirim-button">Kirim</button>
                  </form>
                </div>
              </div>
              <div id="maskot-kanan">
                <img src="./aset/CTO2mode.png" alt="" />
              </div>
            </div>
            <!-- <div style="margin-bottom: 100rem;"><h1>ffff</h1></div> -->
          </section>
        </div>
        
        <script src="./assets/js/index.js"></script>
    </body>
    </html>
