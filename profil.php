<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya | PlengerToSmart</title>
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="assets/css/style_navbar.css?v=6">
    <!-- CSS Khusus Profil (Wireframe) -->
    <link rel="stylesheet" href="assets/css/profil.css?v=6">
</head>
<body>

    <!-- PANGGIL NAVBAR -->
    <?php include "navbar.php"; ?>

    <!-- WADAH UTAMA PROFIL -->
    <main class="profil-container">
        
        <h1 class="page-title">Pengaturan Akun</h1>

        <!-- Kotak Info XP Gamifikasi (Ganti Premium Zenius) -->
        <div class="xp-banner">
            <div class="xp-text">
                <h3>Level Saat Ini: Pejuang Tangguh (Lvl 15)</h3>
                <p>Kumpulkan 500 XP lagi dari kuis buat naik ke level Master!</p>
            </div>
            <button class="btn-misi" onclick="window.location.href='quiz_awal.php'">Lihat Misi</button>
        </div>

        <!-- KARTU 1: Informasi Akun -->
        <section class="card-profil">
            <h3 class="card-title">Informasi Akun</h3>
            
            <div class="profil-header">
                <!-- Foto Profil Pura-pura -->
                <div class="avatar-besar">U</div>
                <div class="profil-info">
                    <h2>Udin Penyok</h2>
                    <p>udin.penyok@gmail.com</p>
                </div>
            </div>

            <!-- Form Edit Identitas -->
            <form class="form-profil">
                <div class="form-group">
                    <label>Jenjang Pendidikan</label>
                    <select>
                        <option>SMP Kelas 7</option>
                        <option selected>SMP Kelas 8</option>
                        <option>SMP Kelas 9</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tahun Lahir</label>
                    <select>
                        <option>2008</option>
                        <option selected>2009</option>
                        <option>2010</option>
                    </select>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-simpan">Simpan</button>
                </div>
            </form>
        </section>

        <!-- KARTU 2: Tujuan Belajar -->
        <section class="card-profil">
            <h3 class="card-title">Tujuan Belajar</h3>
            
            <!-- Form Edit Tujuan -->
            <form class="form-tujuan">
                <div class="checkbox-grid">
                    <label><input type="checkbox" checked> Pelajaran Sekolah</label>
                    <label><input type="checkbox"> Bahan Mengajar</label>
                    <label><input type="checkbox"> TKA SMA</label>
                    <label><input type="checkbox"> Meningkatkan Skill</label>
                    <label><input type="checkbox"> UTBK</label>
                    <label><input type="checkbox"> Lainnya</label>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-simpan">Simpan</button>
                </div>
            </form>
        </section>

    </main>

</body>
</html>
