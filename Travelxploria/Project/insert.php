<?php

include "conn.php";

if(isset($_POST["submit"])){

    $name=$_POST["uname"];
    $email=$_POST["uemail"];
    $number=$_POST["unumber"];
    $date=$_POST["date"];
    $message=$_POST["umessage"];

    // echo "$uname, $uemail, $unumber, $date, $message";

    $insert="INSERT INTO `customer_details` (`fullname`, `emailaddress`, `phonenumber`,`date`, `message`) VALUES ('$name','$email','$number','$date','$message')";


    $pass= mysqli_query($conn,$insert);
    if($pass){
    ?>
        <script>
            alert ("Submitted Successfully..Thank You");
            window.open("http://localhost/travelxploria/project/travelxploria.html","_self");
        </script>
    <?php
    }
    else{
        echo "Failed To Insert";
    }
}
?>