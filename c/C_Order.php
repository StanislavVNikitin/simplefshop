<?php
//
// Класс заказов. Контроллер заказов.
//


class C_Order extends C_Base
{

	

	public function action_add(){
	//
	// Оформление Заказа
	//
		$this->title .= '::Подтверждение заказа';
		if($_SESSION['order_id']){
			$sumpricegood = 0;
			$vieworder = new Order();
			$order_array=$vieworder->orderget($_SESSION['order_id']);
			
			$userarray = [
				'username' => $_POST['username'], 
				'useremail' => $_POST['useremail'], 
				'useretel' => $_POST['usertel'], 
				'userecity' =>$_POST['usercity'], 
				'userstreet' => $_POST['userstreet'], 
				'userhouse' => $_POST['userhouse'], 
				'userboild' => $_POST['userboild'], 
				'userkv' => $_POST['userkv']  
			];
			foreach ($order_array as $id) {
				$order_data[] = $id;
				$sumpricegood += $id['counts'] * $id['price'];
			}
			$template = ladtwigtemplate('content/order.html');
			$this->content = $template->render(array (
				'sumprice' => $sumpricegood,
				'idorder' => $_SESSION["order_id"],
				'data' => $order_data,
				'userarray' => $userarray
			));	


		} else{

			$text = "<div class='row'>Корзина пуста.</div>";
		
		}

		$updatuseridorder = new Order();
		$orderuser = $_POST['username']." <br>Email: ".$_POST['useremail']." <br>Телефон: ".$_POST['usertel'];
		$orderadress .= 'Адрес доставки '.$_POST['usercity'].'  '.$_POST['userstreet'].' дом '.$_POST['userhouse'].' строение '.$_POST['userboild'].' квартира '.$_POST['userkv'];
		$updatuseridorder->orderclose($_SESSION['user_id'], $_SESSION['order_id'], $orderuser, $orderadress);
		$_SESSION['order_id'] = null;
	}

}
