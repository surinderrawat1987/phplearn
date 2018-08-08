<?php

include './autoload.php';

// Check for secutiry
//BasicSecurity::restrictMysqlInjection(Database::getInstance(), $_GET);

$user = new User;

if ($user->deleteUser($_GET['id'])) {
    echo "<script>alert('User deleted Successfully')</script>";
} else {
    echo "<script>alert('User has not been deleted. Please try again')</script>";
}
echo "<script>window.location='index.php'</script>";
