<?php

$pattern = '/[a-z]/'; //Cocokan huruf kecil
$text = 'This is a Sample  text.';
if (preg_match($pattern, $text)) {
    echo "Huruf  kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br><br>";

$pattern = '/[0-9]+/'; //Cocokan 1 atau lebih digit
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " .  $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text  = preg_replace($pattern, $replacement, $text);
echo $new_text;

echo "<br><br>";

$pattern = "/go*d/";
$text = "god is good.";
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " .  $matches[0];
} else {
    echo "Tidak  ada yang cocok!";
}

echo "<br><br>";

$pattern = "/go?d/";
$text = "god is good.";
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " .  $matches[0];
} else {
    echo "Tidak  ada yang cocok!";
}

echo "<br><br>";

$pattern = "/go{0,1}d/";
$text = "god is good.";
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
