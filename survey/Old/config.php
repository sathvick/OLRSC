<?Php
///////// Database Details change here  ////
$dbhost_name = "localhost";
$database = "olrsc_test";
$username = "root";
$password = "password";
//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage();
die();
}
?>