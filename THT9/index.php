<?php
// index.php

// Termasuk kelas Calculator
require_once 'kalkulator.php';

// Instansiasi objek Calculator
$calculator = new kalkulator();

// Periksa apakah ada permintaan kalkulator
if (isset($_POST['calculate'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    // Handle operasi sesuai dengan operator yang dipilih
    switch ($operator) {
        case 'tambah':
            $hasil = $calculator->tambah($angka1, $angka2);
            break;
        case 'kurang':
            $hasil = $calculator->kurang($angka1, $angka2);
            break;
        case 'kali':
            $hasil = $calculator->kali($angka1, $angka2);
            break;
        case 'bagi':
            $hasil = $calculator->bagi($angka1, $angka2);
            break;
        default:
            $hasil = "Error: Operator tidak valid.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure Mathematics</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML"></script>
</head>
<body class="grid-container">
    <!-- ... Bagian lain dari HTML ... -->

    <!-- Form kalkulator di bagian HTML -->
    <section id="calculator" class="grid-container">
        <h2>Calculator</h2>
        <form method="post" action="">
            <input type="text" name="angka1" required>
            <select name="operator" required>
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <input type="text" name="angka2" required>
            <button type="submit" name="calculate">Hitung</button>
        </form>

        <!-- Menampilkan hasil kalkulasi -->
        <?php if (isset($hasil)) : ?>
            <p>Hasil: <?php echo $hasil; ?></p>
        <?php endif; ?>
    </section>
    <footer>
        <p style="color: antiquewhite;"><i>created by myself</i></p>
    </footer>
</body>
</html>
