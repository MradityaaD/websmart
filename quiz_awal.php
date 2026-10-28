<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lobi Kuis | PlengerToSmart</title>
    <link rel="stylesheet" href="assets/css/style_navbar.css?v=6">
    <link rel="stylesheet" href="assets/css/quiz.css?v=6">
</head>
<body>
    <?php include "navbar.php"; ?>

    <main class="quiz-container">
        <!-- Header Judul -->
        <div class="lobi-header">
            <h1>Pilih Ujian Hari Ini</h1>
            <div class="quotes-plenger">
                "Kalo matematika itu gampang, pasti yang ngerjain AI, bukan manusia. Semangat Mpruy!"
            </div>
        </div>

        <!-- Pemilihan Pelajaran -->
        <div class="mapel-grid">
            
            <!-- Mapel yang Bisa Dipilih -->
            <a href="quiz.php" class="mapel-card">
                <h2>Matematika</h2>
                <p>Topik: Aljabar SPLDV</p>
                <br>
                <strong>MULAI KUIS ></strong>
            </a>

            <!-- Mapel Terkunci Sesuai Konsep MVP -->
            <div class="mapel-card disabled">
                <h2>Bahasa Inggris</h2>
                <p>Topik: Grammar Level 1</p>
                <br>
                <strong>(Terkunci)</strong>
            </div>

            <div class="mapel-card disabled">
                <h2>Sains Dasar</h2>
                <p>Topik: Gaya & Gerak</p>
                <br>
                <strong>(Terkunci)</strong>
            </div>

            <div class="mapel-card disabled">
                <h2>Sejarah</h2>
                <p>Topik: Kemerdekaan RI</p>
                <br>
                <strong>(Terkunci)</strong>
            </div>

        </div>
    </main>
</body>
</html>
