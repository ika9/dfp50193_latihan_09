<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        *{
            font-family:verdana,Geneva,Tahoma,sans-serif;
        }
    </style>
</head>
<body>
<?php require 'menu.php'; ?>
<h1>PRODUK</h1>
<?php
    $Barang = [
        'Nama Barang' => 'Drinking Water ',
        'Size' => '500 ML',
        'Harga' => '70 sen',
    ];
    ?>

    <table>
        <tr>
            <td>Nama Barang: </td>
            <td><?php echo $Barang['Nama Barang']; ?></td>
        </tr>

        <tr>
            <td>Size : </td>
            <td><?php echo $Barang['Size']; ?></td>
        </tr>

        <tr>
            <td>Harga : </td>
            <td><?php echo $Barang['Harga']; ?></td>
        </tr>
    </table>
</body>
</html>