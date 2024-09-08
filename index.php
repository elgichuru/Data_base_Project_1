<?php
if (!isset($Vendor_Id)){$Vendor_Id=null;}
?>
<!Doctype html>
<html>
    <head>
        <title>Invoice Search Application</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="icon" href="x-icon/image" href="favico.ico">
    </head>
    <body>
        <main>
            <h1>Enter Vendor_ID to Search</h1>
            <?php if (!empty($err_message)){ ?>
            <p class="error"> <?php echo $err_message; ?></p>
            <?php }?>
            <form action="Search_Vendor.php" method="POST">
                <label>Enter Vendor_ID:</label>
                <input type="text" name="Vendor_id"><br>
                <label>&nbsp;</label>
                <input type="Submit" value="Search"><br>
            </form>
        </main>
    </body>
</html>
