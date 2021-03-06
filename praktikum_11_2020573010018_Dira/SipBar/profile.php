<?php
require "proses/koneksi.php";
  $query1 = mysqli_query($conn, "SELECT * FROM tb_user usr LEFT JOIN tb_mahasiswa mhs ON usr.id=mhs.id_user WHERE username = '$_SESSION[username]'");
  $data1 = mysqli_fetch_array($query1);
?>
<!doctype html>
<html lang="en">
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ULON KOPI</title>
  </head>

  <body>
      <!--Header-->
      <?php
      require "header.php";
      ?>
      <!--Akhir Header-->

      <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <?php
            require "sidebar.php";
            ?>
          </div>
          <!--Akhir Sidebar-->
          <!--Content-->
          <div class="col-9">
          <h2>Profile</h2>
          <div class="card">
            <div class="card-header">
              Profile
            </div>
            <div class="card-body">
          <form>
          <div class="mb-3">
              <label class="form-label">ID User</label>
              <input type="text" class="form-control"
              value="<?php echo $data1['id_user'];?>"
              disabled>
            </div>  
          <div class="mb-3">
              <label class="form-label">NIM</label>
              <input type="text" class="form-control"
              value="<?php echo $data1['nim'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control"
              value="<?php echo $data1['nama'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Kelas</label>
              <input type="text" class="form-control"
              value="<?php echo $data1['kelas'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Program Studi</label>
              <input type="text" class="form-control"
              value="<?php echo $data1['prodi'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <input type="text" class="form-control"
              value="<?php echo $data1['alamat'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control"
              value="<?php echo $data1['tempat_lahir'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Tanggal Lahir</label>
              <input type="text" class="form-control"
              value="<?php echo $data1['tgl_lahir'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control"
              value="<?php echo $data1['no_hp'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control"
              value="<?php echo $data1['username'];?>"
              disabled>
            </div>
            <div class="mb-3">
              <label class="form-label">Level</label>
              <input type="email" class="form-control"
              value="<?php echo $data1['level'];?>"
              disabled>
            </div>
            
            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
          </form>
        </div>
      </div>
    </div>
        <!--Akhir content-->
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>