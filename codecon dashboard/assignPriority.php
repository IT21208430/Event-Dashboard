<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Codecon AssignPriority</title>

	<style type="text/css">
		#tbl{
			background-color: lightblue;
			padding: 10px 16px;
			margin: auto;
			width: 60%;
			margin-top: 5%;
		}

		input{
			width: 100%;
		}
	</style>

</head>
<body>
	<div>
		<?php
			//starting connection with the database
			global $con;
			$con = new mysqli("localhost", "root", "", "codecondb");
			$sqlCmd = "SELECT * FROM teams";
			$resultSet = $con->query($sqlCmd);
			$teamNumber = 1;

			echo '<form method="POST" action="update.php">';
			echo '<table id="tbl">';
			if($resultSet->num_rows > 0)
			{
				while($row = $resultSet->fetch_assoc())
				{
					echo '<tr>';
					echo '<td>'.$row["name"].'</td>';
					echo '<td><input type="text" name="'.$teamNumber.'" value="'.$row["priority"].'"></td>';
					echo '<td><input type="text" name="isPlaying'.$teamNumber.'" value="'.$row["isPlaying"].'"></td>';
					echo '</tr>';
					$teamNumber = $teamNumber + 1;
				}
			}

			echo '<tr><td><button id="bckBtn"><a href="home.php">Back</a></button></td><td><input type="submit" id="saveBtn"></td></tr>';
			echo '</table>';
			echo '</form>';

			$con->close();
		?>
	</div>
</body>
</html>