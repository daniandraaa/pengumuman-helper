<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Daftar Pendaftaran</title>
    <link rel="icon" href="assets/images/logo-short.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/styles-showData.css') }}">
</head>
<body>

    <!-- Container -->
    <div class="container">
        <h2 style="text-align: center;">Daftar Pendaftaran</h2>

        <!-- Pesan Sukses atau Error -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Tabel Data -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Domisili</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Keahlian</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>KTM</th>
                    <th>CV</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->domisili }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>{{ $item->keahlian }}</td>
                        <td>{{ $item->notelp }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            @if($item->ktm)
                                <a href="{{ asset('storage/' . $item->ktm) }}" target="_blank">Lihat KTM</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            @if($item->cv)
                                <a href="{{ asset('storage/' . $item->cv) }}" target="_blank">Lihat CV</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            <p>NULL</p>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">Tidak ada data pendaftaran.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="pagination">
            {{ $data->links() }}
        </div>
    </div>

</body>
</html>
