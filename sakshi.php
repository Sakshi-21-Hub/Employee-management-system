<?php 
require_once ('process/dbh.php');
$sql = "SELECT * FROM register";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<header>
		<nav>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="alogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
    <div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">board </h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">ID_NO</th>
				<th align = "center">Name</th>
		
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$register['id_no']."</td>";
					
					echo "<td>".$register['name']."</td>";
					
					$seq+=1;
				}


			?>

		</table>

		

		
	</div>
</body>
</html>