<?

includes('class/Connection.php');

$connection=Connection::getInstance(); //make the instance
$query=$connection->connect(); //make the connect


$query->prepare("SELECT * FROM usuario"); // and than, just use PDO methods
$query->execute();