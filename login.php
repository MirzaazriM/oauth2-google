<?php

    require_once "config.php";

    // get google login url depending on our credentials added to the GoogleClient object
    $loginURL = $client->createAuthUrl();

?>

<!doctype html>

<html lang="en">

<head>
    <title>Login</title>
</head>

<body>

<h2>Login</h2>

<form>
    <input name="email"/> <br/>
    <input type="password" name="password" /> <br/>
    <input type="submit" value="Log in"/>
    <!-- Redirect to google login page -->
    <input type="button" onclick="window.location = '<?php echo $loginURL?>'" value="Log in with Google"/>
</form>
</body>

</html>