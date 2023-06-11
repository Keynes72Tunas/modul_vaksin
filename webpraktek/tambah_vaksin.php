<?php include
 'header.php'; 
 ?>
<div class="container" style="margin-top: 50px;">
    <hr>
    <h3>Input data Vaksin</h3>
    <form action="simpan_vaksin.php" method="post">
        <table class="table table-borderd">
            <tr>
                <td>Id Vaksin</td>
                <td><input name="id_vaksin" type="text" placeholder="id vaksin" class="form-control"></td>
            </tr>
            <tr>
                <td>Jenis Vaksin</td>
                <td><input name="jenis_vaksin" type="text" placeholder="jenis vaksin" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Simpan Data</button>
                    <a href="data_vaksin.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php include 'footer.php'; ?>