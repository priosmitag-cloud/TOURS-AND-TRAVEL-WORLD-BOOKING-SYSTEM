<?php include "conn.php";
    $id = $_GET['id'];
    $select = "SELECT * FROM `customer_details` where customerid = '$id'";
    $pass1 = mysqli_query($conn, $select);
    if($pass1){
        $exisist= mysqli_num_rows($pass1);
        if($exisist==1){
            $result= mysqli_fetch_assoc($pass1);
        }
    }
    else{

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;

            /* Add this to center everything */
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .contact-section {
            padding: 50px 0;

        }

        .contact-info i {
            font-size: 20px;
            background-color: #d4ed91;
            padding: 10px;
            border-radius: 50%;
            margin-right: 10px;
            color: #000;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .social-icons a {
            font-size: 20px;
            margin-right: 10px;
            color: #000;
            text-decoration: none;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-submit {
            background-color: #d4ed91;
            border: none;
            color: #000;
            display: block;
            margin: 0 auto;
        }

        .btn-submit:hover {
            background-color: #c3dd82;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <div class="container contact-section">
        <div class="row">

            <!-- Left Side -->
            <div class="col-md-6">
                <h2 class="fw-bold">Welcome Back...</h2>
                <br>
                <p>Whether you have a question, a wild idea, or just want to say hi — drop us a line. Let’s create
                    something amazing together.</p>
                <br>

                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> Sumitra Abashan, No. 255, Barrackpore Trunk Rd, behind
                        Himalaya Optical, Kolkata, West Bengal, 700036</p>
                    <p><i class="fas fa-phone"></i> +919831393561</p>
                    <p><i class="fas fa-envelope"></i> contactus@travelexploria.in</p>
                </div>
                <br>

                <h6 class="mt-4">Follow Us:</h6><br>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fas fa-camera"></i></a>
                    <a href="#"><i class="fas fa-play"></i></a>
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h5 class="fw-bold mb-3">UPDATE YOUR DETAILS</h5>
                    
                    <form action="#" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" name="uname" value="<?php echo $result['fullname'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" name="uemail" value="<?php echo $result['emailaddress'] ?>" required>
                        </div>
                        <div class="mb-3 d-flex">
                            <input type="text" class="form-control me-2" style="max-width: 80px;" value="+91" readonly>
                            <input type="tel" class="form-control" placeholder="Phone Number" name="unumber" value="<?php echo $result['phonenumber'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <input type="date" class="form-control" name="date" value="<?php echo $result['date'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="3" placeholder="Message" name="umessage"><?php echo htmlspecialchars($result['message']); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit px-4" name="update">UPDATE</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>

<?php 
if(isset($_POST["update"])){
    $name=$_POST["uname"];
    $email=$_POST["uemail"];
    $number=$_POST["unumber"];
    $date=$_POST["date"];
    $message=$_POST["umessage"];

    // echo "$uname, $uemail, $unumber, $date, $message";

    $update = "UPDATE `customer_details` SET `fullname`='$name', `emailaddress`='$email', `phonenumber`='$number',`date`='$date', `message`='$message' WHERE `customerid` = '$id'";
    $pass2= mysqli_query($conn,$update);
    if($pass2){
    ?>
        <script>
            alert ("Data Updated Successfully..Thank You");
            window.open("http://localhost/travelxploria/project/travelxploria.html","_self");
        </script>
    <?php
    }
    else{
        echo "Failed To Update";
    }
}
?>

