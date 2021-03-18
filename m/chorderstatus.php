<?

include_once('Order.php');

session_start();
    $statusorderchange = new Order();
    $statusorderchange->chorderstatus($_POST["orderId"]);

?>