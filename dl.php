<?PHP
//Database Connection start
require_once("cunact.php");

$getID = $_REQUEST["id"];

$deleted = " DELETE FROM sttabale WHERE id=$getID";
$run = mysqli_query($con, $deleted);
if ($run == true) {
    header("location: index.php?deleted");
}
?>