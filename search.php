<?php

  if (isset($_POST['submit'])) 
  {
	if (preg_match(" /[A-Za-z]+/", $_POST['search'])) 
	{
		$search=$_POST['search'];
		$host = 'localhost';
		$user = 'root';
		$password = 'root';
		$db = 'linn_batelson';

		$dbconn = new mysqli($host, $user, $password, $db) or die("Kunde inte connecta till databasen");
		$sql = "SELECT * FROM posts WHERE post_name LIKE '%" . $search . "%' OR post_email LIKE '%" . $search ."%'";
		$result= $dbconn->query($sql);

		// if ($result->num_rows > 0) 
		// {
			while ($row = $result->fetch_assoc()) 
			{
				echo $row['post_comment'];
			}
		// }

		// else 
		// {
  //    		echo "Det finns inget att visa.";
		// }

		
	}
  }

  // else
  // {
  // 	echo "<p> Skriv något i sökfältet för att se kurser</p>";
  // }

?>
