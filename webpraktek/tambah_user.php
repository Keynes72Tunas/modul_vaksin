<?php include 'header.php'; ?>
<div class="container" style="margin-top: 50px;">
<hr>
        <h3>Input Data User</h3>
        <form action="simpan_user.php" method="post">
        <table class="table table-borderd">
            <tr>
                <td>id</td>
                <td><input type="text" name="id" placeholder="id" class="form-control"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" placeholder="nama" class="form-control"></td>
            </tr>
            <tr>
              <td>USERNAME</td>
              <td><input type="text" name="usernama" placeholder="usernama" class="form-control"></td>
            </tr>
            <tr>
              <td>PASSWORD</td>
              <td><input type="text" name="password" placeholder="password" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
      </form>
</div>
<?php include 'footer.php'; ?>