<?php

    session_start();
    include("connect.php");
    include("function.php");

    $user_data = check_login($con);
    $result = mysqli_query($con, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <div style="text-align: center;">
        <a href="logout.php">Logout</a>

        <h1>This Index Page</h1>
        Hi , <?php  echo $user_data['user_name'];?>

        <br>
        <br>

        

    <table class="table" style="border: 1px solid black; margin:auto;">
    <thead>
      <tr>
        <th>user_name</th>
        <th>user_email</th>
		<th>user_password</th>
      </tr>
    </thead>
    <tbody>
			<?php
			while($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$res['user_name']."</td>";
				echo "<td>".$res['user_email']."</td>";
				echo "<td>".$res['user_password']."</td>";
                echo "<tr>";
			}
			?>
    </tbody>
  </table>
    </div>
    
</body>
</html>