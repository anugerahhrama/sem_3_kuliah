<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: start;
            padding: 20px;
            background-color: #e6d62d;
            color: #292929;
            font-size: larger;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <?php
    $listDosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan',
    ];

    echo "Nama: {$listDosen['nama']} <br>";
    echo "Domisili: {$listDosen['domisili']} <br>";
    echo "Jenis Kelamin: {$listDosen['jenis_kelamin']} <br>";
    ?>
</body>

</html>