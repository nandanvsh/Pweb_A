<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1px cellpadding="4px" cellspacing="0" width="1200px" style="margin:auto;">
    <?php 
        $items = [
            [
                'Gambar'      => 'https://www.bhinneka.com/_next/image?url=https%3A%2F%2Fstatic.bmdstatic.com%2Fpk%2Fproduct%2Fmedium%2F618b891eea03b.jpg&w=640&q=75',
                'Nama'        => 'APPLE iPhone 13 Pro Max',
                'Harga'       => '21249000',
                'Deskripsi'   => 'iPhone 13 Pro Max terbaru adalah salah satu hp dengan kualitas kamera terbaik di dunia. Selain punya kamera yang handal, iPhone 13 Pro Max punya kualitas layar besar terbaik. Hp ini punya layar Super Retina XDR OLED seluas 6.7 inci dan resolusi 2778 x 1284 piksel. Layar iPhone 13 Pro Max didukung fitur ProMotion yang bisa menampilkan gambar di refresh rate 120 Hz. Smartphone ini ditenagai chipset A15 Bionic dengan GPU 5-Core agar grafis game lebih tajam dan mulus.',
                'Spesifikasi' => [
                    'Chipset'         => 'A15 Bionic',
                    'Kamera Depan'    => '12MP + 12MP + 12MP',
                    'Kamera Belakang' => '12 MP',
                    'Ukuran Layar'    => '6,7 Inch',
                    'Baterai'         => '4352 mAh',
                    'Sistem Operasi'  => 'iOS 15',
                    'Kabel'           => 'USB-C to Lightning'
                ]
            ],
            [
                'Gambar'      => 'https://www.bhinneka.com/_next/image?url=https%3A%2F%2Fstatic.bmdstatic.com%2Fpk%2Fproduct%2Fmedium%2F5ed716a1ba7a3.jpg&w=640&q=75',
                'Nama'        => 'FITBIT Charge 4',
                'Harga'       => '2299000',
                'Deskripsi'   => 'Fitbit Charge 4 adalah smartband atau fitness tracker yang dilengkapi GPS untuk tracking seberapa jauh Anda berolahraga. Selain itu, fitness tracker ini juga punya Heart Rate Tracking atau pembaca detak jantung. Sensor ini dapat mengukur berapa kalori yang terbakar saat berolahraga. Smartband ini bisa digunakan untuk semua jenis olahraga, mulai dari lari, jalan kaki, sepeda, atau berenang. Saat Anda tidur, Fitbit Charge 4 bisa memantau kualitas tidur Anda. Pemantauan kualitas tidur mulai dari light, deep, dan REM sleep. Anda bisa tahu berapa lama waktu tidur yang berkualitas. Sambil olahraga, kamu bisa dengarkan lagu di Spotity. Tersedia fitur Spotify Control untuk mengontrol playlist lagu. Berikut ini kelebihan smartband Fitbit Charge 4.',
                'Spesifikasi' => [
                    'Display'     => 'OLED',
                    'Baterai'     => 'Lithium Polymer',
                    'Anti Air'    => 'Ya',
                    'NFC'         => 'Ya',
                    'GPS'         => 'Ya',
                    'Touchscreen' => 'Ya'
                ]
            ],
            [
                'Gambar'      => 'https://www.bhinneka.com/_next/image?url=https%3A%2F%2Fstatic.bmdstatic.com%2Fpk%2Fproduct%2Fmedium%2FHP-Smart-Tank-615-All-in-One-Printer-Y0F71A-62984025d48b9.jpg&w=640&q=75',
                'Nama'        => 'HP Smart Tank 615 All-in-One Printer',
                'Harga'       => '3989000',
                'Deskripsi'   => 'Printer HP Smart Tank 615 memudahkan Anda dalam bekerja. Printer ini punya sistem tangki tinta yang mudah diisi ulang. Botol tinta refill bebas tumpah bisa ditutup kembali sehingga bisa dipakai di kemudian hari. Konsumsi tintanya sangat hemat, cukup untuk cetak 8000 lembar dokumen warna dan 6000 lembar hitam putih. Printer ini juga punya fitur ADF atau Auto Document Feeder yang bisa mengkopi atau scan 35 lembar dokumen secara otomatis. Tersedia juga fitur WiFi, sehingga Anda bisa kirim cetak atau kirim hasil scan ke hp atau tablet. Berikut ini semua kelebihan printer HP Smart Tank 615.',
                'Spesifikasi' => [
                    'Teknologi'     => 'HP Thermal Inkjet',
                    'Kecepatan'     => 'Hitam hingga 11 ppm, Warna hingga 5 ppm',
                    'Ukuran Kertas' => 'A4',
                    'Resolusi'      => 'Hitam hingga 1200x1200 dpi, Warna hingga 4800x1200 dpi',
                    'Konektivitas'  => 'USB 2.0',
                    'Scanner'       => 'Ya',
                    'WiFi'          => 'Ya',
                    'Bluetooth'     => 'Ya'
                ]
            ],
            [
                'Gambar'      => 'https://www.bhinneka.com/_next/image?url=https%3A%2F%2Fstatic.bmdstatic.com%2Fpk%2Fproduct%2Fmedium%2F61416adf976cb.jpg&w=640&q=75',
                'Nama'        => 'ASUS ROG Strix G G513IM-R736B6T-O',
                'Harga'       => '19550000',
                'Deskripsi'   => 'Asus ROG Strix G15 adalah laptop gaming 15 inci dengan performa serius. Laptop ini ditenagai CPU AMD Ryzen 7 4800H terbaru dan grafis diskrit NVIDIA RTX 3060. Laptop ini mampu memainkan game AAA di FPS tinggi. Layar dengan response time singkat memastikan setiap gerakan objek ditampilkan secara sempurna tanpa blur. Laptop Asus ROG Strix G15 pun didukung oleh pendingin Liquid Metal yang bisa menjaga performa tetap stabil dalam penggunaan jangka panjang. Kipas n-Blade ganda memutar 83 bilah kipas untuk meningkatkan aliran udara di dalam laptop. Hasilnya, suhu laptop turun 12 derajat Celcius lebih rendah dan kebisingan menurun hingga 4%. Inilah semua kelebihan laptop Asus ROG Strix G15.',
                'Spesifikasi' => [
                    'Platform'     => 'Notebook',
                    'Tipe Prosesor'     => 'AMD Octa Core',
                    'Prosesor Onboard' => 'AMD Ryzen 7 4800H Processor 2.9 GHz (8M Cache, up to 4.2 GHz)
                    ',
                    'Kapasitas Penyimpanan'      => '512 GB SSD',
                    'Tipe Grafis'  => 'NVIDIA GeForce RTX 3060',
                    'Ukuran Layar'       => '15.6" Full HD',
                    'Layar Sentuh'          => 'Tidak',
                    'Wireless Bluetooth'     => 'Integrated'
                ]
            ],
            [
                'Gambar'      => 'https://cf.shopee.co.id/file/eda654cf94b7b52b930df4b1b3c51753',
                'Nama'        => 'LOGITECH Keyboard USB K120',
                'Harga'       => '106000',
                'Deskripsi'   => 'Logitech Keyboard K120 merupakan sebuah keyboard berukuran penuh yang menghadirkan layout standar dengan tombol F dan pad nomor sehingga Anda dapat memberikan perintah secara lengkap. Tak hanya itu, keyboard ini juga dirancang untuk dapat memberikan pengalaman mengetik yang nyaman bagi Anda berkat desain tombol low-profile serta simbol karakter putih yang sangat mudah terbaca sehingga jemari Anda dapat menekan tombol-tombol tersebut dengan lebih leluasa. Sebagai tambahan, untuk dapat menggunakan keyboard ini, yang perlu Anda lakukan hanyalah menyambungkannya melalui port USB pada komputer desktop atau laptop Anda dan seketika itu Anda dapat langsung menggunakannya. Keyboard ini dirancang dengan desain yang ramping untuk dapat terlihat elegan di meja Anda. Namun tak hanya itu, keyboard ini juga sangat tangguh untuk dapat bertahan dari penggunaan sehari-hari. Anda juga dapat merasa tenang karena keyboard ini dapat bertahan ketika Anda secara tidak sengaja menumpahkan minuman di atasnya. Semakin lengkap dengan ketahanan tombol yang dapat ditekan hingga 10 juta kali yang akan memberikan Anda rasa tenang ketika mengetik dalam jangka waktu yang sangat panjang.',
                'Spesifikasi' => [
                    'Konektivitas'     => 'USB',
                    'Berat Produk'     => '	0.74 kg',
                    'Garansi' => '	12 Bulan dari Distributor Resmi di Indonesia',
                    'Dimensi Produk'      => '	46.83 (P) x 2.86 (L) x 18.42 (T) cm'
                ]
            ]
        ]; 
        foreach ($items as $perangkat ) { ?>
            <tr>
                <td>
                    <img src="<?= $perangkat['Gambar']?>" alt="" width = "320px">
                </td>
                <td style= "padding:5px;">
                    <h3> <?= $perangkat['Nama'] ?> </h3>
                    <p> Harga: Rp <?= number_format($perangkat['Harga'], 0, '', '.') ?> </p>
                    <p> <?= $perangkat['Deskripsi'] ?> </p>
                    <p> Spesifikasi </p>
                    <ul>
                        <?php foreach ($perangkat ['Spesifikasi'] as $namaperangkat=> $detailperangkat){ ?>
                            <li><?= $namaperangkat ?>: <?= $detailperangkat ?></li>
                        <?php }?>
                    </ul>
                </td>
            </tr>
    <?php }?>
</table>
</body>
</html>

