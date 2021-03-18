<?

include_once('Good.php');

session_start();
    $itemgooddel = new Good();
    $itemgooddel->gooddel($_POST["goodId"]);
    unlink("img/".$_POST["goodId"].".jpg");

?>