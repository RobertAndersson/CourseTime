<?php

$output = "";

  if (isset($_POST['submit'])) 
  {
	if (preg_match(" /[A-Za-z]+/", $_POST['search'])) 
	{
		$search=$_POST['search'];


		if ($_POST['hpfilter'] == "5hp") {
			
			$sql = "(SELECT * FROM courses WHERE (courseName LIKE '%" . $search . "%' OR courseSubject LIKE '%" . $search ."%') AND courseLength = '5hp')";
		}

		elseif ($_POST['hpfilter'] == "7.5hp") {
			
			$sql = "(SELECT * FROM courses WHERE (courseName LIKE '%" . $search . "%' OR courseSubject LIKE '%" . $search ."%') AND courseLength = '7,5hp')";
		}

		elseif ($_POST['hpfilter'] == "15hp") {
			
			$sql = "(SELECT * FROM courses WHERE (courseName LIKE '%" . $search . "%' OR courseSubject LIKE '%" . $search ."%') AND courseLength = '15hp')";
		}

		elseif ($_POST['hpfilter'] == "30hp") {
			
			$sql = "(SELECT * FROM courses WHERE (courseName LIKE '%" . $search . "%' OR courseSubject LIKE '%" . $search ."%') AND courseLength = '30hp')";
		}

		else {
			$sql = "SELECT * FROM courses WHERE (courseName LIKE '%" . $search . "%' OR courseSubject LIKE '%" . $search ."%')";
		}
		
		$result= $db->connection->query($sql);

		if ($result->num_rows > 0) 
		{
			while ($row = $result->fetch_assoc()) 
			{ 
				$course = $row["courseName"];
		    		$pace = $row["coursePace"];
		    		$output = "$course - $pace <br />";
			}
			echo $output;
		}
		
		else {
			echo "Inga matchningar på din sökning.";
		}
		
	}
  }

?>
