<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="">
        <?php
        require_once "orangBiasa.php";
        require_once "orangInggris.php";
        require_once "Mahasiswa.php";

        $Archell = new orangBiasa();
        $Archell->setNama("Archellia");
        $Archell-> ucapSalam();

        echo "<br>";

        $Willy = new orangInggris();
        $Willy->setNama("Willy Yulianti");
        $Willy->ucapSalam();

        echo "<br>";

        $mahasiswa = new Mahasiswa();
        $mahasiswa->setNama("Surah Annisa");
        $mahasiswa->setNim("701230028");

        $nilaiMahasiswa = new Nilai();
        $nilaiMahasiswa->setTugas(70);
        $nilaiMahasiswa->setUts(67);
        $nilaiMahasiswa->setUas(90);

        $mahasiswa->setNilai($nilaiMahasiswa);

        $mahasiswa->ucapSalam();
        $mahasiswa->tampilkanData();
        ?>
    </div>
</body>
</html>