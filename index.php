<?php
require_once('app/start.php');

use App\Model\User;

$table = "users";
// $result = $database->query("SELECT * FROM $table WHERE ID = 3");
$users = new User($database);
$user = $users->getUser(2);


?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Project</title>
</head>

<body>

</body>

</html>