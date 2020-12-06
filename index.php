
<?php
    $conn = mysqli_connect("localhost","root","","test")or die("connection error..!");
	
	if(isset($_POST['submit']))
	{
		$name      = $_POST['name'];
		$image     = $_FILES['image']['name'];
		$tmp_image = $_FILES['image']['tmp_name'];
		$type      = $_POST['type'];
		
		move_uploaded_file($tmp_image ,"images/". $image);
		$insert = "insert into filename(name,image,type)values('$name','$image','$type')";
		$run = mysqli_query($conn , $insert);
		if($run>0)
		{
			echo "<script>window.open('display.php','_self')</script>";
		}
		else
		{
			echo "error";
		}
	}

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>File</title>
		<!--CDN link-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!--CDN link-->
	</head>
	<body>
	<div class="container">
	   
		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<form method="post" enctype="multipart/form-data">
					<label>Image Name</label>
					<input type="text"  class="form-control" name="name" required />
					<label>Choose Image</label>
					<input type="file"  class="form-control" name="image" required />
					<label>Type</label>
					<input type="text"  class="form-control" name="type" required />
					<button type="submit" name="submit" class="btn btn-primary">Upload File</button>
				</form>
			</div>
			
		</div>
	
	</div>
		
	</body>
</html>