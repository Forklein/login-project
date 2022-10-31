<?php
require_once('app/start.php');

use App\Model\User;



if (isset($_POST['email']) && isset($_POST['password'])) {
    $user = $_POST['email'];
    $password = $_POST['password'];
    print_r($user);
    print_r($password);
    die();
    // $users = new User();
    // $user = $users->getUser($id);
}



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
    <form>
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="password">
        <button id="submit" type="submit">Invia</button>
    </form>

    <script type="text/javascript">
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const btn = document.getElementById("submit");

        // btn.addEventListener("click", () => {
        //     fetch(`${window.location}`,
        //         method => "POST",
        //         body => 
        //     )
        // })
    </script>
</body>

</html>