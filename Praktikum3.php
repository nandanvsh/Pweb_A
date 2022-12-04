<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body style="font-family:calibri;">
    <h1 style= "padding:18px; text-align:center;">Praktikum 03 - Intoduction to PHP </h1>
    <?php for ($i = 1; $i <= 100; $i++) : ?>
            <?php if ($i % 3 == 0) : ?>
                <table border="0" align="center" cellspacing="0" cellpadding="5px" width="50%" style="background-color:black; color:white;">
                    <tr>
                        <td style="width: 54px;px; border-style:none; text-align:center;"><?=$i ?>.</td>
                        <td style="border-style:none;">Ini baris ke-<?=$i ?>.</td>
                    </tr>
                </table>
            <?php else : ?>
                <table border="1" align="center" cellspacing="0" cellpadding="5px" width="50%">
                    <tr>
                        <td style="width: 50px;px; text-align:center;"><?=$i ?>.</td>
                        <td>Ini baris ke-<?=$i ?>.</td>
                    </tr>
                </table>
            <?php endif; ?>
        <?php endfor; ?>
        <p style="text-align:center; font-size:20px; padding:18px; font-weight:bolder;"> 212410102048 - Hefrilia Nur Afifah </p>
</body>
</html>