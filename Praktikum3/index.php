<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <?php include "Visibility.php";

        $Visibility = new Visibility();
        $Visibility->tampilkanData();

        echo "<br>";

        echo "Akses di luar kelas";
        echo "Public: " . $Visibility->public . "<br>";
        //echo "Private: " . $Visibility->private . "<br>";
        //echo "Protected: " . $Visibility->protected . "<br>";
        echo "<br> <br>";
        echo "<h2> Konsep Pewarisan </h2>";

        include "Mahasiswa.php";

        $mahasiswa = new Mahasiswa("Archellia");
        $mahasiswa->ucapSalam();

        $mahasiswaInggris = new MahasiswaAsing("Surah Annisa");
        $mahasiswaInggris->ucapSalam();
     ?>
     </div>
</body>
</html>