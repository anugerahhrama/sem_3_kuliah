<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table,
        tr {
            text-align: center;
        }

        table,
        tr,
        th {
            padding: 16px;
        }

        table,
        tr,
        td {
            padding: 8px;
        }

        button {
            width: 100%;
            height: 32px;
        }
    </style>
</head>

<body>
    <?php
    $datas = array(
        array(
            'nama' => 'Dani',
            'umur' => 20,
            'kelas' => '1A',
            'alamat' => 'Malang'
        ),
        array(
            'nama' => 'Dina',
            'umur' => 19,
            'kelas' => '1B',
            'alamat' => 'Jogja'
        ),
        array(
            'nama' => 'Doni',
            'umur' => 20,
            'kelas' => '1C',
            'alamat' => 'Surabaya'
        ),
        array(
            'nama' => 'Dino',
            'umur' => 19,
            'kelas' => '1D',
            'alamat' => 'Jakarta'
        )
    );

    // Menghitung rata-rata umur siswa
    $totalUmur = 0;
    foreach ($datas as $row) {
        $totalUmur += $row['umur'];
    }
    $rataRataUmur = round($totalUmur / count($datas), 2);
    ?>



    <h1>Data Siswa</h1>

    <button id="btn">Show Data</button>
    <div id="table" style="display: none;">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php foreach ($datas as $row) { ?>
                <tr>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['umur']; ?></td>
                    <td><?php echo $row['kelas']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                </tr>
            <?php } ?>
        </table>
        <h2>Rata-rata Umur Siswa: <?php echo $rataRataUmur ?> tahun</h2>
    </div>

    <script>
        $(document).ready(function() {
            $("#btn").click(function() {
                // Toggle tabel dengan animasi slide
                $("#table").slideToggle("slow", function() {
                    // Setelah animasi selesai, cek apakah tabel terlihat atau tidak
                    if ($("#table").is(":visible")) {
                        $("#btn").text("Hide Data");
                    } else {
                        $("#btn").text("Show Data");
                    }
                });
            });
        });
    </script>

</body>

</html>