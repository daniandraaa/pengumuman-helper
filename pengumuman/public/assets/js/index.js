// btnActive Start
const menuButton = document.getElementById('mobile-nav-trigger');

menuButton.addEventListener('click', () => {
  // Toggle class 'active' untuk menentukan status buka/tutup
  const isOpen = menuButton.classList.toggle('active');

  if (isOpen) {
    // Menu terbuka: tambahkan kembali kelas hover
    menuButton.classList.add('hover:bg-x-blue');
  } else {
    // Menu tertutup: hapus efek hover
    menuButton.classList.remove('hover:bg-x-blue');
  }
});
// btnActive Start

const mobileNavTrigger = document.querySelector("#mobile-nav-trigger");
const mobileNav = document.querySelector("#mobile-nav");

mobileNavTrigger.addEventListener("click", () =>
  mobileNav.classList.toggle("-translate-x-full")
);
window.addEventListener(
  "resize",
  () => window.innerWidth >= 640 && mobileNav.classList.add("-translate-x-full")
);

const headerLogo = document.querySelector("#header-logo");
const aboutSection = document.querySelector("#about");
if (headerLogo) {
  window.addEventListener("scroll", () => {
    headerLogo.classList.toggle("opacity-0", window.scrollY < aboutSection.offsetTop - 300);
  });
}

// page team
document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.querySelector('.navbar');
  const teamSection = document.getElementById('team');

  // Definisikan fungsi onScroll
  function onScroll() {
    if (!navbar || !teamSection) return; // Pastikan elemen ada
    const teamSectionTop = teamSection.getBoundingClientRect().top;
    const navbarHeight = navbar.offsetHeight;

    if (teamSectionTop <= navbarHeight) {
      navbar.classList.add('active');
    } else {
      navbar.classList.remove('active');
    }
  }

  // Pasang event listener
  if (navbar && teamSection) {
    window.addEventListener('scroll', onScroll);
  }
});


// switch title(bahasa/Language) privacy & policy 
document.addEventListener("DOMContentLoaded", () => {
  const btnId = document.getElementById("btn-id");
  const btnEn = document.getElementById("btn-en");
  const contentIdBahasa = document.getElementById("content-id-bahasa");
  const contentEnLanguage = document.getElementById("content-en-language");

  if (btnId && btnEn && contentIdBahasa && contentEnLanguage) {
    // Event listener untuk tombol Bahasa Indonesia
    btnId.addEventListener("click", () => {
      contentIdBahasa.style.display = "block";
      contentEnLanguage.style.display = "none";
    });
  
    // Event listener untuk tombol English
    btnEn.addEventListener("click", () => {
      contentIdBahasa.style.display = "none";
      contentEnLanguage.style.display = "block";
    });
  }
});
// switch isi privacy & policy 
document.addEventListener("DOMContentLoaded", () => {
  const btnId = document.getElementById("btn-id");
  const btnEn = document.getElementById("btn-en");
  const contentId = document.getElementById("content-id");
  const contentEn = document.getElementById("content-en");

  // Cek apakah elemen-elemen ini ada di halaman
  if (btnId && btnEn && contentId && contentEn) {
    // Event listener untuk tombol Bahasa Indonesia
    btnId.addEventListener("click", () => {
      contentId.style.display = "block";
      contentEn.style.display = "none";
    });

    // Event listener untuk tombol English
    btnEn.addEventListener("click", () => {
      contentId.style.display = "none";
      contentEn.style.display = "block";
    });
  } 
});


// btn active switch bahasa
const btnId = document.getElementById('btn-id');
const btnEn = document.getElementById('btn-en');

// Fungsi untuk mengatur status aktif tombol
function setActiveButton(clickedButton) {
    // Hapus kelas active dari kedua tombol
    btnId.classList.remove('active');
    btnEn.classList.remove('active');

    if(btnEn && btnId){
      // Tambahkan kelas active ke tombol yang diklik
      clickedButton.classList.add('active');
    }
}

if(btnId){
  //untuk tombol Bahasa Indonesia
  btnId.addEventListener('click', function() {
      setActiveButton(btnId); 
  });
}

if(btnEn){
  //untuk tombol English
  btnEn.addEventListener('click', function() {
      setActiveButton(btnEn);
  });
}

// Page Customer service
function hubungiKami(event) {
  event.preventDefault(); // Cegah link berpindah halaman langsung

  console.log("Tombol Hubungi Kami ditekan");

  const icons = document.querySelectorAll(".icon-animation");
  const href = event.target.href; // Ambil URL tujuan
  let animationsCompleted = 0;

  icons.forEach((icon, index) => {
    setTimeout(() => {
      icon.classList.add("animate");

      // Dengarkan event animasi selesai untuk setiap ikon
      icon.addEventListener("transitionend", () => {
        animationsCompleted++;

        // Jika semua ikon selesai animasi, pindah halaman
        if (animationsCompleted === icons.length) {
          window.location.href = href;
        }
      }, { once: true }); // Pastikan listener hanya berjalan sekali
    }, index * 100); // Delay antar ikon
  });
}



