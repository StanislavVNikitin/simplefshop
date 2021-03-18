<?php
//
// Класс авторизации. Контроллер пользователей.
//

	class C_User extends C_Base {
		
		public function action_info() {
			$get_user = new User();
			$user_info = $get_user->get($_SESSION['user_id']);
			$this->title .= '::Личный кабинет ' . $user_info['name'];
			$user_admin = '';
			if($_SESSION['admin']){
				$user_admin = ' Этот пользователь Администратор';
			}
			$template = ladtwigtemplate('content/logindef.html');
			$this->content = $template->render(array (
				'contenttext' => "Личный кабинет пользователя: ".$user_info['name']."!".$user_admin,
			));
		}
		
		public function action_reg() {
			$this->title .= '::Регистрация';
			$template = ladtwigtemplate('content/userreg.html');
			$this->content = $template->render(array (
				'contenttext' => $result
			));
			if($this->isPost()) {
				$new_user = new User();
				$result = $new_user->newR($_POST['name'], $_POST['login'], $_POST['password']);
				if ($result) {
					$template = ladtwigtemplate('content/logindef.html');
					$this->content = $template->render(array (
						'contenttext' => "Пользователь зарегистрировался успешно!"
					));
				} else {
					$template = ladtwigtemplate('content/logindef.html');
					$this->content = $template->render(array (
						'contenttext' => "Такой пользователь уже существует!"
					));
				}
			}
		}

		public function action_login() {
			$this->title .= '::Вход';

			if($this->isPost()) {
				$login = new User();
				$result = $login->login($_POST['login'], $_POST['password']);
				$lastorder = new Basket();
				$lastidorder = $lastorder->checklastorderuser($_SESSION['user_id']);
				if($lastidorder){
					$_SESSION['order_id'] = $lastidorder['lastidorder'];
				}

				$useradmin = new Admin();
				$admin = $useradmin->checkuseradmin($_SESSION['user_id']);
				$roleadmin = ($admin['roleadmin']);
				if($roleadmin) { 
					$_SESSION['admin'] = true;
				}else  { 
					$_SESSION['admin'] = false; 
				}
				$template = ladtwigtemplate('content/logindef.html');
				$this->content = $template->render(array (
					'contenttext' => $result
				));
				}
			
				
		}

		public function action_logout() {
			$logout = new User();
			$result = $logout->logout();
		}
	}
?>