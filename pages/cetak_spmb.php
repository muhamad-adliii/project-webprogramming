<?php
include '../components/navbar.html';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran SPMB</title>
    <link rel="stylesheet" href="../css/cetak_spmb.css">
</head>

<body>

    <div class="container">

        <div class="header">
            <h1>Data Pendaftaran Berhasil</h1>
            <p>Berikut data yang telah dikirim</p>
        </div>

        <div class="card">

            <div class="output-grid">

                <div class="item">
                    <span>Asal Sekolah</span>
                    <p><?= $_POST['asal_sekolah']; ?></p>
                </div>

                <div class="item">
                    <span>Tahun Lulus</span>
                    <p><?= $_POST['tahun_lulus']; ?></p>
                </div>

                <div class="item">
                    <span>Nomor SKL</span>
                    <p><?= $_POST['skl']; ?></p>
                </div>

                <div class="item">
                    <span>Nama Lengkap</span>
                    <p><?= $_POST['nama']; ?></p>
                </div>

                <div class="item">
                    <span>Jenis Kelamin</span>
                    <p><?= $_POST['jk']; ?></p>
                </div>

                <div class="item">
                    <span>Tempat Lahir</span>
                    <p><?= $_POST['tempat_lahir']; ?></p>
                </div>

                <div class="item">
                    <span>Tanggal Lahir</span>
                    <p><?= $_POST['tanggal_lahir']; ?></p>
                </div>

                <div class="item">
                    <span>No Handphone</span>
                    <p><?= $_POST['hp']; ?></p>
                </div>

                <div class="item">
                    <span>Agama</span>
                    <p><?= $_POST['agama']; ?></p>
                </div>

                <div class="item full">
                    <span>Alamat</span>
                    <p><?= $_POST['alamat']; ?></p>
                </div>

                <div class="item">
                    <span>Nama Ayah</span>
                    <p><?= $_POST['ayah']; ?></p>
                </div>

                <div class="item">
                    <span>Pekerjaan Ayah</span>
                    <p><?= $_POST['pekerjaan_ayah']; ?></p>
                </div>

                <div class="item">
                    <span>Nama Ibu</span>
                    <p><?= $_POST['ibu']; ?></p>
                </div>

                <div class="item">
                    <span>Pekerjaan Ibu</span>
                    <p><?= $_POST['pekerjaan_ibu']; ?></p>
                </div>

                <div class="item full">
                    <span>Alamat Orang Tua</span>
                    <p><?= $_POST['alamat_ortu']; ?></p>
                </div>

            </div>

        </div>

    </div>
</body>

</html>

<?php
include '../components/footer.html';
?>