<?PHP
//Database Connection start
require_once("cunact.php");
if(isset($_REQUEST["EditBtn"])){

    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $edtingid=$_REQUEST["edit_id"];

    $update="UPDATE sttabale SET fname='$fname',lname='$lname',email='$email' where id='$edtingid'";
    $runQuery=mysqli_query($con,$update);
    if ($runQuery == true) {
        header("location:index.php?Edited");
    }
}


?>
