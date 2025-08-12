<?php
include "conn.php";

$id=$_GET["id"];
$delete = "DELETE FROM `customer_details` WHERE customerid = '$id'";

$pass = mysqli_query($conn, $delete);

    if($pass){
        ?>
        <script>
            alert ("Data Deleted Successfully..Thank You");
            window.open("http://localhost/travelxploria/project/travelxploria.html","_self");
        </script>
    <?php
    }
    else {
    }
?>