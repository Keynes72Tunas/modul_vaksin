<?php include
 'header.php'; 
 ?>
<div class="container" style="margin-top: 50px;">
    <hr>
    <h3>Input data Penduduk</h3>
    <form action="simpan_penduduk.php" method="post">
        <table class="table table-borderd">
            <tr>
                <td>NIM</td>
                <td><input name="NIK" type="text" placeholder="nik" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input name="Nama" type="text" placeholder="nama" class="form-control"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input name="Nomor_hp" type="text" placeholder="nomor telepon" class="form-control"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="Email" type="text" placeholder="email" class="form-control"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="L">Laki Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input name="Tanggal_lahir" type="date" placeholder="tanggal lahir" class="form-control"></td>
            </tr>
            <tr>
                <td>Vaksin</td>
                <td><select name="id_vaksin" class="form-control">
                    <?php
                    $jenis_vaksin = mysqli_query($connect,"select * from vaksin");
                    while($row= mysqli_fetch_assoc($jenis_vaksin)){
                        echo "<option value='".$row['id_vaksin']."'>".$row['jenis_vaksin']."</option>";
                    }
                    ?>
                    </select>
            </tr>
            <tr>
                <td>Puskesmas</td>
                <td><select name="id_puskesmas" class="form-control">
                    <?php
                    $nama_puskes = mysqli_query($connect,"select * from puskesmas");
                    while($row= mysqli_fetch_assoc($nama_puskes)){
                        echo "<option value='".$row['id_puskesmas']."'>".$row['nama_puskes']."</option>";
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
</div>
<?php include 'footer.php'; ?>