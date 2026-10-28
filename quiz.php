<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Berlangsung | PlengerToSmart</title>
    <link rel="stylesheet" href="assets/css/style_navbar.css?v=6">
    <link rel="stylesheet" href="assets/css/quiz.css?v=6">
</head>
<body>
    <?php include "navbar.php"; ?>

    <main class="quiz-container">
        <!-- Wireframe Timer (Animasi CSS Murni tanpa JS) -->
        <div class="timer-container">
            <div class="timer-bar"></div>
            <div class="timer-text">⏳ Sisa Waktu Anda: 10 Menit</div>
        </div>

        <!-- FORM KUIS: Lempar data ke quiz_hasil.php pakai metode POST -->
        <form action="quiz_hasil.php" method="POST">
            
            <div class="soal-box">
                <div class="soal-text">1. Diketahui persamaan x + y = 5 dan x - y = 1. Berapakah nilai x?</div>
                <div class="opsi-jawaban">
                    <!-- Atribut required biar user gak bisa ngumpul kalo ada yang kosong -->
                    <label><input type="radio" name="q1" value="A" required> A. 2</label>
                    <label><input type="radio" name="q1" value="B"> B. 3</label>
                    <label><input type="radio" name="q1" value="C"> C. 4</label>
                </div>
            </div>

            <div class="soal-box">
                <div class="soal-text">2. Jika 2x = 10, maka nilai dari x + 5 adalah?</div>
                <div class="opsi-jawaban">
                    <label><input type="radio" name="q2" value="A" required> A. 5</label>
                    <label><input type="radio" name="q2" value="B"> B. 10</label>
                    <label><input type="radio" name="q2" value="C"> C. 15</label>
                </div>
            </div>

            <div class="soal-box">
                <div class="soal-text">3. Budi beli 2 buku dan 1 pensil harganya Rp 5.000. Harga 1 buku Rp 2.000. Berapa harga pensil?</div>
                <div class="opsi-jawaban">
                    <label><input type="radio" name="q3" value="A" required> A. Rp 500</label>
                    <label><input type="radio" name="q3" value="B"> B. Rp 1.000</label>
                    <label><input type="radio" name="q3" value="C"> C. Rp 2.000</label>
                </div>
            </div>

            <div class="soal-box">
                <div class="soal-text">4. x = y + 2. Jika y = 3, maka x adalah?</div>
                <div class="opsi-jawaban">
                    <label><input type="radio" name="q4" value="A" required> A. 1</label>
                    <label><input type="radio" name="q4" value="B"> B. 5</label>
                    <label><input type="radio" name="q4" value="C"> C. 6</label>
                </div>
            </div>

            <div class="soal-box">
                <div class="soal-text">5. Persamaan linear dua variabel memiliki pangkat tertinggi bernilai?</div>
                <div class="opsi-jawaban">
                    <label><input type="radio" name="q5" value="A" required> A. Satu</label>
                    <label><input type="radio" name="q5" value="B"> B. Dua</label>
                    <label><input type="radio" name="q5" value="C"> C. Tiga</label>
                </div>
            </div>

            <div class="soal-box">
                <div class="soal-text">6. Dari persamaan sederhana 3x = 9, nilai x adalah?</div>
                <div class="opsi-jawaban">
                    <label><input type="radio" name="q6" value="A" required> A. 2</label>
                    <label><input type="radio" name="q6" value="B"> B. 3</label>
                    <label><input type="radio" name="q6" value="C"> C. 4</label>
                </div>
            </div>

            <!-- Tombol untuk mensubmit form ke PHP -->
            <button type="submit" class="btn-kumpul">Selesai & Kumpulkan</button>
        </form>
    </main>
</body>
</html>
