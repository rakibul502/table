<?PHP
//Database Connection start
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tabale";
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$con) {
    die("Data batch connection");
}
?>
