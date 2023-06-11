<?php include 'header.php';
$id_puskesmas = $_GET['id_puskesmas'];
$query = mysqli_query($connect, "select * from puskesmas where id_puskesmas='$id_puskesmas'");
$puskesmas = mysqli_fetch_assoc($query);
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
    <h3>Update Data Puskesmas</h3>
    <hr>
    <form action="update_puskesmas.php" method="post">
        <table class="table table-borderd">
            <tr>
                <td>Id Puskesmas</td>
                <td><input type="id_puskesmas" name="id_puskesmas" value="<?php echo $puskesmas['id_puskesmas'] ?>" placeholder="id" class="form-control"></td>
            </tr>
            <tr>
            <tr>
                <td>Puskesmas</td>
                <td><input type="nama_puskes" name="nama_puskes" value="<?php echo $puskesmas['nama_puskes'] ?>" placeholder="puskes" class="form-control"></td>
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


</div></body>
<?php include 'footer.php'; ?>