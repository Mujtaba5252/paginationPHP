<?php
    include("databaseConnection.php");
    $per_page=20;
    $page=1;
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }
    $start=($page-1)*$per_page;
    $sql_query="SELECT * FROM studentdata ORDER BY id LIMIT $start,$per_page";
    $resultset=mysqli_query($conn,$sql_query);
?>

<table height = "50" cellpadding =10px width=80% border = "1" >
        <tr>
            <th>ID</th> 
            <th>Name</th>
            <th>University</th>
            <th>Gender</th>
            
        </tr>
        <?php while($rows = mysqli_fetch_array($resultset)) {?>
            <tr bgcolor="#DDEBF5">
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['name']; ?></td>
            <td><?php echo $rows['university']; ?></td>
            <td><?php echo $rows['gender']; ?></td>
            </tr><?php }
            
        ?>
                        
                    
</table>
        





