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
    <h1>Data Pengguna Vaksin</h1>
    <hr>
    <table class="table table-bordered">
      <a href="tambah_penduduk.php" class="btn btn-info">Tambah Data</a>
      <thead>
        <tr id="mytable" style="text-align: center;">
          <th scope="col">No</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">Nomor Telepon</th>
          <th scope="col">Email</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Vaksin</th>
          <th scope="col">Puskesmas</th>
          <th width="200">Action</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $nomor = 1;
        $penduduk = mysqli_query($connect, "SELECT * FROM penduduk 
              LEFT JOIN vaksin  ON penduduk.id_vaksin = vaksin.id_vaksin
              LEFT JOIN puskesmas ON penduduk.id_puskesmas = puskesmas.id_puskesmas");
        while ($row = mysqli_fetch_array($penduduk)) {
        ?>
          <tr>


            <th><?php echo $nomor; ?></th>
            <th><?php echo $row['NIK'] ?></th>
            <th><?php echo $row['Nama'] ?></th>
            <th><?php echo $row['Nomor_hp'] ?></th>
            <th><?php echo $row['Email'] ?></th>
            <th><?php echo $row['Jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></th>
            <th><?php echo $row['Tanggal_lahir'] ?></th>
            <th><?php echo $row['jenis_vaksin'] ?></th>
            <th><?php echo $row['nama_puskes'] ?></th>

            <td>
              <a href="edit_penduduk.php?NIK=<?php echo $row['NIK']; ?>" class="btn btn-danger"> Edit </a>
              <a href="hapus_penduduk.php?NIK=<?php echo $row['NIK']; ?>" class="btn btn-warning">Delete</a>
            </td>


          </tr>
        <?php
          $nomor++;
        };
        ?>
      </tbody>
</body>

</html>