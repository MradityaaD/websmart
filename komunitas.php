<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas | PlengerToSmart</title>
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="assets/css/style_navbar.css?v=6">
    <!-- CSS Khusus Komunitas (Wireframe) -->
    <link rel="stylesheet" href="assets/css/komunitas.css?v=6">
</head>
<body>

    <!-- PANGGIL NAVBAR -->
    <?php include "navbar.php"; ?>

    <!-- WADAH UTAMA KOMUNITAS (3 Kolom) -->
    <main class="komunitas-container">

        <!-- KOLOM 1: KIRI (Sidebar Navigasi Ala Quora) -->
        <aside class="kiri-topik">
            <h3 class="box-title">Ruang Diskusi</h3>
            <ul class="topik-list">
                <li class="active">Semua Diskusi</li>
                <li>Tanya PR Matematika</li>
                <li>Curhat Kehidupan Sekolah</li>
                <li>Info Masuk Kampus</li>
            </ul>
        </aside>

        <!-- KOLOM 2: TENGAH (Main Feed & Bikin Post) -->
        <section class="tengah-feed">
            
            <!-- Kotak Buat Postingan Baru -->
            <div class="buat-post-box">
                <div class="user-avatar">U</div>
                <input type="text" placeholder="Apa yang ingin lu tanyakan hari ini?">
                <button class="btn-kirim">Kirim</button>
            </div>

            <hr class="garis-pemisah">

            <!-- Daftar Postingan -->
            <div class="feed-list">
                
                <!-- POSTINGAN 1 (Pake Tag Details Biar Melar) -->
                <details class="post-card">
                    <!-- Summary: Judul utama yang bakal selalu keliatan dan bisa diklik -->
                    <summary class="post-summary">
                        <div class="post-header">
                            <strong>Siti Aminah</strong> <span class="time">· 2 jam yang lalu</span>
                        </div>
                        <h4 class="post-title">Guys, ada yang paham bedanya Kuadran 1 dan 2 di Trigonometri gak? (Klik untuk buka diskusi)</h4>
                    </summary>
                    
                    <!-- Content: Daging isinya yang bakal ngumpet dan muncul kalau judul diklik -->
                    <div class="post-content">
                        <p>Gw udah baca buku berkali-kali tapi tetep plenger, apanya yang min apanya yang plus sih? Besok ada ulangan harian nih plis help!</p>
                        <img src="assets/img/rumus trigonometri.png" alt="Rumus Trigonometri" style="display:block; width:100%; max-width:100%; height:auto; margin-top:15px; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.15);">
                        
                        <!-- Area Balasan / Komentar -->
                        <div class="komentar-section">
                            <strong>Jawaban (2):</strong>
                            <div class="komentar-item">
                                <strong>Budi:</strong> Kuadran 1 semuanya Positif. Kuadran 2 cuma Sinus yang positif. Jembatan keledainya: "Semua Suka Tahu Campur" (Semua, Sin, Tan, Cos). Gampang kan?
                            </div>
                            <div class="komentar-item">
                                <strong>Siti Aminah (Author):</strong> Wah anjir makasih banget Budi! Langsung nyantol di otak gw!
                            </div>
                        </div>
                    </div>
                </details>

                <!-- POSTINGAN 2 -->
                <details class="post-card">
                    <summary class="post-summary">
                        <div class="post-header">
                            <strong>Bambang Setiawan</strong> <span class="time">· 5 jam yang lalu</span>
                        </div>
                        <h4 class="post-title">Gimana cara ngilangin ngantuk pas jam pelajaran ke-7? Mata gw merem melek. (Klik untuk buka)</h4>
                    </summary>
                    
                    <div class="post-content">
                        <p>Plis saran dong, tiap jam ke 7 gw selalu ketiduran di kelas padahal udah cuci muka pas istirahat.</p>
                        <img src="assets/img/ngantuk saat belajar.png" alt="Ngantuk Saat Belajar" style="display:block; width:100%; max-width:100%; height:auto; margin-top:15px; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.15);">
                        
                        <div class="komentar-section">
                            <strong>Jawaban (1):</strong>
                            <div class="komentar-item">
                                <strong>Dr. Tirta (Meme):</strong> Tarik napas dalem 3 detik, hembusin 3 detik. Lakuin 5 kali. Oksigen ke otak nambah, otomatis ngantuk ilang bos!
                            </div>
                        </div>
                    </div>
                </details>

            </div>
        </section>

        <!-- KOLOM 3: KANAN (Hot Threads Ala Kaskus) -->
        <aside class="kanan-hot">
            <h3 class="box-title">🔥 Hot Threads</h3>
            <div class="hot-list">
                <div class="hot-item">
                    <h4>Asal Usul Rumus Pythagoras yang Disembunyikan</h4>
                    <span>1.2K Balasan</span>
                </div>
                <div class="hot-item">
                    <h4>Bocoran Pola Soal UTBK SNBT 2026</h4>
                    <span>890 Balasan</span>
                </div>
                <div class="hot-item">
                    <h4>Drama Anak IPS Pindah Jalur ke IPA</h4>
                    <span>500 Balasan</span>
                </div>
            </div>
        </aside>

    </main>

</body>
</html>
