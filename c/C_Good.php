<?php
//
// Класс товаров. Контроллер товаров.
//


class C_Good extends C_Base
{

	
	public function action_view()	{
	//
	// Просмотр каталога товаров
	//

		try {
			$this->title .= '::Каталог Товаров';

			$get_good = new Good();
			$good_array = $get_good->goodget();
			foreach($good_array as $id){
				$good_data[] = $id;
			  }
			$template = ladtwigtemplate('content/good.html');
			$this->content = $template->render(array (
				  'data' => $good_data
			  ));

			} catch (Exception $e) {
				die ('ERROR: ' . $e->getMessage());
		}
	}

}
