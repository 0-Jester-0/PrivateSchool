<?php

namespace Core;

class View
{
	/**
	 * Генерация страниц для каждой таблицы
	 * @param $page
	 * @param array $data
	 * @throws \Exception
	 */
	public static function renderPage($page, $data = [])
	{
		extract($data);

		$file = dirname(__DIR__).'/apps/views/'.$page;

		if(is_readable($file))
		{
			require $file;
		}else
		{
			throw new \Exception('$file not found');
		}

	}
}