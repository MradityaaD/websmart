<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel | PlengerToSmart</title>
    <!-- Manggil CSS bawaan / navbar -->
    <link rel="stylesheet" href="assets/css/style_navbar.css?v=6">
    <!-- Manggil CSS khusus ruang artikel ini aja -->
    <link rel="stylesheet" href="assets/css/artikel1.css?v=6">
    <!-- Manggil CSS untuk bagian Recommended Paling Bawah -->
    <link rel="stylesheet" href="assets/css/artikel2.css?v=6">
</head>
<body>

    <!-- Navbar -->
    <?php include "navbar.php"; ?>

    <!-- WADAH UTAMA BERITA -->
    <main class="container">
        
        <!-- ARTIKEL UTAMA -->
        <section class="featured-article">
            <!-- Sisi Kiri: Teks -->
            <div class="featured-text">
                <span class="category">INSPIRASI & TEKNOLOGI</span>
                <h1>Elon Musk & Masa Depan: Mengapa Kita Harus Pergi Ke Mars?</h1>
                <p>Elon Musk membagi visinya tentang masa depan umat manusia sebagai spesies multi-planet. Dalam langkah ambisiusnya, SpaceX menargetkan kolonialisasi planet merah bukan hanya sekadar insting bertahan hidup, tetapi sebagai petualangan peradaban terbesar di abad ini. Sudah siapkah peradaban kita menghadapi tantangan ini?</p>
                <div class="meta">Oleh Elon Musk · 25 Menit Baca · 5 Hari yang lalu</div>
            </div>
            
            <!-- Sisi Kanan: Gambar -->
            <div class="featured-image">
                <img src="assets/img/elon musk.png" alt="Elon Musk SpaceX">
            </div>
        </section>

        <!-- Garis Pemisah Bawah -->
        <hr class="divider">

        <!-- KUMPULAN ARTIKEL KECIL -->
        <section class="article-grid">
            
            <!-- Artikel 1 -->
            <article class="card">
                <img src="assets/img/dr tirta ITB.png" alt="Dr Tirta ITB">
                <span class="category">MOTIVASI BELAJAR</span>
                <h3>Dr. Tirta: "Gagal Masuk ITB Bukan Akhir Dunia, Bro!"</h3>
                <div class="meta">dr. Tirta · 10 Menit Baca</div>
            </article>

            <!-- Artikel 2 -->
            <article class="card">
                <img src="assets/img/ferry irwandi.png" alt="Ferry Irwandi">
                <span class="category">FILOSOFI</span>
                <h3>Ferry Irwandi Membedah Stoikisme di Era Digital</h3>
                <div class="meta">Ferry Irwandi · 15 Menit Baca</div>
            </article>

            <!-- Artikel 3 -->
            <article class="card">
                <img src="assets/img/warren buffet.png" alt="Warren Buffet">
                <span class="category">LITERASI FINANSIAL</span>
                <h3>Aturan Emas Warren Buffet: Jangan Pernah Kehilangan Uangmu</h3>
                <div class="meta">Berkshire Hathaway · 12 Menit Baca</div>
            </article>

            <!-- Artikel 4 -->
            <article class="card">
                <img src="assets/img/pola pikir.png" alt="Pola Pikir">
                <span class="category">MINDSET</span>
                <h3>Fixed Mindset vs Growth Mindset: Di Mana Posisi Otakmu?</h3>
                <div class="meta">Psikologi Harian · 8 Menit Baca</div>
            </article>

        </section>

        <!-- ============================================== -->
        <!-- SECTION RECOMMENDED FOR YOU (Hierarki Asimetris) -->
        <!-- ============================================== -->
        <div class="recommended-header">
            <h4>RECOMMENDED FOR YOU</h4>
        </div>
        
        <section class="recommended-grid">
            
            <!-- Kolom 1 (Kiri): Porsi Terbesar (Efek Video) -->
            <article class="rec-col-large">
                <img src="assets/img/tips semangat belajar.png" alt="Tips Belajar">
                <span class="category">EDUKASI</span>
                <h2>Cara Ampuh Mengembalikan Niat Belajar yang Hilang</h2>
                <p>Pernahkah lu merasa males banget buka buku padahal ujian besok? Psikolog kognitif membedah cara kerja dopamin otak kita dan bagaimana 'nge-hack' kemalasan agar lu bisa kembali fokus.</p>
                <div class="meta">Budi Santoso · 1.72M views · 10 Bulan yang lalu</div>
            </article>

            <!-- Kolom 2 (Tengah): Porsi Sedang -->
            <article class="rec-col-medium">
                <img src="assets/img/selamat mengikuti UTS.png" alt="UTS">
                <span class="category">AKADEMIK</span>
                <h2>Rahasia Ketenangan Ekstrem Menghadapi UTS</h2>
                <p>Apa yang membuat seorang mahasiswa berprestasi tidak pernah panik saat ujian? Rahasianya ternyata bukan sekadar begadang, melainkan manajemen emosi dalam merespons soal susah.</p>
                <div class="meta">Siti Aminah · 1.13M views · 2 Tahun yang lalu</div>
            </article>

            <!-- Kolom 3 (Kanan): Tumpukan 3 Artikel Mini -->
            <article class="rec-col-small">
                
                <div class="mini-article">
                    <span class="category">PRODUKTIVITAS</span>
                    <h3>Apa bahasa kepemimpinan aslimu di dalam kelompok?</h3>
                    <div class="meta">Rosita Najmi · 892K views · 2 Tahun yang lalu</div>
                </div>

                <div class="mini-article border-top">
                    <span class="category">KESEHATAN MENTAL</span>
                    <h3>3 Langkah ampun mengatasi kecemasan berlebih di masa sekolah</h3>
                    <div class="meta">Lisa Damour · 1.71M views · 3 Tahun yang lalu</div>
                </div>

                <div class="mini-article border-top">
                    <span class="category">KREATIVITAS</span>
                    <h3>Izinkan dirimu untuk mencoret-coret ide gilamu di buku</h3>
                    <div class="meta">Ethan Hawke · 7.54M views · 6 Tahun yang lalu</div>
                </div>

            </article>

        </section>

        <!-- Garis Pemisah Bawah -->
        <hr class="divider">


        <!-- SECTION BRAIN BREAK -->
        <section class="brain-break-section">
            <div class="bb-left">
                <h2>Anatomy of a Problem | The Trial</h2>
                <p>Di sesi The Trial kali ini, Cania Citta membedah satu hal mendasar yang sering dilupakan: apa sebenarnya yang disebut “masalah”? Banyak orang ingin jadi problem solver, tapi bahkan belum bisa mendefinisikan masalah dengan tepat.</p>
                <button class="btn-bb">Mulai Tonton</button>
            </div>
            <div class="bb-right">
                <!-- Tutorial YouTube Embed: Tinggal klik "Share" di video YT -> pilih "Embed" -> Copy kode iframe-nya ke sini -->
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/MIgf5AKg_q0" allowfullscreen></iframe>
            </div>
        </section>

    </main>

</body>
</html>