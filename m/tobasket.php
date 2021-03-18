<?

include_once('Basket.php');

session_start();


    if (is_null($_SESSION['user_id'])){
        $_SESSION['user_id'] = 0;               
    }
    $lastorder = new Basket();
    $lastidorder = $lastorder->checklastorderuser($_SESSION['user_id']);
    if($lastidorder){
        $_SESSION['order_id'] = $lastidorder['lastidorder'];
    }
    if(is_null($_SESSION['order_id'])){
        $order = new Basket();
        $lastorder = $order->checklastorderuser(!$_SESSION['user_id']);
        $_SESSION['order_id'] = $order->addneworder($_SESSION['user_id']);			
        $order->addordertouser($_SESSION['user_id'], $_SESSION['order_id']);
    }
    $goodaddbasket = new Basket();
    $goodaddbasket->addgoodtobasket($_POST['itemId'], $_SESSION['order_id'],1);
    $_SESSION['colvo']=(int)$_SESSION['colvo']+1;
    echo " Корзина ".$_SESSION['colvo'];

?>