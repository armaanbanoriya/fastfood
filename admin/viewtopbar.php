<?php include_once 'session.php'; ?>
<?php  include "header.php"; ?>
<?php include "sidebar.php"; ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="text-align: right;" >View Blog</h1>
            <div class="login-logo" style="color: red; margin-left: -176px; " >
            <?php
            if (isset($_SESSION['delete'])) {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
              # code...
            }
            ?>
          </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <!---code start--->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th style="width: 40px">LOGO</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include_once 'dbcon.php';
                   $a = "SELECT * from topbar";
                   $b = mysqli_query($con,$a);
                   while ($result=mysqli_fetch_array($b)) {
                     # code...
                  
                    ?>
                    <tr>
                      <td><?php echo $result['id'] ?></td>
                      <td><?php echo $result['email']; ?></td>
                      <td><?php echo $result['phone']; ?></td>
                      <td><?php echo $result['address']; ?></td>

                      <td> <img src=" <?php echo $result['logo']; ?>"style="height: 100px; width: 100px;" > </td>
                      <td>
                      <a href="showtopbar.php?id=<?php echo $result['id'] ?>" class="btn btn-primary">Show</a>
                      <a href="edittopbar.php?id=<?php echo $result['id']  ?>" class="btn btn-info"   >edit</a>
                      <a href="deleteblog.php?id=<?php echo $result['id'] ?>" class="btn btn-danger" >delete</a>
                    </td>
                    </tr>
                    <?php
                    }
                    ?>                                       
                    </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
          </div>
      </div>
  </div>
</div>
</section>
              <!-- /.card-body -->
     <!---code end--->
</div> <!-- /.content-wrapper -->


<?php include "footer.php"; ?>
