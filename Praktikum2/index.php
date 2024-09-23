<?php
include "Orang.php";
include "BankCustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo Praktikum 2</h1>
    <div class="di">
        <?php
            $nasabah = new BankCustomer();
            $nasabah->setCustomerName('Surah Annisa');
            $nasabah->setAddress('Jambi luar kota, Simpang sungai duren');
            $nasabah->setEmail('surahannisa961@gmail.com');
            $nasabah->setCard('Personal');
            $nasabah->setAcc('Wadiah');

            $nasabah->insertCard();
            $nasabah->enterPIN(12345678);
        ?>
    </div>
</body>
</html>
<!-- localhost/index.php?nama=Nisa -->
<!-- http:uinjambi.ac.id/berita?page=1&search=kuliah&orderBy=id -->