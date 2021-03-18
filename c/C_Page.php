<?php
//
// Класс страниц. Контроллер.
//


class C_Page extends C_Base
{
	//
	// Контроллер загрузки индексной страницы
	//
	
	public function action_index(){
		try {
			
			$this->title .= '::Главная';
			$get_good = new Good();
			$good = $get_good->goodgetindex();
			foreach($good as $id){
				$good_data[] = $id;
			}

			$template = ladtwigtemplate('content/index.html');
			$this->content = $template->render(array (
				'data' => $good_data
			));
		} catch (Exception $e) {
				die ('ERROR: ' . $e->getMessage());
		}
	}
}
