<?php
include('databaseConnection.php');
 $count=100;

for($i=0; $i<=$count; $i++)
{
  $sql = "INSERT INTO studentdata (id,name,university,gender) VALUES ('','mujtaba', 'numl', 'male')";

  $result=mysqli_query($conn, $sql);
}

if ($result) 
{
  echo "New records created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
