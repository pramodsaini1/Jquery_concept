<?php
if(isset($_REQUEST["btn"])){
    $conn=mysqli_connect("localhost","root","","db_name");
    $btn=mysqli_real_escape_string($conn,$_REQUEST["btn"]);
    $rs=mysqli_query($conn,"select * from table_name where fname LIKE '$btn%'");
    echo"<table class='table table-borderless'>";
    $flag=0;
    while($r=mysqli_fetch_array($rs)){
        $flag=1;
        ?>
     <!---all record show here--->
       <?php
    }
    if($flag==0){
        echo "<tr><td><h3>Record Not Found</h3></td></tr>";
    }
    echo "</table>";
}
?>