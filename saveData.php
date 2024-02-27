<?PHP
require_once("cunact.php");

if (isset($_REQUEST["std_name"]) && isset($_REQUEST["std_name"]) && isset($_REQUEST["std_email"])) {

    $std_name = $_REQUEST["std_name"];
    $std_roll = $_REQUEST["std_roll"];
    $std_email = $_REQUEST["std_email"];

    $insartquery = "INSERT INTO sttabale(fname,lname,email) VAlUE('$std_name', '$std_roll', '$std_email')";
    $run_query = mysqli_query($con,$insartquery);
    if ($run_query == true) {
        header("location:index.php?action=true");
    }
    else {
        header("location:index.php?action=false");
    }
}

?>



