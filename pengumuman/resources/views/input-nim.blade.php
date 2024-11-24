<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input NIM</title>
</head>
<body>
    <h1>Input NIM</h1>
    <form action="{{ route('check-nim') }}" method="POST">
        @csrf
        <input type="text" name="nim" placeholder="Masukkan NIM" required>
        <button type="submit">Cek</button>
    </form>
</body>
</html>
