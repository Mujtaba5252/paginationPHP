<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Pagination</title>
</head>
<body>
    


        <div>
                <h2 style="width:85%;">
                Pagination with Jquery AJAX
                </h2>
        </div>
        <div id="loadingImage">
            <img src="image/Loading_2.gif"></img>
        </div>
        <div id="Content_div">
        </div>     

        <script>

            function hideLoading()
            {
                $("#loadingImage").fadeOut('slow');
            };
            $(document).ready(function(){

                $("#paginate li:first").css({'color':'#FF0084'}).css({'border' : 'none'});
                $("#Content_div").load("table.php?page=1",hideLoading());

            });

            

        </script>

        <?php
        include("databaseConnection.php");
        $per_page = 20;
        $sql = "SELECT * FROM studentdata";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        $pages = ceil($count/$per_page)
    ?>

    <div class="pagination" style="padding:10px;">
        <ul id="paginate">
            <?php        
            for($i=1; $i<=$pages; $i++)  {
                echo '<li id="'.$i.'">'.$i.'</li>';
            }
            ?>
        </ul>
    </div>
    <script>
         $("#paginate li").click(function(){
                $("#paginate li").css({'color' : '#0063DC'});
                $(this).css({'color' : 'red'}).css({'border' : 'none'});
                var page_num = this.id;
                console.log(page_num)
                $("#Content_div").load("table.php?page=" + page_num, hideLoading());
              });
    </script>
   


</body>
</html>