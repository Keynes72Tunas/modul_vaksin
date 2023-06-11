<?php include 'header.php';
$id = $_GET['id'];
$query = mysqli_query($connect, "select * from user where id='$id'");
$user = mysqli_fetch_array($query);
?>
<style>
  
</style>
<body>
  <div class="container" style="margin-top: 50px;">
    <hr>
    <h3>Update Data User</h3>
    <form action="update_user.php" method="post">
      <table class="table table-borderd">
        <tr>
          <td>ID</td>
          <td><input type="nim" name="id" value="<?php echo $user['id'] ?>" placeholder="nim" class="form-control"></td>
        </tr>
        <tr>
          <td>NAMA</td>
          <td><input type="nama" name="nama" value="<?php echo $user['nama'] ?>" placeholder="nama" class="form-control"></td>
        </tr>
        <tr>
          <td>USERNAME</td>
          <td><input type="username" name="usernama" value="<?php echo $user['usernama'] ?>" placeholder="username" class="form-control"></td>
        </tr>
        <tr>
          <td>PASSWORD</td>
          <td><input type="nomor_hp" name="password" value="<?php echo $user['password'] ?>" placeholder="Nomor Telepon" class="form-control"></td>
        </tr>
        <td></td>
        <td><button type="submit" class="btn btn-success">Simpan Data</button>
          <a href="index.php" class="btn btn-primary">Kembali</a>
        </td>
        </tr>
      </table>
    </form>

  </div>
</body>
<?php include 'footer.php'; ?>