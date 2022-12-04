<?php
$daftar_peserta = range (1, 10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1> Praktikum 06 - PHP Array </h1>
<body style= "font-family: Calibri; font-size: 25px;">
    <div style= "display:flex ; align-items:flex-start">
    <div style="margin-right:30px">
    <p> Daftar Peserta : </p>
        <table border=1px>
            <thead>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        Nama Peserta
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($daftar_peserta as $item) { ?>
                    <tr>
                        <td>
                            <?= $item ?>
                        </td>
                        <td>
                            Peserta <?= $item ?>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
        <?php 
        shuffle($daftar_peserta);

        $kelompok1 = array_slice($daftar_peserta, 0, 3);
        $kelompok2 = array_slice($daftar_peserta, 3, 3);
        $kelompok3 = array_slice($daftar_peserta, 6, 4);
        ?>
        <div style="margin-right:30px">
        <p> Kelompok 1 : </p>
            <table border=1px>
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Peserta
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($index = 0; $index < count($kelompok1); $index++){ ?>
                        <tr>
                            <td>
                                <?= $index+1; ?>
                            </td>
                            <td>
                                Peserta <?= $kelompok1 [$index];?>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div style="margin-right:30px">
        <p> Kelompok 2 : </p>
            <table border=1px>
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Peserta
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($index = 0; $index < count($kelompok2); $index++){ ?>
                        <tr>
                            <td>
                                <?= $index+1; ?>
                            </td>
                            <td>
                                Peserta <?= $kelompok2 [$index];?>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div style="margin-right:30px">
        <p> Kelompok 3 : </p>
            <table border=1px>
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Peserta
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($index = 0; $index < count($kelompok3); $index++){ ?>
                        <tr>
                            <td>
                                <?= $index+1; ?>
                            </td>
                            <td>
                                Peserta <?= $kelompok3 [$index];?>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
<h3> 212410102048 - Hefrilia Nur Afifah </h3>
</body>
</html>