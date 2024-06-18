<?php

    include "koneksi.php";

    //mengambil data inputan
    $nama_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];
    $perulangan = $_POST['ulangi'];
    $jenis_kelamin = $_POST['jenis'];

    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mahasiswa, prodi, jenis_kelamin) VALUES ('".$nama_mhs."','".$prodi_mhs."','".$jenis_kelamin."') ")
    or die(mysqli_error($koneksi));
    
    if($proses){
        echo "
            <script>
                alert('Data Berhasil Disimpan');
                window.location.href='pertemuan_12.php';
            </script>";
    } else echo "<script>
                    alert('Data Gagal Disimpan');
                    window.location.href='pertemuan_12.php';
                </script>";

    if($nilai_mhs != ""){
        if($nilai_mhs >= 85){
            $huruf_mutu = 'A';
        } else if($nilai_mhs >=75){
            $huruf_mutu = 'B';
        } else if($nilai_mhs >=65){
            $huruf_mutu = 'C';
        } else{
            $huruf_mutu = 'E';
        }

        for($x = 0; $x <= $perulangan; $x++){
            //echo "<script>alert('".$npm_mhs." Nilai Mata Kuliah Anda adalah : ".$huruf_mutu."')</script>";
            echo $npm_mhs." Nilai Mata Kuliah Anda adalah : ".$huruf_mutu."<br>";
        }
        
    }
?>