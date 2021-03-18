<?

include_once('User.php');

session_start();
    $itemuserdel = new User();
    $itemuserdel->userdel($_POST["userId"]);

?>