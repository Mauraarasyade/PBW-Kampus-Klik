<?php

    //Membuat variabel
    $nama_mahasiswa = "Kim Dami";
    $nama_kamu = "Maura";
    $pekerjaan = "Mahasiswa";

    if($nama_mahasiswa != "Kim Dami"){
        if($pekerjaan == "Artis"){
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 1000000000;
        } else{
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 2000000;
        }

    } else if($nama_kamu == "Andi"){
        $jenis_kelamin = "Laki - laki";
    } else{
        $jenis_kelamin = "??";
    }

    echo "Hallo ".$nama_mahasiswa." Selamat <br> datang, saya ".$nama_kamu."
    jenis kelamin kamu adalah ".$jenis_kelamin." penghasilan Anda ".$penghasilan_perbulan;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
        Calon Pacar saya...
</body>
</html>