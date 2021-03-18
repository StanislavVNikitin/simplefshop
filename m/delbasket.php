<?

include_once('Basket.php');

session_start();

    $itembasket = new Basket();
    $countitem = $itembasket->basketitemcount($_POST["itemId"]);
	if($itembasket->basketdel($_POST["itemId"])){
        $_SESSION['colvo'] = (int)$_SESSION['colvo'] - (int)$countitem['counts'];
    }
    echo " Корзина ".$_SESSION['colvo'];

?>