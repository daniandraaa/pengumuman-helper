<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HelPhin</title>
    <link rel="icon" href="./assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
  </head>
  <body class="font-sans antialiased text-white bg-x-blue">
    <!-- Header -->
    @include('general.navbarDepartemen')

    <!-- head -->
    <section class="header">
      <div class="header-img-cover">
        <img
          src="./assets/images/Background-header.svg"
          alt="Header"
        />
        <div class="header-content-cover">
          <h1 class="text-xl mb-2 sm:-mb-0 sm:text-3xl font-bold font-mplus" >MEET OUR TEAM</h1>
          <p style="font-size: calc(14px + ((1vw - 7.68px) * 0.6944));">Build innovative digital solutions to help learners with Helphin</p>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section
      id="team"
      class="absolute -top-[3.5rem] bg-x-lightblue sm:mt-2 p-2 rounded-t-[2rem] relative"
    >
      <div class="max-w-4xl mx-auto ">
        <div
          class="flex justify-center items-center right-4 lg:right-0 bg-x-lightblue rounded-[5rem] p-3 z-20"
        >
        <div class="absolute -top-[3.5rem] sm:-top-[3.5rem] bg-x-lightblue p-4 rounded-[5rem]">
            <h1
                style="text-align: center; font-size: calc(1rem + ((1vw - 10px) * 1));"
                class=" text-xl sm:text-2xl font-bold px-8  py-3 bg-x-blue rounded-[5rem]"
            >
            HELPHIN'S TEAMS LEADER
            </h1>
        </div>
        </div>
      </div>

      <div class="value rounded-t-[2rem] px-4 pt-12 pb-8 bg-x-extra-lightblue font-mplus z-10 relative">
        <!-- Flexbox Grid -->
        <div class=" team-container ">
          <!-- Baris pertama (3 foto) -->
             <div class="team-row">
               <div class="team-item">
                 <img src="./assets/images/albumDepartemen/ceo.jpg" alt="CEO" />
               </div>
               <div class="team-item">
                 <img src="./assets/images/albumDepartemen/cto.jpg" alt="CTO" />
               </div>
               <div class="team-item">
                 <img src="./assets/images/albumDepartemen/cmo.jpg" alt="CMO" />
               </div>
             </div>
             <!-- Baris kedua (2 foto) -->
             <div class="team-row">
               <div class="team-item ">
                 <img src="./assets/images/albumDepartemen/cfo.jpg" alt="CFO" />
               </div>
               <div class="team-item ">
                 <img src="./assets/images/albumDepartemen/coo.jpg" alt="COO" />
               </div>
             </div>
        </div>
      </div>
    </section>

    <section
      id="album-team"
      class="value bg-x-blue mb-8 p-4  relative z-30 -mt-14"
    >
    <div class="max-w-4xl mx-auto ">
      <div
        class="flex justify-center items-center right-4 lg:right-0 bg-x-blue p-3 rounded-[5rem]  z-20"
      >
      <div class="absolute -top-[3.5rem] sm:-top-[3.5rem] bg-x-blue p-4 rounded-[5rem]">
          <h1
              style="text-align: center; font-size: calc(1rem + ((1vw - 10px) * 1));"
              class=" text-xl sm:text-2xl font-bold px-8  py-3 bg-x-lightblue rounded-[5rem]"
          >
          Helphin'S Team Employees
          </h1>
      </div>
      </div>
    </div>
      <div class="photo-team-staf md:photo-team-staf md:px-2 grid gap-4 sm:mt-1 mb-4">
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff1.jpg" alt="staff 1" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff2.jpg" alt="staff 2" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff3.jpg" alt="staff 3" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff4.jpg" alt="staff 4" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff5.jpg" alt="staff 5" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff6.jpg" alt="staff 6" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff7.jpg" alt="staff 7" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff8.jpg" alt="staff 8" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff9.jpg" alt="staff 9" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff10.jpg" alt="staff 10" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff11.jpg" alt="staff 11" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff12.jpg" alt="staff 12" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff13.jpg" alt="staff 13" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0 ">
          <img src="./assets/images/albumDepartemen/staff14.jpg" alt="staff 14" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff15.jpg" alt="staff 15" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff16.jpg" alt="staff 16" class="photo photo-5">
        </div>
        <div class="profile-container mb-2 sm:mb-0">
          <img src="./assets/images/albumDepartemen/staff17.jpg" alt="staff 17" class="photo photo-5">
        </div>
      </div>
      <a class="btn relative max-w-64 mx-auto flex justify-center" href="{{ url('/') }}">Kembali</a>
    </section>

    <!-- Footer -->
    @include('general.footer')

    <script src="./assets/js/index.js"></script>
  </body>
</html>
