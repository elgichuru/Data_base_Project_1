<?php

require_once 'database.php';
//get the vendor_id
$err_message='';
$Vendor_Id= filter_input(INPUT_POST,'Vendor_id',FILTER_VALIDATE_INT);
if (isset($Vendor_Id)){
    $err_message='Provide a vendor ID.';
}elseif (!is_numeric($Vendor_Id)){
    $err_message='The Vendor_Id should be numeric.';
}  
if (!empty($err_message)){
    include 'index.php';
    exit();
}

//Get invoices
$Query='select * from invoices where vendor_id=:vendor_id';

$statement=$pdo->prepare($Query);
$statement->bindvalue(':vendor_id',$Vendor_Id);
$statement->execute();
$invoices=$statement->fetchall();
$statement->closecursor();

?>
<!Doctype html>
<html>
    <head>
        <title>Search Results.</title>
    </head>
<head>
    <title>Table Data</title>
    <link rel="stylesheet" type="text/css"  href="main.css">
    <link rel="icon" type="image/x-icon" href="favico.ico">
</head>
<body>
     <table>
          <tr>
            <th>Invoice_ID</th>
            <th>Vendor_id</th>
            <th>Invoice_Number</th>
            <th>Invoice_Date</th>
            <th>Invoice_Total</th>
            <th>Payment_Total</th>
            <th>Credit_Total</th>
            <th>Terms_Id</th>
            <th>Invoice_Due_Date</th>
            <th>Payment Date</th>
        </tr>
        <?php foreach($invoices as $invoice): ?>
        <tr>
            <td><?php echo $invoice[0]; ?></td>
            <td><?php echo $invoice[1]; ?></td>
            <td><?php echo $invoice[2]; ?></td>
            <td><?php echo $invoice[3]; ?></td>
            <td><?php echo $invoice[4]; ?></td>
            <td><?php echo $invoice[5]; ?></td>
            <td><?php echo $invoice[6]; ?></td>
            <td><?php echo $invoice[7]; ?></td>
            <td><?php echo $invoice[8]; ?></td>
            <td><?php echo $invoice[9]; ?></td>
        </tr>
        <?php endforeach; ?>
        </table>
    
</body>
</html>
