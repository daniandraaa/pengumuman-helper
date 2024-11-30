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

    <div class="md:px-2">
      <div id="content-id-bahasa" style=" display: block;">
        <h1 style="color: black;" class="text-xl mx-2 mb-2 sm:text-3xl font-bold font-mplus">Bahasa</h1>
      </div>
      <div id="content-en-language" style=" display: none;">
        <h1 style="color: black;" class="text-xl mx-2 mb-2 sm:text-3xl font-bold font-mplus">Language</h1>
      </div>
      <div class="language-switch flex  mt-4">
        <button id="btn-id"class="language-btn active px-4 py-2 mx-2 bg-x-yellow text-black font-bold rounded-md hover:bg-yellow-500">
          Bahasa Indonesia
        </button>
        <button id="btn-en" class="language-btn px-4 py-2  bg-x-yellow text-black font-bold rounded-md hover:bg-yellow-500">
          English
        </button>
      </div>
      
      <!-- privasi -->
      <section id="team" class="bg-x-lightblue p-4 pb-0 rounded-t-[2rem] relative mt-20">
      <!-- id-krbijakan -->
       <div id="content-id-privasi" style="display: block;">
         <div style=" justify-content: end;" class="relative max-w-4xl mx-auto flex ">
           <div class="absolute -top-11 bg-x-lightblue rounded-[5rem] p-3 z-20">
             <h1 class="text-xl text-center sm:text-3xl font-bold font-mplus px-8 sm:px-10 py-3 sm:py-4 bg-x-blue rounded-[5rem]">
               Kebijakan & Privasi 
             </h1>
           </div>
         </div>
       </div>
        <!-- en-kebijakan -->
         <div id="content-en-privacy" style="display: none;">
           <div  style="justify-content: end;" class="relative max-w-4xl mx-auto flex ">
             <div class="absolute -top-11 bg-x-lightblue rounded-[5rem] p-3 z-20">
               <h1 class="text-xl text-center sm:text-3xl font-bold font-mplus px-8 sm:px-10 py-3 sm:py-4 bg-x-blue rounded-[5rem]">
                 Privacy & Policy 
               </h1>
             </div>
           </div>
         </div>

        <!-- id -->
        <div id="content-id" style=" display: block; text-align: justify; color: black;" class="value rounded-t-[2rem] px-12 pt-12 pb-8 bg-x-extra-lightblue z-10 relative ">
          <br>
          <!-- 1.Pendahuluan -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">1. Pendahuluan</h1>
          <h3 class="mb-4 font-mplus">Selamat datang di helPhin! Kami berkomitmen untuk melindungi privasi Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan membagikan informasi Anda saat Anda menggunakan aplikasi helPhin. Dengan menggunakan helPhin, Anda menyetujui praktik yang dijelaskan dalam kebijakan ini.</h3>
          
          <!-- 2.  Informasi yang Kami Kumpulkan -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">2.  Informasi yang Kami Kumpulkan</h1>
          <h3 class="mb-2 font-mplus">
            -	Informasi yang Anda berikan: Nama, alamat email, nomor telepon, foto profil (opsional), lokasi, detail pembayaran, dan komunikasi dalam aplikasi.
          </h3>
          <h3 class="mb-4 font-mplus">
            -	Informasi yang dikumpulkan secara otomatis: Data penggunaan aplikasi, alamat IP, jenis perangkat, dan informasi sistem operasi.
          </h3>
  
          <!-- 3.	Bagaimana Kami Menggunakan Informasi Anda  -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">3.	Bagaimana Kami Menggunakan Informasi Anda </h1>
            <h3 class="mb-2 font-mplus">
              - Menyediakan dan meningkatkan layanan helPhin. 
            </h3>
            <h3 class="mb-2 font-mplus">
              - Menghubungkan Anda dengan pengguna atau helper yang relevan. Memproses transaksi. 
            </h3>
            <h3 class="mb-2 font-mplus">
              - Mengirimkan notifikasi dan pembaruan. 
            </h3>
            <h3 class="mb-2 font-mplus">
              - Menganalisis penggunaan aplikasi untuk peningkatan performa dan fitur. 
            </h3>
            <h3 class="mb-2 font-mplus">
              - Melindungi dari aktivitas penipuan dan penyalahgunaan. 
            </h3>
            <h3 class="mb-4 font-mplus">
              - Mematuhi kewajiban hukum.
            </h3>
  
          <!-- 4.	Pembagian Informasi Anda -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">4.	Pembagian Informasi Anda</h1>
          <h3 class="mb-2 font-mplus">
            Kami tidak menjual informasi pribadi Anda. Kami mungkin membagikan informasi Anda dengan: 
          </h3>
          <h3 class="mb-2 font-mplus">
            - Penyedia layanan tepercaya: Mitra yang membantu kami dalam menyediakan layanan (misalnya, pemrosesan pembayaran, layanan cloud), dengan kewajiban menjaga kerahasiaan data. 
          </h3>
          <h3 class="mb-2 font-mplus">
            - Pengguna lain: Informasi profil dan lokasi Anda (dengan persetujuan Anda) untuk memfasilitasi koneksi layanan. 
          </h3>
          <h3 class="mb-4 font-mplus">
            - Pihak berwenang: Jika diwajibkan oleh hukum atau untuk melindungi hak, properti, atau keamanan kami dan pengguna.
          </h3>
         
          <!-- 5. Keamanan Data -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">5. Keamanan Data</h1>
          <h3 class="mb-4 font-mplus">Kami menerapkan langkah-langkah keamanan standar industri untuk melindungi informasi Anda, termasuk enkripsi data dan kontrol akses yang ketat. Namun, tidak ada metode transmisi data melalui internet yang 100% aman.</h3>
          
          <!-- 6. Hak Anda  -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">6. Hak Pengguna dan Kontrol</h1>
          <h3 class="mb-4 font-mplus">Anda dapat mengakses, mengoreksi, dan menghapus informasi pribadi Anda melalui pengaturan akun atau dengan menghubungi kami.</h3>
          
            <!-- 7. Perubahan pada Kebijakan Privasi -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">7. Perubahan pada Kebijakan Privasi</h1>
          <h3 class="mb-4 font-mplus">Kami dapat memperbarui kebijakan ini. Perubahan materi akan diumumkan melalui aplikasi atau email.</h3>
          
          <!-- 8.	Hubungi Kami  -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">8.	Hubungi Kami </h1>
          <h3 class="mb-4 font-mplus">Jika Anda memiliki pertanyaan, silakan hubungi kami di: helphincontact@gmail.com.</h3>
          
          <h3 class="mb-4 font-mplus">Efektif mulai 20 Oktober, 2024</h3>
          <hr class="border-t border-gray-300 my-4 mb-4">
          <a class="btn relative max-w-64 mx-auto flex justify-center" href="{{ url('/') }}">Kembali</a>
        </div>
        <!-- en -->
        <div id="content-en" style=" display: none; text-align: justify; color: black;" class="value rounded-t-[2rem] px-12 pt-12 pb-8 bg-x-extra-lightblue z-10 relative ">
          <br>
          <!-- 1.Introduction -->
          <h1 class="text-xl mb-2 sm:text-2xl font-bold font-mplus">1. Introduction</h1>
          <h3 class="mb-4 font-mplus">Welcome to helPhin! We are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and share your information when you use the helPhin application. By using helPhin, you agree to the practices described in this policy.</h3>
  
          <!-- 2.	Information We Collect  -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">2.	Information We Collect</h1>
          <h3 class="mb-2 font-mplus">
            - Information you provide: Name, email address, phone number, profile picture (optional), location, payment details, and in-app communications. 
          </h3>
          <h3 class="mb-4 font-mplus">
            - Information collected automatically: App usage data, IP address, device type, and operating system information.
          </h3>
          
    
          <!-- 3.	How We Use Your Information -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">3. How We Use Your Information</h1>
            <h3 class="mb-2 font-mplus"> 
              - To provide and improve helPhin services. 
            </h3>
            <h3 class="mb-2 font-mplus"> 
              - To connect you with relevant users or helpers. 
            </h3>
            <h3 class="mb-2 font-mplus"> 
              - To process transactions. 
            </h3>
            <h3 class="mb-2 font-mplus"> 
              - To send notifications and updates. 
            </h3>
            <h3 class="mb-2 font-mplus"> 
              - To analyze app usage for performance and feature improvements. 
            </h3>
            <h3 class="mb-2 font-mplus"> 
              - To protect against fraudulent activity and misuse. 
            </h3>
            <h3 class="mb-4 font-mplus"> 
              - To comply with legal obligations.
            </h3>
  
          <!-- 4. Sharing Your Information  -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">4.	Sharing Your Information </h1>
          <h3 class="mb-2 font-mplus">
            We do not sell your personal information. We may share your information with:
          </h3>
          <h3 class="mb-2 font-mplus">
            - Trusted service providers: Partners who assist us in providing services (e.g., payment processing, cloud services), under strict confidentiality obligations. 
          </h3>  
          <h3 class="mb-2 font-mplus">
            - Other users: Your profile information and location (with your consent) to facilitate service connections. 
          </h3>  
          <h3 class="mb-4 font-mplus">
            - Authorities: If required by law or to protect our rights, property, or safety, and that of our users.
          </h3>  
          
          <!-- 5.	Data Security -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">5. Data Security</h1>
          <h3 class="mb-4 font-mplus">We implement industry-standard security measures to protect your information, including data encryption and strict access controls. However, no method of data transmission over the internet is 100% secure.</h3>
  
          <!-- 6. Your Rights -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">6. Your Rights</h1>
          <h3 class="mb-4 font-mplus">
            You can access, correct, and delete your personal information through your account settings or by contacting us.
          </h3>
  
          <!-- 7.	Changes to this Privacy Policy  -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">7. Changes to this Privacy Policy</h1>
          <h3 class="mb-4 font-mplus">We may update this policy. Material changes will be notified through the app or by email.</h3>
          
          <!-- 8. Contact Us -->
          <h1 style="text-align: start;" class="text-xl mb-2 sm:text-2xl font-bold font-mplus">8. Contact Us</h1>
          <h3 class="mb-4 font-mplus">If you have any questions, please contact us at: helphincontact@gmail.com.</h3>
          
          <h3 class="mb-4 font-mplus">Effective as of October 20, 2024</h3>  
        </div>
      </section>   
    </div>
    
      <!-- Footer -->
      @include('general.footer')
    

    <script src="./assets/js/index.js"></script>
  </body>
</html>
