<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas 5 - HTML</title>
</head>
<body>

    <!-- a. Tabel HTML Lengkap -->
    <h2>Data Siswa</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr bgcolor="#cccccc" align="center">
                <th rowspan="2">No</th>
                <th rowspan="2">NIM</th>
                <th rowspan="2">Nama</th>
                <th colspan="2">Keterangan</th>
            </tr>
            <tr bgcolor="#e6e6e6" align="center">
                <th>Jurusan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr bgcolor="#f9f9f9" valign="middle">
                <td align="center">1</td>
                <td>12345601</td>
                <td>Budi Santoso</td>
                <td>Teknik Informatika</td>
                <td align="center" bgcolor="#d4edda">Aktif</td>
            </tr>
            <tr bgcolor="#ffffff" valign="middle">
                <td align="center">2</td>
                <td>12345602</td>
                <td>Siti Aminah</td>
                <td>Sistem Informasi</td>
                <td align="center" bgcolor="#d4edda">Aktif</td>
            </tr>
            <tr bgcolor="#f9f9f9" valign="middle">
                <td align="center">3</td>
                <td>12345603</td>
                <td colspan="2" align="center">Data Siswa Belum Lengkap</td>
                <td align="center" bgcolor="#f8d7da">Cuti</td>
            </tr>
        </tbody>
    </table>

    <br><hr><br>

    <!-- b. Gambar dengan <figure> -->
    <figure>
        <img src="fotosiswa.jpg" alt="Foto Siswa" width="300">
        <figcaption>Gambar 1. Profil Kegiatan Mahasiswa di Kampus</figcaption>
    </figure>

</body>
</html>
