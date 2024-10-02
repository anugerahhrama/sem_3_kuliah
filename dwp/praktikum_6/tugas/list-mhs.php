<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $datas = array(
        array(
            'nama' => 'dina',
            'nim' => '123456',
            'jurusan' => 'teknik kimia',
            'email' => 'dina@gmail.com'
        ),
        array(
            'nama' => 'dino',
            'nim' => '9123124',
            'jurusan' => 'teknik listrik',
            'email' => 'dino@gmail.com'
        )
    );
    ?>

    <ul>
        <?php foreach ($datas as $row) { ?>
            <li>
                Nama: <?php echo $row['nama']; ?>
            </li>
            <li>
                NIM: <?php echo $row['nim']; ?>
            </li>
            <li>
                Jurusan: <?php echo $row['jurusan']; ?>
            </li>
            <li>
                Email: <?php echo $row['email']; ?>
            </li>
            <br>
        <?php } ?>
    </ul>
</body>

</html>