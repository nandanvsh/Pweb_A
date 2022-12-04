<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5</title>
</head>
<body style="font-family:calibri; margin:16px">
<h1 style= "font-size:30px; padding: 0 18px; margin-left:10px"> Praktikum 05 - PHP Objects </h1>
    <?php
        class lingkaran{
            public $jejari;
            public function __construct($_jejari){
                $this->jejari = $_jejari;
            }
            public function luas(){
                return 3.14 * $this->jejari * $this->jejari;
            }
            public function keliling(){
                return 3.14 * $this->jejari * 2;
            }
            public function display(){
                return "Jika ada lingkaran dengan nilai jari-jari ".$this->jejari.", maka luasnya adalah <span style= 'color: red'>".$this->luas()."</span> dan kelilingnya adalah <span style= 'color: red'>".$this->keliling()."</span>";
            }
        }
        class segitiga{
            public $alas;
            public $tinggi;
            public function __construct($alas, $tinggi){
                $this->alas = $alas;
                $this->tinggi = $tinggi;
            }
            public function luas(){
                return 0.5 * $this->alas * $this->tinggi;
            }
            public function keliling(){
                return round(sqrt(($this->alas * $this->alas)+($this->tinggi * $this->tinggi)),2);
            }
            public function display(){
                return "Jika ada lingkaran dengan nilai alas".$this->alas." dan tinggi ".$this->tinggi.", maka luasnya adalah <span style= 'color: red'>".$this->luas()."</span> dan kelilingnya adalah <span style= 'color: red'>".$this->keliling()."</span>";
            }
        }
        $lingk1 = new lingkaran(13);
        $lingk2 = new lingkaran(15);
        $lingk3 = new lingkaran(17);
        $segit1 = new segitiga(13,17);
        $segit2 = new segitiga(15,19);
    ?>
    <ol>
        <li><?=$lingk1->display();?></li>
        <li><?=$lingk2->display();?></li>
        <li><?=$lingk3->display();?></li>
        <li><?=$segit1->display();?></li>
        <li><?=$segit2->display();?></li>
    </ol>
    <h3 style = "margin:30px; margin-left: 18%"> 212410102048 - Hefrilia Nur Afifah</h3>
</body>
</html>