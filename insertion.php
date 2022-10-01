<?php
include('databaseConnection.php');

$sql = "INSERT INTO `studentdata` (`id`, `name`, `university`, `gender`) VALUES ('2', 'sana', 'numl', 'female')";

if (mysqli_query($conn, $sql)) 
{
  echo "New records created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
