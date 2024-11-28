<footer id="contact" class="px-4 pt-6 pb-4 bg-x-navy mt-10">
      <div class="max-w-4xl mx-auto space-y-4">
        <div
          class="flex flex-col sm:flex-row gap-6 items-center justify-evenly border-b-2 border-x-yellow pb-4"
        >
          <a href="#" class="flex-none">
            <img src="./assets/images/logo-text.png" alt="logo" class="h-10" />
            <span class="sr-only">helPhin</span>
          </a>

          <div class="flex items-center gap-4 flex-wrap break-words">
            <div class="flex items-center gap-2">
              <a href="mailto:helphincorp@gmail.com">
                <img
                  src="./assets/images/icon-mail.png"
                  alt="icon mail"
                  class="h-10"
                />
              </a>
              <a href="mailto:helphincorp@gmail.com">
                <div class="space-y-1">
                  <h6 class="text-sm">Email Kami</h6>
                  <p class="text-xs">helphincorp@gmail.com</p>
                </div>
              </a>
            </div>

            <div class="flex items-center gap-2">
              <a href="wa.me/6285133332553">
                <img
                  src="./assets/images/icon-phone.png"
                  alt="icon mail"
                  class="h-10"
                />
              </a>
              <a href="wa.me/6285133332553">
                <div class="space-y-1">
                  <h6 class="text-sm">Kontak Kami</h6>
                  <p class="text-xs">+62 851-3333-2553</p>
                </div>
              </a>
            </div>

            <div class="flex items-center gap-2">
              <a href="https://maps.app.goo.gl/YLA1zDByPzFpXVLX6">
                <img
                  src="./assets/images/icon-location.png"
                  alt="icon mail"
                  class="h-10"
                />
              </a>
              <a href="https://maps.app.goo.gl/YLA1zDByPzFpXVLX6">
                <div class="space-y-1">
                  <h6 class="text-sm">Lokasi</h6>
                  <p class="text-xs">Indonesia</p>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div
          class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 border-b-2 border-x-yellow pb-4"
        >
          <div class="flex flex-col justify-evenly gap-4">
            <p class="text-sm">
              Kalian bisa terhubung dengan kami melalui media sosial berikut ini
            </p>

            <div class="flex items-center gap-2 flex-wrap">
              <a href="https://www.instagram.com/helphin.id?igsh=a2c4c3c3MzBqNHc=">
                <img
                  src="./assets/images/icon-instagram.png"
                  alt="icon instagram"
                  class="h-10"
                />
                <span class="sr-only">Instagram</span>
              </a>

              <a href="https://www.linkedin.com/company/helphin-indonesia/">
                <img
                  src="./assets/images/icon-linkedin.png"
                  alt="icon facebook"
                  class="h-10"
                />
                <span class="sr-only">Linkedin</span>
              </a>

              <a href="#">
                <img
                  src="./assets/images/icon-x.png"
                  alt="icon twitter"
                  class="h-10"
                />
                <span class="sr-only">X</span>
              </a>

              <a href="https://www.tiktok.com/@helphinid?is_from_webapp=1&sender_device=pc">
                <img
                  src="./assets/images/icon-tiktok.png"
                  alt="icon tiktok"
                  class="h-10"
                />
                <span class="sr-only">Tiktok</span>
              </a>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="flex-1">
              <h6 class="mb-2">Jelajahi</h6>
              <ul class="space-y-1 text-sm">
                <li>
                  <a href="{{ url('/about') }}">Tentang Kami</a>
                </li>
                <li>
                  <a href="{{ url('/404') }}">FAQ</a>
                </li>
              </ul>
            </div>

            <div class="flex-1">
              <h6 class="mb-2">Link Instan</h6>
              <ul class="space-y-1 text-sm">
                <li>
                  <a href="{{ url('/customerService') }}">Customer Service</a>
                </li>
                <li>
                  <a href="{{ url('/contactUs') }}">Hubungi Kami</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="md:place-self-center">
            <h6 class="mb-2">Halaman Utilitas</h6>
            <ul class="space-y-1 text-sm">
              <li>
                <a href="{{ url('/404') }}">Perizinan</a>
              </li>
              <li>
                <a href="{{ url('/privasi') }}">Kebijakan & Privasi</a>
              </li>
              <li>
                <a href="{{ url('/404') }}">404 Page</a>
              </li>
            </ul>
          </div>
        </div>

        <p class="text-xs text-center">
          Copyright © helPhin | Designed by helPhin Disign Team
        </p>
      </div>
    </footer>