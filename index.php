<?PHP
//Database Connection start
require_once("cunact.php");


?>



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
    <div class="container my-4 p-4 shadow">

        <h2><a style="text-decoration: none;" href="index.php">Darunit students</a></h2>
        <form class="from" action="saveData.php" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control mb-2" placeholder="Inter your name" name="std_name">
            <input type="text" class="form-control mb-2" placeholder="Inter your roll" name="std_roll">
            <input type="email" class="from-control mb-2" placeholder="Inter your email" name="std_email">
            </br>
            <button type="submit" class="btn btn-warning" name="std_info">Add informetion</button>
        </form>

    </div>
    <!-- delet -->
    <?php
if (isset($_REQUEST["deleted"])) {
    echo " Data deleted ";
}
elseif (isset($_REQUEST["Edited"])) {
    echo "Data edited";
}

?>
    <!-- tabale -->
    <div class="container my-4 p-4 shadow">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>email</th>
                </tr>
            </thead>
            <?php
require_once("cunact.php");
$query = "SELECT * FROM sttabale";
$retanquary = mysqli_query($con, $query);
if ($retanquary == true) {
    $sncrunt = 1;
    while ($my_data = mysqli_fetch_array($retanquary)) {
?>

            <tbody>
                <tr>
                    <td><?php echo $sncrunt;
        $sncrunt++; ?></td>
                    <td><?php echo $my_data["id"]; ?></td>
                    <td><?php echo $my_data["fname"]; ?></td>
                    <td><?php echo $my_data["lname"]; ?></td>
                    <td><?php echo $my_data["email"]; ?></td>

                    <td>
                        <a onclick=" return confirm('Confrm Edit')" style="text-decoration: none;"
                            href="editData.php?edit_id=<?php echo $my_data["id"]; ?>" class="btn btn-primary">Edit</a>
                        <a onclick="return confirm('Are you absolutely sure you want to delete?')"
                            style="text-decoration: none;" href="dl.php?id=<?php echo $my_data["id"]; ?>"
                            class="btn btn-danger">Delit</a>
                    </td>
                </tr>
            </tbody>
            <?PHP
    }

}
?>

        </table>




    </div>
</body>

</html>