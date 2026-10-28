<?php

// Otaknya disini mpruy

// 1. Pengecekan Keamanan Sederhana
// Kalau ada bocah yang iseng ngetik URL quiz_hasil.php tanpa ngerjain soal, usir ke lobi.
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "Lu belom ngerjain kuis! Mending balik ke <a href='quiz_awal.php'>Lobi Kuis</a>.";
    exit;
}

// 2. Kunci Jawaban Benar (Simpan di Array biar gampang dibaca)
$kunci_jawaban = [
    'q1' => 'B', // x+y=5, x-y=1 -> 2x=6 -> x=3
    'q2' => 'B', // 2x=10 -> x=5 -> x+5=10
    'q3' => 'B', // 2(2000)+y=5000 -> y=1000
    'q4' => 'B', // x=3+2 -> 5
    'q5' => 'A', // Linear pangkat tertinggi 1
    'q6' => 'B'  // 3x=9 -> x=3
];

$skor = 0;
$soal_salah = []; // Keranjang buat nyatet soal mana aja yang salah

// 3. Proses Lempar-Tangkap Data
// Kita periksa satu-satu jawaban user yang dilempar dari form HTML
foreach ($kunci_jawaban as $nomor_soal => $jawaban_benar) {
    // Tangkap jawaban dari form (pakai @ biar gak error kalau user curang nembus atribut required)
    $jawaban_user = isset($_POST[$nomor_soal]) ? $_POST[$nomor_soal] : ''; 
    
    // Logika Penilaian
    if ($jawaban_user == $jawaban_benar) {
        $skor += 16.666; // 100 dibagi 6 soal = 16.66 per soal
    } else {
        array_push($soal_salah, $nomor_soal); // Masukin nomer soal ke keranjang salah
    }
}

// Pembulatan nilai biar angkanya cakep (gak koma-koma)
$nilai_akhir = round($skor); 

// 4. Sistem Quotes Dinamis (Berdasarkan Nilai)
$quotes_hasil = "";
if ($nilai_akhir == 100) {
    $quotes_hasil = "EH GILUY! Otak lu isinya RAM 32GB ya? Keren parah!";
} elseif ($nilai_akhir >= 60) {
    $quotes_hasil = "Lumayan lah... gak jelek jelek amat.";
} else {
    $quotes_hasil = "Mending turu bang... gw yang malu.";
}

// 5. Sistem Papan Peringkat Bot Dinamis
// Bikin daftar bot untuk saingan user
$ranking_list = [
    ["nama" => "Albert Einsten (Bot)", "nilai" => 83],
    ["nama" => "Siti Jenius (Bot)", "nilai" => 66],
    ["nama" => "Budi Benkel (Bot)", "nilai" => 50],
    ["nama" => "Jono Pemalas (Bot)", "nilai" => 33],
    ["nama" => "Kamu (User)", "nilai" => $nilai_akhir] // Masukin user kita ke turnamen
];

// Perintah PHP buat ngurutin dari nilai paling gede ke paling kecil
usort($ranking_list, function($a, $b) {
    return $b['nilai'] - $a['nilai'];
});
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuis | PlengerToSmart</title>
    <link rel="stylesheet" href="assets/css/style_navbar.css?v=6">
    <link rel="stylesheet" href="assets/css/quiz.css?v=6">
