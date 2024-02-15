<?php
if(isset($_REQUEST["rec"])){
     $search=$_REQUEST["rec"];
     $conn=mysqli_connect("localhost","root","","dataBase_name");
     $rs=mysqli_query($conn,"select * from table_name where name LIKE '%$search%'");
     while($r=mysqli_fetch_array($rs)){
        ?>

     <!--- show the record on the table --->
     <?php
     }
}
?>