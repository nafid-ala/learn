<?php
$daftar_barang = [
    [
        "nama" => "mouse logitech",
        "harga" => 20000,
        "stock" => 5
    ],
    [
        "nama" => "keyboard Mechanical",
        "harga" => 8000000,
        "stock" => 0
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 80%;">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>harga</th>
                <th>stock</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; $total_harga=0 ?>
            <?php foreach ($daftar_barang as $item):?>
                <tr style="text-align: center;">
                    <td><?= $no++ ?></td>
                    <td><?= $item["nama"]; ?></td>
                    <td>Rp.<?= number_format($item["harga"]) ;?></td>
                    <td><?= $item["stock"] ;?></td>
                    <td>
                        <?php if ($item["stock"] > 0) :?>
                        <span style="color: green;">Tersedia</span>
                        <?php else : ?>
                            <span style="color: red;">habis</span>
                        <?php endif ?>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>