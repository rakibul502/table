<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <title>sttabale</title>
</head>

<body>
    <?PHP
require_once("cunact.php");

if (isset($_REQUEST["edit_id"])) {
    $editID = $_REQUEST["edit_id"];
    $selact_info = "SELECT * FROM sttabale WHERE id=$editID";
    $run_info = mysqli_query($con, $selact_info);
    while ($getData = mysqli_fetch_array($run_info)) {

?>
    <div class="container my-4 p-4 shadow">
        <form class="from" action="edit.php" method="GET" enctype="multipart/form-data">
            <input type="text" class="form-control mb-2" placeholder="Inter your name" name="fname"
                value="<?php echo $getData["fname"]; ?>">
            <input type="text" class="form-control mb-2" placeholder="Inter your roll" name="lname"
                value="<?php echo $getData["lname"]; ?>">
            <input type="email" class="from-control mb-2" placeholder="Inter your email" name="email"
                value="<?php echo $getData["email"]; ?>">
            </br>
            <input type="hidden" name="edit_id" value="<?php echo $editID?>">
            <button type="submit" class="btn btn-warning" name="EditBtn">Editt informetion</button>
        </form>
    </div>
    <?PHP
    }
}?>
</body>

</html>