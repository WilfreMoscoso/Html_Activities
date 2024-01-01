<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="order.css">
</head>
<body>
<div class="Main"><center>
	<h1 style="color: orange">
		
		<?php
      if (isset($_GET['msg'])) {
      echo $_GET['msg'];
      }else{
      	echo" Order Chicken";
      }

		?>
	</h1>
	<form action="order.php" method="post">
		<div class="form"><br><br>
			<select class="select" name="chicken">
				<option>45 days Chicken price: 200 per killo</option>
				<option>bisaya Chicken price: 250 per killo</option>
				<option>kaber Chicken price: 400 per killo</option>
			</select><br><br><br>
        <input type="text" required="required" placeholder=" First name:" name="fname">
		<input type="text" required="required" placeholder=" Last name:" name="lname">
		<input type="text" required="required" placeholder=" Address:" name="address">
		<input type="number" required="required" placeholder=" Phone:" name="phone">
		<input type="number" required="required" placeholder=" postal code:" name="code">
		<button name="send">Submit</button>
		</div>
	</form><br><br><center><h1 style="color: orange">Customers Who ordered my chicken</h1></center>
	<div class="display">

		<?php
  $con=mysqli_connect("localhost","root","","ordering");
  $query =mysqli_query($con,"SELECT * from data");
  while ($row=mysqli_fetch_assoc($query)) {
  
?>
<table border="1">
			


     <tr>
		<td><?php echo $row['fname'] ?><?php echo $row['lname'] ?></td> </tr>
			<tr><td><?php echo $row['address'] ?></td></tr>
					<tr><td><?php echo $row['phone'] ?></td></tr>
						<tr><td><?php echo $row['code'] ?></td></tr>
							<tr><td><?php echo $row['chicken'] ?></td></tr><br>
	                         

</table>
<?php
  }
		?>
	</div><br><br>
</div>


<style type="text/css">
		tr {width: 10%;
		height: 3vh;
		color: white;
		background-color:dodgerblue;
		height: 6vh;
		border:none;
	}
	table{
		border:none;
	}
</style>






</body>
</html>
