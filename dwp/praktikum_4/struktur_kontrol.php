<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";

$jarakSaatini = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatini < $jarakTarget) {
    $jarakSaatini += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

//Soal Cerita soal 4.6
echo "<br><strong>Soal Cerita soal 4.6 </strong><br>";
$daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
echo "Daftar Nilai: [ ";
foreach ($daftarNilai as $nilai) {
    echo "$nilai ";
}
echo "] <br>";

$totalNilai = 0;
$rataRata = 0;
for ($i = 2; $i < count($daftarNilai) - 2; $i++) {
    $totalNilai += $daftarNilai[$i];
}
echo "Total nilai ujian matematika setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: $totalNilai <br>";

$rataRata = $totalNilai / (count($daftarNilai) - 4);
echo "Rata-rata nilai ujian matematika setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: $rataRata <br><br>";

//Soal Cerita soal 4.7
echo "<br><strong>Soal Cerita soal 4.7</strong><br>";
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}

$hargaSetelahDiskon = $hargaProduk - $diskon;

echo "Harga produk: Rp $hargaProduk<br>";
echo "Diskon yang diberikan: Rp $diskon<br>";
echo "Harga yang harus dibayar: Rp $hargaSetelahDiskon";
echo "<br><br>";

//Soal Cerita soal 4.8
echo "<br><strong>Soal Cerita soal 4.8</strong>";
$total_poin = 550;
echo "<br>Total skor pemain: $total_poin";
$hadiah = ($total_poin > 500) ? "YA." : "TIDAK.";
echo "<br>Apakah pemain mendapatkan hadiah tambahan? $hadiah";
