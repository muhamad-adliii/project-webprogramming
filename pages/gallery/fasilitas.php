<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/fasilitas.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="shortcut icon" href="../../images/logo-sekolah2.0.png" type="image/x-icon">
</head>

<body>
    <section class="hero-section">
        <?php
        include '../../components/navbar.php';
        ?>

    </section>
    <main class="facility-section">
        <div class="facility-title">
            <div class="subtitle-container">
                <span class="line"></span>
                <span class="subtitle">SMK Genesis Teknologi</span>
                <span class="line"></span>
            </div>
            <h2>Fasilitas Sekolah</h2>
        </div>
        <div class="facility-grid">
            <div class="facility-card">
                <div class="facility-img">
                    <img src="../../images/perpus.jpg" alt="">
                </div>
                <div class="facility-info">
                    <h3>Perpustakaan</h3>
                </div>
            </div>
            <div class="facility-card">
                <div class="facility-img">
                    <img src="../../images/ruang.jpg" alt="">
                </div>
                <div class="facility-info">
                    <h3>Ruang Kelas</h3>
                </div>
            </div>
            <div class="facility-card">
                <div class="facility-img">
                    <img src="../../images/hall.jpg" alt="">
                </div>
                <div class="facility-info">
                    <h3>Aula Sekolah</h3>
                </div>
            </div>
            <div class="facility-card">
                <div class="facility-img">
                    <img src="../../images/lab.jpg" alt="">
                </div>
                <div class="facility-info">
                    <h3>Lab Komputer</h3>
                </div>
            </div>
            <div class="facility-card">
                <div class="facility-img">
                    <img src="../../images/lapangan.jpg" alt="">
                </div>
                <div class="facility-info">
                    <h3>Lapangan Sekolah</h3>
                </div>
            </div>
            <div class="facility-card">
                <div class="facility-img">
                    <img src="../../images/locker.jpg" alt="">
                </div>
                <div class="facility-info">
                    <h3>Ruang Ganti</h3>
                </div>
            </div>


        </div>
    </main>
    <?php
    include '../../components/footer.php';
    ?>
</body>

</html>