<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM info";
$result = $conn->query($sql);
?>
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top:20px;">
		<div class="jumbotron">
      <h1 style="align:middle;">CRUD LAB TEST</h1>
			<p>The code written by ehfaz ahmed adnan with html, css, boostrap, php and mysql with responsive design</p>
		</div>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
		<th>Department</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
			<?php
			while($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td class='bg-danger'>".$res['name']."</td>";
				echo "<td>".$res['age']."</td>";
				echo "<td>".$res['email']."</td>";
				echo "<td>".$res['dept']."</td>";
				echo "<td> <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td></tr>";
			}
			?>
    </tbody>
  </table>
	
</div>
</body>
</html>
