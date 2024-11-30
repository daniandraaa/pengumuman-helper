<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru</title>
</head>
<body>
    <h2>Pesan Baru dari Formulir Kontak</h2>
    <p><strong>Nama:</strong> {{ e($name) }}</p>
    <p><strong>Email:</strong> {{ e($email) }}</p>
    <p><strong>Pesan:</strong> {{ e($messages) }}</p>
</body>
</html>
