<?php
//
// Базовый класс. Контроллер.
//


abstract class C_Base extends C_Controller
{
	protected $title;		// ??????????
	protected $content;		// ????? ?????

	//
	// ??????
	//
	function __construct()
	{		
	}
	
	protected function before()
	{
		$this->title = 'Название сайта';
		$this->content = '';
	}
	
	//
	// ????? ???? ?????
	//	
	public function render()
	{
		$get_user = new User();
		if (isset($_SESSION['user_id'])) {
			$user_info = $get_user->get($_SESSION['user_id']);
		} else {
			$user_info['name'] = false;
		}
		$templateheader = ladtwigtemplate('main.tmpl');
		echo $templateheader->render(array (
			'title' => $this->title,
			'content' => $this->content,
			'userid' => $user_info['id'],
			'username' => $user_info['name'],
			'colvo' => $_SESSION['colvo'],
			'useradmin' => $_SESSION['admin']
		));
	}	
}
