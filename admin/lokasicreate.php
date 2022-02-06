<?php 
  if (isset($POST['button_create'])){

    $database = new Database;
    $db = $database->getConnection();
    
    //ini untuk validasi input
    $validasi = "SELECT * FROM lokasi WHERE nama_lokasi = ?";
    $stmt = $db->prepare($validasi);
    $stmt->bindParam(1, $_Post['nama_lokasi']);
    $stmt->execute();

    if($stmt->rowCount()) > 0){
        echo "Nama LOkasi Sama, Data Double.";
    }else{

        $insertSQL = "INSERT INtO lokasi SET nama_lokasi ='".$_POST['nama_lokasi']."'";
        $
    }
  }
include_once "partials/cssdatatables.php" ?>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lokasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lokasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card">
        <div class="card-header">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Data Lokasi</h5>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

          
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                  <table id="mytable" class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>no</th>
                              <th>nama lokasi</th>
                              <th>OPsi</th>
                           <tr>
                        </thead>
                     </tfoot>
                    <tbody>
                     <!--scrpt phphere -->
                     <?php$databas = new Database;
                     $db = $database->getConnection();

                     $selectSql = "SELECT * FROM lokasi";

                     $stmt = $db->prepare($selectSql);
                     $stmt->execute();

                     $no = 1;
                     while($row= $stmt->fetch(PDO::FETCH_ASSOC)){


                    ?>
                    <tr>
                        <td><?= $no++ ?> </td>
                        <td><?= $row['nama_lokasi'] ?></td>
                        <td>
                            <a href="?page=lokasiupdate$id=<?= $row['id'?>" class="btn btn=primary btn-sm mr-1"]
                              <i> class="fa fa-edit"></i> Ubah
                            </a>

                            <a href="?page=lokasidelete&id=<?= $row['id']?>" class="btn btn-primary btn-sm mr-1"]


                     }
                     <!-- end script php -->
                     </tbody>
             </table>
              </div>
            </div>
          </div>
        </div>
    <!-- /.content -->
<?php include_once "partials/scripdatatables.php" ?>
<script>
    $(function)
