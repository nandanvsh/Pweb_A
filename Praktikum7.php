<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2 style= "margin-left: 150px"> Praktikum 07 - Practical PHP</h2>
<body style= "font-family: Calibri; font-size: 20px;" >
    <table border=1px align="center" width="80%">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th> 
                            Keterangan
                        </th>
                        <th style= "text-align: right">
                            Jumlah
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $tgl = "2022-01-01"; ?>
                    <?php for ($i = 0; $i < 999; $i++) : ?>
                        <tr>
                            <td> <?= $i + 1?> </td>
                                <td><?= date('j F Y',strtotime($tgl."+$i days")); ?></td>
                                <td>TRN-<?= date('Y - m - d',strtotime($tgl."+$i days")); ?> - <?=sprintf("%03d",$i + 1); ?></td>
                                <td style= "text-align: right">Rp <?=$i + 1?>.000</td>

                        </tr>
                    <?php endfor;?>
                </tbody>
    </table>  
<h4 align = "center"> 212410102048 - Hefrilia Nur Afifah </h3>
</body>
</html>