<?php include 'header.php';
$id_vaksin = $_GET['id_vaksin'];
$query = mysqli_query($connect, "select * from vaksin where id_vaksin='$id_vaksin'");
$vaksin = mysqli_fetch_assoc($query);
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
    <h3>Update Data Vaksin</h3>
    <hr>
    <form action="update_vaksin.php" method="post">
        <table class="table table-borderd">
            <tr>
                <td>Id Vaksin</td>
                <td><input type="id_vaksin" name="id_vaksin" value="<?php echo $vaksin['id_vaksin'] ?>" placeholder="id" class="form-control"></td>
            </tr>
            <tr>
            <tr>
                <td>Vaksin</td>
                <td><input type="jenis_vaksin" name="jenis_vaksin" value="<?php echo $vaksin['jenis_vaksin'] ?>" placeholder="vaksin" class="form-control"></td>
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