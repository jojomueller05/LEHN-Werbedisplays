<?php
//import header
require_once('./app/views/header.php');

?>

<?php
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){

  //if logged in show dashboard.php
  include './app/views/dashboard.php';

} else {
  //if not logged in show login.php
  include './app/views/login.php';
}
?>

<!--Content goes here-->

  
<?php
//import footer
require_once('./app/views/footer.php')
?>