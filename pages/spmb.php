<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran SPMB</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/spmb.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>

<body>
    <div class="container">
        <div class="hero">
            <?php
            include '../components/navbar.php';
            ?>
            <div class="overlay">
                <div class="badge">SPMB 2026 / 2027</div>
                <h1>Formulir Pendaftaran SPMB</h1>
                <p>
                    Isi data calon peserta didik baru dengan benar.
                    Field bertanda * wajib diisi.
                </p>
            </div>
        </div>
        <form action="cetak_spmb.php" method="POST">
            <div class="card">
                <h2>Data Sekolah Asal</h2>
                <div class="grid">
                    <div>
                        <label>Asal Sekolah *</label>
                        <select name="asal_sekolah" required>
                            <option value="">Pilih Sekolah</option>
                            <option>SMP Negeri</option>
                            <option>SMP Swasta</option>
                        </select>
                    </div>
                    <div>
                        <!-- buat tahun lulus 5 tahun terakhir -->
                        <?php
                        $currentYear = date("Y");
                        echo '<label>Tahun Lulus *</label>';
                        echo '<select name="tahun_lulus" required>';
                        echo '<option value="">Pilih Tahun</option>';
                        for ($i = $currentYear; $i >= $currentYear - 4; $i--) {
                            echo "<option>$i</option>";
                        }
                        echo '</select>';
                        ?>
                    </div>
                </div>

                <div>
                    <label>Nomor Surat Keterangan Lulus</label>
                    <textarea name="skl"></textarea>
                </div>
            </div>

            <div class="card">
                <h2>Data Calon Peserta Didik</h2>

                <div class="grid">
                    <div>
                        <label>Nama Lengkap *</label>
                        <input type="text" name="nama" required>
                    </div>

                    <div>
                        <label>Jenis Kelamin *</label>
                        <select name="jk" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>

                    <div>
                        <label>Tempat Lahir *</label>
                        <input type="text" name="tempat_lahir" required>
                    </div>

                    <div>
                        <label>Tanggal Lahir *</label>
                        <input type="date" name="tanggal_lahir" required>
                    </div>

                    <div>
                        <label>No Handphone *</label>
                        <input type="text" name="hp" maxlength="15" required>
                    </div>

                    <div>
                        <label>Agama *</label>
                        <select name="agama" required>
                            <option value="">Pilih Agama</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                            <option>Hindu</option>
                            <option>Buddha</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label>Alamat *</label>
                    <textarea name="alamat" required></textarea>
                </div>
            </div>

            <div class="card">
                <h2>Data Keluarga</h2>

                <div class="grid">
                    <div>
                        <label>Nama Ayah *</label>
                        <input type="text" name="ayah" required>
                    </div>

                    <div>
                        <label>Pekerjaan Ayah * </label>
                        <input type="text" name="pekerjaan_ayah" required>
                    </div>

                    <div>
                        <label>Nama Ibu *</label>
                        <input type="text" name="ibu" required>
                    </div>

                    <div>
                        <label>Pekerjaan Ibu *</label>
                        <input type="text" name="pekerjaan_ibu" required>
                    </div>
                </div>

                <div>
                    <label>Alamat Orang Tua *</label>
                    <textarea name="alamat_ortu" required></textarea>
                </div>
            </div>
            <div class="card">
                <h3>Kirim Formulir</h3>
                <p>Pastikan semua data sudah benar. Setelah menekan tombol kirim, data akan dikirim ke spreadsheet resmi
                    SPMB</p>
                <button type="submit">Kirim Formulir</button>
            </div>
        </form>
    </div>
</body>

</html>

<?php
include '../components/footer.php';
?>