<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN</title>
    <style>
        *{
            font-family:verdana,Geneva,Tahoma,sans-serif;
        }
    </style>
</head>
<body>
<body>
    <?php require 'menu.php'; ?>

        <h1>TRANSAKSI</h1>

        <?php
    $Barang= [
        'Penerima' =>[
        'Tarikh' => '01-10-2021 ',
        'Perkara' => 'Terima Dari Pemborong',
        'Masuk' => '100',
        'keluar' => '-',
        'Baki' => '100',
        ],

        'Enterprise' =>[
                'Tarikh' => '03-10-2021 ',
                'Perkara' => 'CBR ENTERPRISE',
                'Masuk' => '-',
                'keluar' => '30',
                'Baki' => '70',
        ]
    ];
    ?>

    <table border="1" cellspacing="0">
        <tr>
            <th>Bil</th>
            <th>Tarikh</th>
            <th>Perkara</th>
            <th>Masuk</th>
            <th>keluar</th>
            <th>Baki</th>
        </tr>

        <?php
        $bil = 1;
        foreach($Barang as $Barang) {
         ?>
         <tr>
             <td><?php echo $bil++ ?></td>
             <td><?php echo $Barang['Tarikh']; ?></td>
             <td><?php echo $Barang['Perkara']; ?></td>
             <td><?php echo $Barang['Masuk']; ?></td>
             <td><?php echo $Barang['keluar']; ?></td>
             <td><?php echo $Barang['Baki']; ?></td>
        </tr>
        <?php
        }
        ?>
</body>
</html>