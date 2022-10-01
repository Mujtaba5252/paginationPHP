<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<center>
<table height = "50" cellpadding =10px width=80% border = "1" >
<tr>
     <th>ID</th> 
     <th>Name</th>
     <th>University</th>
     <th>Gender</th>
     
</tr>
    <?php
    include('databaseConnection.php');
$query = "SELECT *FROM studentData  "; 
$result = mysqli_query($conn, $query);  

while ($row = mysqli_fetch_array($result)) 
    {
            echo "<tr style = 'background-color : #FFFFE0'>
                                <td>",$row['id'], "</td>
                                <td>", $row['name'],"</td>
                                <td>", $row['university'],"</td>
                                <td>", $row['gender'],"</td>
                               
            </tr>"; 
        }
    ?>
</table>


</center>







</body>
</html>



