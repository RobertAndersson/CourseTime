<?php

  if (isset($_POST['submit'])) 
  {
	if (preg_match(" /[A-Za-z]+/", $_POST['search'])) 
	{
		$search=$_POST['search'];
		$host = 'localhost:8889';
		$user = 'root';
		$password = 'root';
		$db = 'projekt';
 
		$dbconn = new mysqli($host, $user, $password, $db) or die("Kunde inte connecta till databasen");
		$sql = "SELECT DISTINCT * FROM courses WHERE courseName LIKE '%" . $search . "%' OR courseSubject LIKE '%" . $search . "%'";
		$result= $dbconn->query($sql);
		
		$output ="";
		while ($row = $result->fetch_assoc()) 
		{ ?>
			<div>  <?php echo $row['courseName']; ?> </div>
			
<?php   }
	}
  }
 
  else
  {
  	echo "<p> Skriv något i sökfältet</p>";
  }
?>
