<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calon Mahesa Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: white;">Logo</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #E0A800; font-family: 'Cinzel Decorative', serif;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #E0A800; font-family: 'Cinzel Decorative', serif;">Form Registration</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="afterNavbar">
        <div class="batikImg">
            <img class="batik" src="/img/batik.png" alt="">
            <p style="font-family: 'Montserrat', sans-serif; font-size:40px; font-weight:900;">OPEN RECRUITMENT CALON MAHESA</p>
        </div>
        <div class="keratonDoor">
            <div class="text2">
                <p style="font-family: 'Montserrat', sans-serif; font-size:35px; font-weight:900;">MR. & MS. UMN 2024</p>
            </div>
            <div class="blackLowOpacity">
                <img class="pintu" src="/img/pintu.png" alt="">
                <div class="form">
                    <form action="#" method="post">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" required>
                        <br><br>
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" required>
                        <br><br>
                        <label for="jurusan">Jurusan</label>
                        <select id="jurusan" name="jurusan" required>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Manajemen">Manajemen</option>
                            <!-- Tambahkan pilihan jurusan lainnya sesuai kebutuhan -->
                        </select>
                        <br><br>
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" required>
                        <br><br>
                        <label for="no_telp">No. Telp</label>
                        <input type="tel" id="no_telp" name="no_telp" required>
                        <br><br>
                        <label for="id_line">ID Line</label>
                        <input type="text" id="id_line" name="id_line" required>
                        <br><br>
                        <label for="divisi1">Pilih Divisi 1</label>
                        <select id="divisi1" name="divisi1" required>
                            <option value="Divisi Keuangan">Divisi Keuangan</option>
                            <option value="Divisi Humas">Divisi Humas</option>
                            <!-- Tambahkan pilihan divisi lainnya sesuai kebutuhan -->
                        </select>
                        <br><br>
                        <label for="divisi2">Pilih Divisi 2</label>
                        <select id="divisi2" name="divisi2" required>
                            <option value="Divisi Acara">Divisi Acara</option>
                            <option value="Divisi Sponsorship">Divisi Sponsorship</option>
                            <!-- Tambahkan pilihan divisi lainnya sesuai kebutuhan -->
                        </select>

                        <br><br>
                        <div class="longAnswer">
                            <label for="mr_ms_umn">Apa yang Anda Ketahui tentang Mr. & Ms. UMN</label>
                            <br>
                            <textarea id="mr_ms_umn" name="mr_ms_umn" rows="4" cols="50"></textarea>
                            <br><br>
                            <label for="alasan">Alasan Ingin Bergabung sebagai Panitia</label>
                            <br>
                            <textarea id="alasan" name="alasan" rows="4" cols="50"></textarea>
                        </div>
                        <br><br>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>