<?php
// // // // Soal 1
// function perkenalan()
// {
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Rama<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan();


// // // // Soal 2
// function perkenalan($nama, $salam)
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Rama", "Hallo");

// echo "<hr>";

// $saya = "Anugerah Rachmadani";
// $ucapkanSalam = "Selamat pagi";

// perkenalan($saya, $ucapkanSalam);


// // // // Soal 3
// function perkenalan($nama, $salam = "Assalamualaikum")
// {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Rama", "Hallo");

// echo "<hr>";

// $saya = "Anugerah Rachmadani";
// $ucapkanSalam = "Selamat pagi";

// perkenalan($saya);


// // // // Soal 4
// function hitungUmur($thn_lahir, $thn_sekarang)
// {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah " . hitungUmur(2003, 2024) . " tahun";


// // // // Soal 5
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
}

echo "Saya berusia " . hitungUmur(2003, 2024) . " tahun<br/>";
echo "Senang berkenalan dengan Anda<br/>";

perkenalan("Rama");
