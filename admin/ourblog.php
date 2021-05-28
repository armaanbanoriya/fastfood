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
       <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Our Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertourblog.php" enctype="multipart/form-data" >
                <div class="card-body">
                  <input type="hidden" name="id" name="id">
                  <div class="form-group">
                    <label for="exampleInputtitle">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputtitle" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputdescription">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputdescription" placeholder="Enter Description">
                  </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
