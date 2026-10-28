<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Kelas 8 | PlengerToSmart</title>
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="assets/css/style_navbar.css?v=6">
    <!-- CSS Khusus Materi (Wireframe) -->
    <link rel="stylesheet" href="assets/css/materi.css?v=6">
</head>
<body>

    <!-- PANGGIL NAVBAR (Sudah termasuk Mega Menu-nya) -->
    <?php include "navbar.php"; ?>

    <!-- WADAH UTAMA MATERI (Layout 2 Kolom) -->
    <main class="materi-container">

        <!-- 1. SISI KIRI (SIDEBAR TOPIK) -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Matematika Kls 8</h2>
            </div>
            
            <div class="sidebar-menu">
                <!-- Bab yang Sedang Terbuka -->
                <div class="bab-item active">
                    <h4>Bab 1: Aljabar</h4>
                    <ul>
                        <li><a href="#">Persamaan Linear</a></li>
                        <li><a href="#">Sistem Persamaan Dua Variabel</a></li>
                    </ul>
                </div>
                
                <!-- Bab yang Terkunci (Biar Keliatan MVP-nya) -->
                <div class="bab-item disabled">
                    <h4>Bab 2: Geometri (Kunci)</h4>
                </div>

                <div class="bab-item disabled">
                    <h4>Bab 3: Statistika Dasar (Kunci)</h4>
                </div>
            </div>
        </aside>

        <!-- 2. SISI KANAN (KONTEN VIDEO YOUTUBE) -->
        <section class="main-content">
            <div class="content-header">
                <h1>Persamaan Linear (Aljabar)</h1>
                <p>Oleh: Pak Budi | Durasi: 12 Menit</p>
            </div>
            
            <div class="video-embed">
                <!-- Nanti di sini tinggal diisi tag <iframe src="..."> dari YouTube.
                     Untuk sekarang gw pake kotak border aja sebagai visualisator -->
                <div class="youtube-placeholder">
                    VIDEO YOUTUBE (RASIO 16:9)
                </div>
            </div>

            <div class="content-description">
                <h3>Penjelasan Materi Singkat</h3>
                <p>Dalam video ini kita akan membedah secara fundamental apa itu aljabar dan bagaimana filosofinya bekerja di kehidupan nyata. Nggak sekadar menghafal "huruf pindah ruas berubah tanda", tapi kita pahami esensinya.</p>
                <br>
                <p><strong>Tips Belajar:</strong> Siapkan kertas kosong dan coret-coret bersama videonya.</p>
            </div>

            <div class="content-actions">
                <button onclick="window.location.href='profil.php'">Tandai Selesai & Dapet XP</button>
                <button onclick="window.location.href='quiz_awal.php'">Lanjut ke Materi Berikutnya ></button>
            </div>
        </section>

    </main>

</body>
</html>
