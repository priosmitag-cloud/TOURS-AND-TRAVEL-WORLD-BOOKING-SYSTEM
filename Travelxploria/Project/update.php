<!-- <?php
include "conn.php";

// Get ID from URL or POST
$id = $_GET["id"] ?? $_POST["id"] ?? '';

if (empty($id)) {
    echo "<script>alert('No customer selected for update'); window.location.href='customer_info.php';</script>";
    exit;
}

// Fetch record for this ID
$sql = "SELECT * FROM customer_details WHERE customerid='$id'";
$query = mysqli_query($conn, $sql);

if (!$query || mysqli_num_rows($query) !== 1) {
    echo "<script>alert('Record not found'); window.location.href='customer_info.php';</script>";
    exit;
}

$record = mysqli_fetch_assoc($query);

// If form submitted, update record
if (isset($_POST["submit"])) {
    $name    = $_POST["uname"];
    $email   = $_POST["uemail"];
    $number  = $_POST["unumber"];
    $date    = $_POST["date"];
    $message = $_POST["umessage"];
    $id      = $_POST["id"];

    $update_sql = "UPDATE customer_details 
                   SET fullname='$name', 
                       emailaddress='$email', 
                       phonenumber='$number',
                       date='$date', 
                       message='$message'
                   WHERE customerid='$id'";

    if (mysqli_query($conn, $update_sql)) {
        echo "<script>
            alert('Data updated successfully');
            window.location.href='customer_info.php';
        </script>";
        exit;
    } else {
        echo "<script>alert('Error updating record');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3 class="mb-4">Update Customer Details</h3>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $record['customerid']; ?>">

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="uname" value="<?php echo $record['fullname']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" name="uemail" value="<?php echo $record['emailaddress']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="unumber" value="<?php echo $record['phonenumber']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" class="form-control" name="date" value="<?php echo $record['date']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea class="form-control" name="umessage" rows="3"><?php echo $record['message']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
        <a href="customer_info.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

</body>
</html> -->
