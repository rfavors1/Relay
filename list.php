<?php
echo('<p align="right"><img src="img/relay_logo.gif" /></p>');
echo("<h2>List of all Students</h2>");

$link = @mysql_connect("localhost","root","root"); 

mysql_select_db("RelayPerformanceTask-1");

$Table = "students";

$q="SELECT * FROM $Table";
$r=mysql_query($q);

$row = mysql_fetch_array($r);

$first=$row['FirstName'];
$last=$row['LastName'];
$school=$row['SchoolName'];
$month=$row['Month'];
$year=$row['Year'];
$count = 0;

if (!$row) {
	echo("<p>There are no students.</p>");
} else {
	echo("<table border='1'><tr><td>First Name</td><td>Last Name</td><td>School Name</td><td>Month</td><td>Year</td></tr>");
	while($row) {
	  $count++;
$first=$row['FirstName'];
$last=$row['LastName'];
$school=$row['SchoolName'];
$month=$row['Month'];
$year=$row['Year'];
	
	  if($count % 2) {
      echo("   <tr>
			    <td>" . $first . "</td>
				<td>" . $last . "</td>
				<td>" . $school . "</td>
				<td>" . $month . "</td>
				<td>" . $year . "</td>
				<td><a href='delete.php'>DELETE</a></td>
		      </tr>");
	  } else {
		       echo("   <tr bgcolor='#CCCCCC'>
			    <td>" . $first . "</td>
				<td>" . $last . "</td>
				<td>" . $school . "</td>
				<td>" . $month . "</td>
				<td>" . $year . "</td>
				<td><a href='delete.php'>DELETE</a></td>
		      </tr>");
	  }
		 
	 $row = mysql_fetch_array($r);
	}
	echo("</table>");
}

mysql_close();
?>