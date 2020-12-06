<!DOCTYPE html>
<html>
	<head>
		<title>Display Data</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				</br></br>
				<h3 class="text-center">All Images</h3>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>							
							<th>Image</th>							
						</tr>
					</thead>
					<tbody>
					      <?php 
						      $conn = mysqli_connect("localhost","root","","test")or die("connection error..!");
							  $select = "select * from filename";
							  $run = mysqli_query($conn , $select);
							  while($row=mysqli_fetch_array($run))
							  {
								  ?>
								      <tr>
									       <td><?php echo $row['id'];?></td>
									       <td><?php echo $row['name'];?></td>
									       <td>
										      <img src="images/<?php echo $row['image'];?>" width="100" height="100"/>
										   </td>
									  </tr>
								  <?php
							  }
						  ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</body>
</html>