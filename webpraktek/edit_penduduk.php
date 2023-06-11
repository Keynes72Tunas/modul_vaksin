<?php include 'header.php';
$NIK = $_GET['NIK'];
$query = mysqli_query($connect, "select * from penduduk where NIK='$NIK'");
$penduduk = mysqli_fetch_assoc($query);
?>
<style>
    body {
    background-image: url(5549155.jpg);
    background-size: cover;
  }
</style>
<body>
    <div class="container" style="margin-top: 50px;">
        <hr>
        <h3>Update Data Pengguna Vaksin</h3>
        <hr>
        <form action="update_penduduk.php" method="post">
            <table class="table table-borderd">
                <tr>
                    <td>NIK</td>
                    <td><input type="NIK" name="NIK" value="<?php echo $penduduk['NIK'] ?>" placeholder="nik" class="form-control"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="Nama" name="Nama" value="<?php echo $penduduk['Nama'] ?>" placeholder="Nama" class="form-control"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td><input type="Nomor_hp" name="Nomor_hp" value="<?php echo $penduduk['Nomor_hp'] ?>" placeholder="Email" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="Email" name="Email" value="<?php echo $penduduk['Email'] ?>" placeholder="email" class="form-control"></td>
                </tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="Jenis_kelamin" value="<?php echo $mahasiswa['Jenis_kelamin'] ?>" class="form-control">
                        <option value="L">Laki Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="Tanggal_lahir" name="Tanggal_lahir" value="<?php echo $penduduk['Tanggal_lahir'] ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Vaksin</td>
                    <td><select name="id_vaksin" class="form-control">
                            <?php
                            $vaksin = mysqli_query($connect, "select * from vaksin");
                            while ($row = mysqli_fetch_assoc($vaksin)) {
                                echo "<option value='" . $row['id_vaksin'] . "' ";
                                echo $row['id_vaksin'] == $penduduk['id_vaksin'] ? "selected" : "~~";
                                echo ">" . $row['jenis_vaksin'] . "</option>";
                            }
                            ?>
                        </select>
                </tr>
                <tr>
                    <td>Puskesmas</td>
                    <td><select name="id_puskesmas" class="form-control">
                            <?php
                            $puskesmas = mysqli_query($connect, "select * from puskesmas");
                            while ($row = mysqli_fetch_assoc($puskesmas)) {
                                echo "<option value='" . $row['id_puskesmas'] . "' ";
                                echo $row['id_puskesmas'] == $penduduk['id_puskesmas'] ? "selected" : "";
                                echo ">" . $row['nama_puskes'] . "</option>";
                            }
                            ?>
                        </select>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn btn-success">Simpan Data</button>
                        <a href="index.php" class="btn btn-primary">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
        <?php

        ?>


    </div>
</body>
<?php include 'footer.php'; ?>