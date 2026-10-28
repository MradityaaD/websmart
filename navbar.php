<!-- layout/navbar.php -->
<link rel="stylesheet" href="assets/css/style_navbar.css?v=6">

<nav class="navbar">
    <!-- Bagian Kiri: LOGO -->
    <a href="profil.php" class="logo" style="text-decoration: none; color: inherit;">Plenger<span>to</span>Smart</a>
    
    <!-- Bagian Kanan: MENU -->
    <ul class="nav-links">
        <li><a href="index.php">Beranda</a></li>
        
        <!-- BUNGKUSAN MENU MATERI (DROP DOWN) -->
        <li class="dropdown-wrapper">
            <a href="#" class="dropdown-btn" onclick="return false;">Materi ▼</a>
            
            <!-- ISI POP UP MEGA MENU -->
            <div class="mega-menu">
                <!-- Kolom 1: Mata Pelajaran -->
                <div class="menu-col">
                    <h4>Mata Pelajaran</h4>
                    <div class="menu-item active">Matematika ></div>
                    <div class="menu-item disabled">Sains (Kunci)</div>
                    <div class="menu-item disabled">Sejarah (Kunci)</div>
                    <div class="menu-item disabled">B. Inggris (Kunci)</div>
                </div>
                
                <!-- Kolom 2: Tingkatan (Muncul kalau MTK dipilih) -->
                <div class="menu-col">
                    <h4>Tingkat</h4>
                    <div class="menu-item disabled">SD (Kunci)</div>
                    <div class="menu-item active">SMP ></div>
                    <div class="menu-item disabled">SMA (Kunci)</div>
                </div>

                <!-- Kolom 3: Kelas (Muncul kalau SMP dipilih) -->
                <div class="menu-col">
                    <h4>Kelas</h4>
                    <div class="menu-item disabled">Kelas 7 (Kunci)</div>
                    <!-- tombol yang bisa di klik -->
                    <a href="materi.php" class="menu-item clickable">Kelas 8 (Buka)</a>
                    <div class="menu-item disabled">Kelas 9 (Kunci)</div>
                </div>
            </div>
        </li>

        <li><a href="quiz_awal.php">Quiz</a></li>
        <li><a href="artikel.php">Artikel</a></li>
        <li><a href="komunitas.php">Komunitas</a></li>
        <li><a href="profil.php"><button class="btn-login">Profil / Masuk</button></a></li>
    </ul>
</nav>