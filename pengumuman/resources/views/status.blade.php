<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Kelulusan</title>
</head>
<body>
    <h1>Status Kelulusan</h1>
    @if ($status === 1)
        <p>Selamat, Anda telah lulus!</p>
    @elseif ($status === null)
        <p>NIM tidak ditemukan di database.</p>
    @else
        <p>Maaf, Anda belum lulus.</p>
    @endif
    <a href="{{ route('input-nim') }}">Kembali</a>
</body>
</html>
