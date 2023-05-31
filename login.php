<?php
	session_start();
	include "db-connection.php";

		if (isset($_POST['username']) && isset($_POST['password'])  )
		{

			$username = $_POST['username'];
			$password = $_POST['password'];

		
			// assume $conn is a MySQLi object connected to your database
			$result = $conn->query("SELECT * FROM users WHERE username='$username' and password ='$password'");

			if (mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				if ($row['username'] === $username && $row['password'] === $password ) 
				{

					header("Location: index.html?login=sucess");
					echo "suceess";
					exit();
				}
				else
				{
					header("Location: index.html?login=failed");
					echo "suceess";
					exit();
				}
			}
			else
			{
				header("Location: index.html?login=failed");
					echo "suceess";
					exit();
			}
		}


	
?>