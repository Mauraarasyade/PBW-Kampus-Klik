<?php
    include "tampilkan_data.php";
    include "edit_data.php";

    $data_edit = mysqli_fetch_assoc($proses_ambil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <div class="span9" id="content">
        <!-- morris stacked chart -->
        <div class="row-fluid">
        <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Nilai Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <?php
                            if (isset($_GET['id']) && $_GET['id'] != "") {
                                if (isset($data_edit['id'])) {
                        ?>
                            <form action="edit_data.php?id=<?php echo $data_edit['id'] ?>&proses=1" method="POST">
                        <?php
                            }else{
                                echo "Data tidak ditemukan.";
                            }} else {
                        ?>
                            <form action="proses_pertemuan_12.php" method="POST">
                        <?php
                            }
                        ?>
                        
                            <fieldset>
                            <legend>Input Nilai Mahasiswa</legend>
                            <div class="control-group">
                                <label class="control-label" for="nama">NAMA MAHASISWA : </label>
                                <div class="controls">
                                    <input type="hidden" class="input-xlarge focused" id="id" name="id"
                                    value="<?php if($data_edit) echo $data_edit['id']; ?>">

                                    <input type="text" class="input-xlarge focused" id="nama" name="nama"
                                    value="<?php if($data_edit) echo $data_edit['nama_mahasiswa']; ?>">
                                    
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="prodi">PRODI MAHASISWA : </label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="prodi" name="prodi"
                                    value="<?php if($data_edit) echo $data_edit['prodi']; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="ulangi">ULANGI : </label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="ulangi" name="ulangi" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="jenis">JENIS KELAMIN : </label>
                                <label class="form-check-label" for="jenis">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis" value="Laki-laki"
                                    <?php if ($data_edit && $data_edit['jenis_kelamin'] == "Laki-laki") echo 'checked'; ?> > Laki-laki
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis" value="Perempuan"
                                    <?php if ($data_edit && $data_edit['jenis_kelamin'] == "Perempuan") echo 'checked'; ?> > Perempuan
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis" value="Tidak ingin diketahui"
                                    <?php if ($data_edit && $data_edit['jenis_kelamin'] == "Tidak ingin diketahui") echo 'checked'; ?> > Tidak ingin diketahui
                                </label>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">PROSES DATA</button>
                                <button type="reset" class="btn">CANCEL</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">DATA MAHASISWA</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NPM Mahasiswa</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi Mahasiswa</th>
                                    <th>Jenis Kelamin Mahasiswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                while($data = mysqli_fetch_assoc($proses)){
                            ?>
                                <tr>
                                    <td><?php echo $data['id']?></td>
                                    <td><?php echo $data['nama_mahasiswa']?></td>
                                    <td><?php echo $data['prodi']?></td>
                                    <td><?php echo $data['jenis_kelamin']?></td>
                                    <td><a href="pertemuan_12.php?id=<?php echo $data['id']; ?>">Edit</a> |
                                        <a href="hapus_data.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
                                </tr>
                            <?php
                                }
                            ?>
                            </tbody>
						</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>