<?php 
session_start();
error_reporting(null);
$uid=$_SESSION['uid'];
$name=$_SESSION["namez"];

if(empty($uid))
{
	header("Location:index.php");
}
include 'db.php';
?>

<html lang="en">
<head>
 <?php include 'head.php'; ?>
 <style>
 .b{
	 margin-left:100px;
	 width:150px;
 }
  .cr {
   overflow:scroll;
    width:100%;
	height:600px;
   }
   .bn{
	   width:350px;
	   margin-left:10px;
   }
   .bk{
	   width:250px;
	   margin-left:60px;
   }
   .hidden {
	   display : none;
   }
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
 include 'header.php';
 include 'sidebar.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>Orders</b></h1> 
			
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Orders</h3> 
				
              </div>
			   
			   <div class="card-header">
				 <input id="gfg" type="text" class="form-control" placeholder="Search here"> 
              </div>
              <!-- /.card-header -->
              <div class="card-body cr">
                <table id="example6" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SR.NO</th>
                    <th>Order no</th>
					<th>Date</th>
					<th>Action</th>
					<th>Approve</th>
                   
                  </tr>
                  </thead>
                  <tbody id="geeks">
				  <?php
				   $query_date = date("Y-m-d");
				  $i=1;
				  $results1 = mysqli_query($conn, "select * from orders where ostatus='0'");
                  while ($row1 = mysqli_fetch_array($results1)) { 
			
				  ?>
                  <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row1['order_no']; ?></td>
					  <td><?php echo $row1['date'];?></td>
					  <td><a href="view_order.php?oid=<?php echo $row1['order_no']; ?>" ><button type="submit" name="add" class="btn btn-primary">View</button></a>
					  
					   <td><a href="approve_order.php?oid=<?php echo $row1['order_no']; ?>" ><input type="submit" class="btn btn-primary" name="approve" value="Approve"><!--<i class="fa fa-check-square" style="font-size: 20px;color:black;"></i>--></a>
					  
				  <?php $i++; }  ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
   <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script> 
  <script> 
            $(document).ready(function() { 
                $("#gfg").on("keyup", function() { 
                    var value = $(this).val().toLowerCase(); 
                    $("#geeks tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .toLowerCase().indexOf(value) > -1) 
                    }); 
                }); 
            }); 
        </script> 
  <script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>
  
  
  <?php include 'footer.php';?>
  
</div>

<?php include 'script.js'; ?>
</body>
</html>
