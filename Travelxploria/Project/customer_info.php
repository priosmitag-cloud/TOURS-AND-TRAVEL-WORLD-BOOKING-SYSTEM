<?php
include "conn.php";

$select = "SELECT * FROM `customer_details`";
$pass = mysqli_query($conn, $select);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        table {
            width: 100%;
            background: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #000000ff;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e1f5fe;
        }

        .up {
            color: white;
            background: #4CAF50;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .del {
            color: white;
            background: #ff0000ff;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .up:hover {
            background: #005504ff;
        }

        .del:hover {
            background: #6e0b0bff;
        }

    </style>
</head>
<body>

<h2>Customer Details</h2>
<table>
    <tr>
        <th>Customer Id</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Date</th>
        <th>Message</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


<?php
    $row = mysqli_num_rows($pass);

    if ($row != 0) 
    {
        while ($result = mysqli_fetch_assoc($pass))
        {
        ?>
        <tr>
            <td><?php echo $result["customerid"] ?></td>
            <td><?php echo $result["fullname"] ?></td>
            <td><?php echo $result["emailaddress"] ?></td>
            <td><?php echo $result["phonenumber"] ?></td>
            <td><?php echo $result["date"] ?></td>
            <td><?php echo $result["message"] ?></td>
            <td><a class="up" href="customerupdate.php?id=<?php echo urlencode($result['customerid']); ?>">Update</a></td>
            <td><a class="del" href="delete.php?id=<?php echo urlencode($result['customerid']); ?>">Delete</a></td>
        </tr>
        <?php
        }
    }
?>
 
</table>
</body>
</html>