</head>
<body>
    <?php include "navbar.php"; ?>

    <main class="quiz-container">
        
        <!-- BAGIAN 1: NILAI AKHIR -->
        <div class="hasil-box">
            <h2>Kuis Selesai!</h2>
            <div class="nilai-angka"><?php echo $nilai_akhir; ?></div>
            <p class="quotes-plenger">"<?php echo $quotes_hasil; ?>"</p>
        </div>

        <!-- BAGIAN 2: KOREKSI JAWABAN (Kondisi: Cuma Muncul Kalau Ada Yang Salah) -->
        <?php if (count($soal_salah) > 0) { ?>
            <div class="koreksi-box">
                <h3 style="color:red; margin-bottom:10px;">Koreksi Jawaban Lu yang Plenger:</h3>
                
                <?php 
                // Cek satu-satu di keranjang salah
                if (in_array('q1', $soal_salah)) {
                    echo "<div class='salah-item'><b>Soal 1 Salah!</b><div class='pembahasan'><b>Pembahasan:</b> x+y=5, x-y=1. Ditambah jadi 2x = 6. Maka x = 3 (Jawaban B).</div></div>";
                }
                if (in_array('q2', $soal_salah)) {
                    echo "<div class='salah-item'><b>Soal 2 Salah!</b><div class='pembahasan'><b>Pembahasan:</b> 2x=10 berarti x=5. Yang ditanya x+5, jadi 5+5=10 (Jawaban B).</div></div>";
                }
                if (in_array('q3', $soal_salah)) {
                    echo "<div class='salah-item'><b>Soal 3 Salah!</b><div class='pembahasan'><b>Pembahasan:</b> 2(2000) + Pensil = 5000. Pensil = 1000 (Jawaban B).</div></div>";
                }
                if (in_array('q4', $soal_salah)) {
                    echo "<div class='salah-item'><b>Soal 4 Salah!</b><div class='pembahasan'><b>Pembahasan:</b> y=3, persamaan: x=y+2 -> x = 3+2 = 5 (Jawaban B).</div></div>";
                }
                if (in_array('q5', $soal_salah)) {
                    echo "<div class='salah-item'><b>Soal 5 Salah!</b><div class='pembahasan'><b>Pembahasan:</b> Linear itu artinya garis lurus, pangkat tertingginya selalu 1 (Jawaban A).</div></div>";
                }
                if (in_array('q6', $soal_salah)) {
                    echo "<div class='salah-item'><b>Soal 6 Salah!</b><div class='pembahasan'><b>Pembahasan:</b> 3 dikali berapa hasilnya 9? Ya 3 lah bang (Jawaban B).</div></div>";
                }
                ?>
            </div>
        <?php } else { ?>
            <!-- Kalau nilainya 100, kotak koreksi jadi ijo -->
            <div class="koreksi-box" style="border-left: 5px solid green; background-color: #e6ffe6;">
                <h3 style="color:green;">Sempurna! Gak ada yang perlu dikoreksi.</h3>
            </div>
        <?php } ?>

        <!-- BAGIAN 3: LEADERBOARD BOT -->
        <div class="leaderboard-box">
            <h3 style="text-align:center; margin-bottom: 20px;">🏆 Papan Peringkat</h3>
            
            <?php 
            // Looping buat nampilin urutan juara dari ranking_list yang udah diurutin di atas
            $rank = 1;
            foreach ($ranking_list as $peserta) { 
                
                // Logika styling CSS buat Panggung Top 3
                $css_class = "";
                if ($rank == 1) $css_class = "top-1";
                elseif ($rank == 2) $css_class = "top-2";
                elseif ($rank == 3) $css_class = "top-3";

                // Kalau pesertanya adalah "Kamu (User)", tambahin CSS khusus
                if ($peserta['nama'] == "Kamu (User)") {
                    $css_class .= " me"; 
                }
            ?>
                
                <div class="rank-item <?php echo $css_class; ?>">
                    <span>#<?php echo $rank; ?> <?php echo $peserta['nama']; ?></span>
                    <span><?php echo $peserta['nilai']; ?> Poin</span>
                </div>

            <?php 
                $rank++;
            } 
            ?>
        </div>

        <!-- Tombol Ulangi -->
        <div style="text-align:center; margin-top: 30px;">
            <a href="quiz_awal.php" class="btn-kumpul" style="text-decoration:none; display:inline-block;">Main Lagi / Balik ke Lobi</a>
        </div>

    </main>
</body>
</html>
