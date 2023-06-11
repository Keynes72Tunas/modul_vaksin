<?php include 'header.php'; ?>
      <div class="container" style="margin-top: 50px;">
        <h1>Data User</h1>
        <a href="tambah_user.php" class="btn btn-info">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
                <th width="200">Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
              $nomor = 1;
              $user = mysqli_query ($connect,"SELECT * FROM  user");
              while($row=mysqli_fetch_array($user)) {
              ?>
            <tr>


            <th><?php echo $nomor;?></th>
            <th><?php echo $row ['id'] ?></th>
            <th><?php echo $row ['nama']?></th>
            <th><?php echo $row ['usernama']?></th>
            <th><?php echo $row ['password'] ?></th>


            <td>
                  <a href="edit_user.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Edit</a>
                  <a href="delete_user.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
            </td>


            </tr>
            <?php
            };
            $nomor++;
            ?>
            </tbody>


        </div>
<?php include 'footer.php'; ?>
