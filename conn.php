<?

$username = $password = $hostname = $database = $conn = "";

$username = "";
$password = "";

$hostname = "localhost";
$database='';

// MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
$conn = new mysqli($hostname, $username, $password, $database) or die("Connecting to mysqli failed");
return $conn;
