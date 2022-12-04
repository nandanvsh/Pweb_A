<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body style="font-family:calibri;">
<p style= "font-size:30px; padding: 0 18px">Praktikum 04 - PHP Function</p>
    <div style= "padding: 0 18px; font-size:20px;">
        <?php
            function luasLingkaran($r)
                {
                    return 3.14 * $r * $r;
                }
                echo "1. Jika ada lingkaran dengan nilai jari-jari 13, maka luas lingkaran tersebut adalah <span style='color: red'>". luasLingkaran(13)."</span>.<br>";
                echo "2. Jika ada lingkaran dengan nilai jari-jari 15, maka luas lingkaran tersebut adalah <span style= 'color: red'>". luasLingkaran(15)."</span>.<br>"; 
                echo "3. Jika ada lingkaran dengan nilai jari-jari 17, maka luas lingkaran tersebut adalah <span style= 'color: red'>". luasLingkaran(17)."</span>.<br>";

            function kelilingLingkaran($c)
                {
                    return 2 * 3.14 * $c;
                }
                echo "4. Jika ada lingkaran dengan nilai jari-jari 19, maka keliling lingkaran tersebut adalah <span style= 'color: red'>". kelilingLingkaran(19)."</span>.<br>";
                echo "5. Jika ada lingkaran dengan nilai jari-jari 21, maka keliling lingkaran tersebut adalah <span style= 'color: red'>". kelilingLingkaran(21)."</span>.<br>";
        ?>
    </div>
<p style="padding:0 200px; font-size:20px;"> 212410102048 - Hefrilia Nur Afifah </p>
</body>
</html>