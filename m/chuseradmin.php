<?

include_once('User.php');

session_start();
    $itemuserdel = new User();
    $itemuserdel->chuseradmin($_POST["userId"]);

?>