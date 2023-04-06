<?php
session_start();
require_once ('dbh.inc.php');

$stmt = $pdo->prepare('UPDATE user SET logged_in = false WHERE email = ?');
$stmt->execute([$_SESSION['user_mail']]);

session_unset();
session_destroy();
header("Location: ../../index.php");
exit;

?>