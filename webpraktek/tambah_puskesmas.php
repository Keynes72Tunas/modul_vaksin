<?php include
 'header.php'; 
 ?>
<div class="container" style="margin-top: 50px;">
    <hr>
    <h3>Input data Mahasiswa</h3>
    <form action="simpan_puskesmas.php" method="post">
        <table class="table table-borderd">
            <tr>
                <td>Id Puskesmas</td>
                <td><input name="id_puskesmas" type="text" placeholder="id puskesmas" class="form-control"></td>
            </tr>
            <tr>
                <td>Puskesmas</td>
                <td><input name="nama_puskes" type="text" placeholder="puskesmas" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Simpan Data</button>
                    <a href="data_puskesmas.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php include 'footer.php'; ?>