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
        "stock" => 2
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventaris Sesi 2 - Fixed</title>
</head>
<body>
    <h3>Daftar Inventaris</h3>
    <ul>
        <?php 
        $total_harga = 0; 
        $total_barang = 0; 
        ?>

        <?php foreach ($daftar_barang as $item) : ?>
            <li>
                <strong><?= $item["nama"] ?></strong> - 
                Harga: Rp<?= number_format($item["harga"]) ?>
                
                <?php if ($item["stock"] > 0) : ?>
                    <p style="color: green;">Tersedia (Stok: <?= $item["stock"] ?>)</p>
                    <?php $total_harga += $item["harga"]; ?>
                <?php else : ?>
                    <p style="color: red;">Habis Terjual</p>
                <?php endif; ?>

                <?php $total_barang += $item["stock"]; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <hr>
    <h4>Total Nilai Barang Tersedia: 
        <span style="color: blue;">Rp<?= number_format($total_harga) ?></span>
    </h4>
    <h4>Total Unit di Gudang: 
        <span style="color: orange; font-weight: bold;"><?= $total_barang ?> Unit</span>
    </h4>

</body>
</html>