<?php
//
// Контроллер корзины.
//



class C_Basket extends C_Base
{

	public function action_view()	{
	//
	// Просмотр Корзины
	//

		$this->title .= '::Корзина';
		if($_SESSION['order_id']){
			$viewbasket = new Basket();
			$basket_array=$viewbasket->basketget($_SESSION['order_id']);
		foreach ($basket_array as $id) {
				$basket_data[] = $id;
				$sumpricegood += $id['counts'] * $id['price'];
			}
		} else{
			$template = ladtwigtemplate('content/basketdef.html');
			$this->content = $template->render(array (
				'contenttext' => "Корзина пуста"
			));
			
			}

		$template = ladtwigtemplate('content/basket.html');
		$this->content = $template->render(array (
			'sumprice' => $sumpricegood,
			'idorder' => $_SESSION["order_id"],
			'data' => $basket_data
		));		 
	}

}
