<?php
include "header.php";
?>
<style>
  body {
    background-image: url(5549155.jpg);
    background-size: cover;
  }

  .container {
    background-color: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(15px);
    padding: 40px;
    box-sizing: border-box;
    border-radius: 10px;
  }

  .table {
    border-color: black
  }
  tr {
    text-align: center;
    vertical-align: middle;
  }
  .btn-info {
    background-color: #95B1B0;
  }
</style>
<body>
<div class="container" style="margin-top: 30px;">
        <h1>Data Puskesmas</h1>
        <table style="text-align: center;" class="table table-bordered">
        <a href="tambah_vaksin.php" class="btn btn-info">Tambah Data</a>
            <thead>
            <tr style="text-align: center;">
                
                <th scope="col">Id Puskesmas</th>
                <th scope="col">Puskesmas</th>
                <th width="200">Action</th>
            </tr>
            </thead>

            <tbody>
              <?php
              $nomor = 0;
              $puskesmas = mysqli_query ($connect," select * from puskesmas");
              while($row=mysqli_fetch_array($puskesmas)) {
              ?>
            <tr>


            <th><?php echo $row ['id_puskesmas'] ?></th>
            <th><?php echo $row ['nama_puskes']?></th>
              
            <td>
                  <a href="edit_puskesmas.php?id_puskesmas=<?php echo $row['id_puskesmas'];?>" class="btn btn-danger"> Edit </a>
                  <a href="hapus_puskesmas.php?id_puskesmas=<?php echo $row['id_puskesmas']; ?>" class="btn btn-warning">Delete</a>
            </td>
            
            
            </tr>
            <?php
            ;
              };
            ?>
            </tbody>
</body>
</html>