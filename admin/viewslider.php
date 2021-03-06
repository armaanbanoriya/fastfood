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
            <h1 class="m-0 text-dark">View Slider</h1>
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
	<table class="table table-bordered" >
		<thread>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Description</th>
      <th>Image</th>
			<th>Action</th>
		</tr>
	</thread>
		<?php
		include_once 'dbcon.php';
		$a = "SELECT * from slider";
		$b= mysqli_query($con,$a);
		while ( $c = mysqli_fetch_array($b)) {
			# code...
		
		?>
		<tr>
			<td><?php echo $c['id']; ?></td>
			<td><?php echo $c['title']; ?></td>
			<td><?php echo $c['description']; ?></td>
      <td><?php echo $c['image']; ?></td>

			<td>
			<a href="showslider.php?id=<?php $c['id'];?>" class="btn btn-primary" >Show</a>
			<a href="" class="btn btn-info" >Edit</a>
			<a href="" class="btn btn-danger">Delete</a>
			</td>
		</tr>
			<?php
}
	?>




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
