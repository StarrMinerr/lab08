


<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'Myles' && $password == '106564353') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
} else {
    echo 'Invalid username or password. <a href="login.html">Try again</a>';
}
include 'footer.inc';
include 'header.inc';
?>