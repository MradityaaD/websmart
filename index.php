<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | PlengerToSmart</title>
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="assets/css/style_navbar.css?v=6">
    <!-- CSS Khusus Beranda (Kerangka Dasar) -->
    <link rel="stylesheet" href="assets/css/beranda.css?v=6">
</head>
<body>

    <!-- PANGGIL NAVBAR -->
    <?php include "navbar.php"; ?>

    <!-- WADAH UTAMA HALAMAN -->
    <main class="container">

        <!-- 1. HERO SECTION -->
        <section class="hero-section">
            <div class="hero-text">
                <h1>Berangkat Plenger, Pulang Pinter.</h1>
                <p>Belajar gak perlu tegang, yang penting nyerap di otak! Bergabung dengan ribuan pelajar lainnya dan raih kampus impianmu secara gratis.</p>
                <button onclick="window.location.href='materi.php'">Mulai Belajar Sekarang</button>
            </div>
            <div class="hero-image">
                <img src="assets/img/Murid ui.png" alt="Siswa UI">
            </div>
        </section>

        <!-- 2. KATEGORI MATERI (Eksplorasi) -->
        <section class="category-section">
            <h2>Pilih Senjatamu (Materi Belajar)</h2>
            <div class="category-grid">
                <div class="category-box">Sains & Matematika</div>
                <div class="category-box">Sejarah Dunia</div>
                <div class="category-box">Kesehatan Mental</div>
                <div class="category-box">Literasi Finansial</div>
            </div>
        </section>

        <!-- 3. ALASAN HARUS BELAJAR DISINI -->
        <section class="value-section">
            <h2>Kenapa Mesti PlengerToSmart?</h2>
            <div class="value-grid">
                <div class="value-card">
                    <img src="assets/img/dr tirta seminar.png" alt="Dr Tirta">
                    <h3>Disusun Oleh Pakarnya</h3>
                    <p>Materi diajarkan oleh praktisi asli yang udah nelen asam garam dunia nyata.</p>
                </div>
                <div class="value-card">
                    <img src="assets/img/ferry irwandi seminar.png" alt="Ferry Irwandi">
                    <h3>Bukan Hafalan, Tapi Pemahaman</h3>
                    <p>Kita fokus membedah filosofi dan akar masalah, bukan cuma ngafal rumus doang.</p>
                </div>
                <div class="value-card">
                    <img src="assets/img/murid ui2.png" alt="Gratis Seumur Hidup">
                    <h3>Gratis Seumur Hidup</h3>
                    <p>Misi kita adalah meratakan pendidikan tanpa harus bayar biaya langganan mahal.</p>
                </div>
            </div>
        </section>

        <!-- 4. PREVIEW -->
        <section class="gamification-section">
            <h2>Belajar Serasa Main Game!</h2>
            <div class="gamification-layout">
                <div class="gami-item">
                    <h3>Kuis Interaktif</h3>
                    <img src="assets/img/quiz interaktif preview.png" alt="Quiz Preview">
                </div>
                <div class="gami-item">
                    <h3>Papan Peringkat (Leaderboard)</h3>
                    <img src="assets/img/leaderboard preview.png" alt="Leaderboard Preview">
                </div>
            </div>
        </section>

        <!-- 5. TESTIMONI DENGAN ANIMASI BERJALAN -->
        <section class="testimonial-section">
            <h2>Apa Kata Mereka?</h2>
            <div class="marquee-container">
                <div class="marquee-content">
                    <div class="testi-card">"Berkat web ini, gw masuk UI brok! - Udin"</div>
                    <div class="testi-card">"Konsepnya asik, XP-nya bikin nagih - Asep"</div>
                    <div class="testi-card">"Artikelnya daging semua, mantap! - Siti"</div>
                    <div class="testi-card">"Materi stoikismenya Ferry Irwandi pecah! - Budi"</div>
                </div>
            </div>
        </section>

    </main>

</body>
</html>