
<?php include_once 'session.php'; ?>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">add student</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
     <!---code start--->
     <?php
include_once 'dbcon.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
	# code...

$a = "SELECT * from blogdata where id=$id";
$b = mysqli_query($con,$a);
$c   = mysqli_fetch_assoc($b);
}
?>
       <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blog data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="updateblogdata.php" enctype="multipart/form-data" >
                <div class="card-body">
                  <input type="hidden" name="id" name="id" value="<?php echo $c['id'] ?>">
                  <div class="form-group">
                    <label for="exampleInputtitle">Title</label>
                    <input type="text" name="title" value="<?php echo $c['title'] ?>" class="form-control" id="exampleInputtitle" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputdescription">Description</label>
                    <textarea class="form-control" name="description"><?php echo $c['description'] ?> </textarea>
                  </div>
                  <div class="form-group">
                    <label>Upload Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="exampleInputFile">Upload</span>
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
</section>
            <!-- /.card -->
     <!---code end--->
</div> <!-- /.content-wrapper -->
<?php include "footer.php"; ?>
