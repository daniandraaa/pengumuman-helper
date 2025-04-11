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
    @if ($status)
        @include('kelulusan.lulus')
    @elseif ($status === null)
        @include('kelulusan.NotFound')
    @else
        @include('kelulusan.gagal')
    @endif

    <script src="./assets/js/index.js"></script>
  </body>
</html>

