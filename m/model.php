<?php
	function ladtwigtemplate($template){
			// указывае где хранятся шаблоны
			$loader = new \Twig\Loader\FilesystemLoader('templates');
			// $loader = new Twig_Loader_Filesystem('templates');
			// инициализируем Twig
			$twig = new \Twig\Environment($loader, [
				'cache' => 'cache',
			]);
			//$twig = new \Twig\Environment($loader);
			// $twig = new Twig_Environment($loader);
			// подгружаем шаблон
			return $twig->load($template);
	}

function text_get()
	{
		return file_get_contents('data/text.txt');
	}

function text_set($text)
	{
		file_put_contents('data/text.txt', $text);
	}



