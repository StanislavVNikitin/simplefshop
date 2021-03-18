<?php
//
// Контроллер Админки.
//



class C_Admin extends C_Base
{

	public function action_admin()	{
	//
	// функция входа в администрирование интернет магазином
	//
		if($_SESSION['admin']){
		try {
			$this->title .= '::Админка';
			$template = ladtwigtemplate('content/admin.html');
			$this->content = $template->render(array (
				'contenttext' => "Добро пожаловать в Администрирование Интернет-магазином",
			  ));

			} catch (Exception $e) {
				die ('ERROR: ' . $e->getMessage());
		}}else {
			try {
				$this->title .= '::Админка';
				$template = ladtwigtemplate('content/notadmin.html');
				$this->content = $template->render(array (
					'contenttext' => "Вы не Администратор!!!",
				  ));
	
				} catch (Exception $e) {
					die ('ERROR: ' . $e->getMessage());
				}
			}
		}

	public function action_addgood()	{
	//
	// Добавление товара
	//
		try {
			$this->title .= '::Админка:Добовление Товара';
			$template = ladtwigtemplate('content/addgood.html');
			$this->content = $template->render(array (
			  ));
		} catch (Exception $e) {
				die ('ERROR: ' . $e->getMessage());
		}
	
	}
	public function action_ingood()	{
	//
	// Добавление товара
	//
		$addgood = new Admin();
		$idgood = $addgood->addgooddb($_POST['goodname'], $_POST['price'], '2', 'temp');
		$path = "img/".$idgood.".jpg";
		move_uploaded_file($_FILES["goodimage"]["tmp_name"], $path);
		$addgood->goodimg($idgood, $idgood.'.jpg');
	}

	public function action_editgood()	{
	//
	// Просмотр и удаление товаров
	//
		$viewgood = new Good();
		$good_array=$viewgood->goodget();
		foreach($good_array as $id){
			$good_data[] = $id;
		}
		$template = ladtwigtemplate('content/delgood.html');
		$this->content = $template->render(array (
			'data' => $good_data
		));		
	}	

	public function action_edituser()	{
	//
	// Просмотр и удаление пользователей, установка и снятие прав адиминистратора
	//
		$viewuser = new User();
		$user_array = $viewuser->userget();
		foreach($user_array as $id){
			if($id['roleadmin']){
				$id['roleadmin'] = "Да";
			}else {$id['roleadmin'] = "";}
		$user_data[] = $id;
		}
		$template = ladtwigtemplate('content/viewuser.html');
		$this->content = $template->render(array (
			'data' => $user_data
		));	
	
		
	}

	public function action_vieworder()	{
	//
	// Просмотр и управление заказами
	//
		$vieworders = new Order();
		$orders_array = $vieworders->orderview();
		foreach($orders_array as $id){
			if($id['statusorder'] == 1){
				$varstatusorder = "Оформлен";
			}elseif($id['statusorder'] == 2){
				$varstatusorder = "Доставлен";
			} 
			$id['varstatusorder'] = $varstatusorder;
			$sumorder = 0;
 			$ordersgood = new Order();
			$vordersgood = $ordersgood->orderget($id['id']);
			foreach ($vordersgood as $orders) {
				$sumorder += $orders['counts'] * $orders['price'];
			} 
			$id['ordersgood'] = $vordersgood;
 			$id['sumorder'] = $sumorder; 
			$orders_data[] = $id;
			
		}

		$template = ladtwigtemplate('content/vieworder.html');
		$this->content = $template->render(array (
			'data' => $orders_data
		));	

	}

}
