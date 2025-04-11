<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Helper</title>
    <link rel="stylesheet" href="{!! asset('assets/css/styles.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/styles-formPendaftaran.css') !!}">
</head>
<body class="font-sans antialiased text-white">
     <!-- Header -->
     @include('general.navbar')

     <section class="body-form">
        <div class="left-section-form">
            <div class="value-form">
                <div class="flex left-gap-2">
                    <img
                        src="./assets/images/Nexilium-logo.svg"
                        alt="download-app-store"
                        class="left-h-12 lulus-h-12 2xl:h-16"
                    />
                    <img
                        src="./assets/images/logo-text2.svg"
                        alt="download-play-store"
                        class="left-h-10 2xl:h-16"
                    />
                </div>
                <h1 class="font-bold font-mplus">Form Pendaftaran Helper</h1>
                <p>Lengkapi formulir untuk melanjutkan proses pendaftaran sebagai helper.</p>
            </div>
        </div>
    
        <!-- Bagian Kanan -->
        <div class="right-section-form">
            <!-- Bungkus dalam card jika di layar kecil -->
            <div class="form-card-form">
                <h2>Daftar Helper</h2>
    
                {{-- Pesan Sukses --}}
                @if (session('success'))
                    @include('Pendaftaran.thankyouPage')
                @endif
    
                {{-- Pesan Error --}}
                @if ($errors->any())
                    <div style="color: red; margin-bottom: 15px;">
                        <ul style="list-style: none;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
    
                <!-- Form Pendaftaran -->
                <form class="form-pendaftaran" action="{{ route('formPendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Input Nama -->
                    <div class="form-group-form">
                        <label for="nama">Masukkan Nama Lengkap ( Sesuai Aplikasi )</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama lengkap" value="{{ old('nama') }}" required>
                    </div>
    
                    <!-- Input Jurusan -->
                    <div class="form-group-form">
                        <label for="jurusan">Masukkan Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan" placeholder="Jurusan" value="{{ old('jurusan') }}">
                    </div>
    
                    <!-- Input Domisili -->
                    <div class="form-group-form">
                        <label for="keahlian">Masukan Domisili</label>
                        <input type="text" name="domisili" id="domisili" placeholder="Domisili" value="{{ old('domisili') }}" required>
                    </div>

                    <!-- Input NIM -->
                    <div class="form-group-form">
                        <label for="keahlian">Masukan NIM</label>
                        <input type="text" name="nim" id="nim" placeholder="NIM" value="{{ old('nim') }}" required>
                    </div>
    
                    <!-- Input Keahlian -->
                    <div class="form-group-form">
                        <label for="keahlian">Masukan Keahlian</label>
                        <input type="text" name="keahlian" id="keahlian" placeholder="Keahlian" value="{{ old('keahlian') }}" required>
                    </div>

                    <!-- Input No telp -->
                    <div class="form-group-form">
                        <label for="keahlian">Masukan Nomer Telepon ( Sesuai Aplikasi )</label>
                        <input type="text" name="notelp" id="notelp" placeholder="No Telepon" value="{{ old('notelp') }}" required>
                    </div>

                    <!-- Input email -->
                    <div class="form-group-form">
                        <label for="keahlian">Masukan Email ( Sesuai Aplikasi )</label>
                        <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                    </div>
    
                    <!-- Upload KTM -->
                    <div class="form-group-form">
                        <label for="ktm">Unggah KTM</label>
                        <input type="file" name="ktm" id="ktm" accept=".pdf,.jpg,.jpeg,.png">
                    </div>
    
                    <!-- Upload CV -->
                    <div class="form-group-form">
                        <label for="cv">Unggah CV</label>
                        <input type="file" name="cv" id="cv" accept=".pdf,.jpg,.jpeg,.png">
                    </div>
    
                    <!-- Tombol Submit -->
                    <button class="button-form" type="submit">Daftar</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Bagian Kiri -->
</body>
</html>
