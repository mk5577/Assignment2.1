<!DOCTYPE html>
<html>
<head>
	<title>Data Entry made in Database</title>
	 
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Select Data from Database</h1>
		<table class="table table-border">
			<thead>
				<tr>
					<th>Name</th>
					<th>Password</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Phone No.</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$conn =mysqli_connect("localhost","id16774774_test123","Test@1234567","id16774774_test");
				if ($conn) {
					echo "Connection Done";
				}
				else
				{
					echo "Connection failed";
				}

				$sql="select * from Student";
				$query=$conn ->query($sql);
				while ($row=$query ->fetch_assoc()) {
					# code...
				
					?>

				<tr>
					<td><?php echo $row['sname'];?></td>
					<td><?php echo $row['spwd'];?></td>
					<td><?php echo $row['sgen'];?></td>
					<td><?php echo $row['semail'];?></td>
					<td><?php echo $row['sphone'];?></td>
					<td>
						<a href="#" class="btn btn-success">Edit</a>
						<a href="#" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php
			}
			?>
			</tbody>
		</table>
	</div>
	<div align ='center'><a  href="index.html">HOME</a></div>

</body>
</html>
