<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilailulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilailulus);

echo "<br><br>";

$daftarkaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarkaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

echo "<br><br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}


//Soal Cerita soal 5.4
echo "<br><strong>Soal Cerita soal 5.4 </strong><br>";
// Daftar nilai siswa
$daftarNilai = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90],
];

echo "Daftar Nilai: [ ";
foreach ($daftarNilai as $skor) {
    echo "$skor[0] = $skor[1]; ";
}
echo "] <br>";

$scoresAverage = countAverage($daftarNilai);


echo "<br>Rata-rata Nilai Siswa adalah: $scoresAverage <br>";
echo "<br>Siswa yang mendapatkan nilai diatas rata-rata: <br>";
foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $scoresAverage) {
        echo $nilai[0] . " dengan nilai " . $nilai[1] . "<br>";
    }
}

function countAverage($array)
{
    $total = 0;
    foreach ($array as $skor) {
        $total += $skor[1];
    }
    return $total / count($array);
}
