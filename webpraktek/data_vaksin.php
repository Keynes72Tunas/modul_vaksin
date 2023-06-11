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
        <h1>Data Vaksin</h1>
        <table style="text-align: center;"  class="table table-bordered">
        <a href="tambah_vaksin.php" class="btn btn-info">Tambah Data</a>
            <thead>
            <tr style="text-align: center;">
                
                <th scope="col">Id Vaksin</th>
                <th scope="col">Jenis Vaksin</th>
                <th width="200">Action</th>
            </tr>
            
            </thead>

            <tbody>
              <?php
              $nomor = 0;
              $vaksin = mysqli_query ($connect," select * from vaksin");
              while($row=mysqli_fetch_array($vaksin)) {
              ?>
            <tr>


            <th><?php echo $row ['id_vaksin'] ?></th>
            <th><?php echo $row ['jenis_vaksin']?></th>
            
              
            <td style="text-align: center;">
                  <a href="edit_vaksin.php?id_vaksin=<?php echo $row['id_vaksin'];?>" class="btn btn-danger"> Edit </a>
                  <a href="hapus_vaksin.php?id_vaksin=<?php echo $row['id_vaksin']; ?>" class="btn btn-warning">Delete</a>
            </td>
            
            
            </tr>
            
            <?php
            ;
              };
            ?>
            </tbody>
</body>
</html>