<?php

$FirstName = $_POST['firstname'];
$LastName = $_POST['lastname'];
$SchoolName = $_POST['schoolname'];
$Month= $_POST['month'];
$Year = $_POST['year'];
$TableName = "students";

$link = @mysql_connect("localhost","root","root"); 

mysql_select_db("RelayPerformanceTask-1");

$query = "INSERT INTO $TableName(FirstName,LastName,SchoolName,Month,Year) VALUES ('$FirstName','$LastName', '$SchoolName','$Month','$Year')";

$result = mysql_query($query);

if($result){
echo("<script>
<!--
location.replace('thankyou.php?first=" . $FirstName . "&last=" . $LastName . "&school="  . $SchoolName . "&month="  . $Month . "&year="  . $Year . "');
-->
</script>");
}


?>