<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="{!! asset('assets/css/styles-artikel.css') !!}">
</head>
<body>

  <div class="left">
    <img src="./assets/images/logo-text2.svg"alt="about 1"/>
    <div class="Login-form">
        <h4>Nikmati Bacaan Favoritmu!</h4>
        <form class="form-box">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Masukkan email Anda" />

          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Masukkan password Anda" />
          <a href="#">Lupa Password?</a>

          <button type="submit">Masuk</button>
        </form>
        <h6>Belum Punya Akun?? <span style="color: #0095ff;">Buat akun</span></h6>
    </div>
  </div>

  <div class="login-right">
    <img src="./assets/artikel/login_icon.svg"alt="about 1"/>
  </div>

</body>
</html>
