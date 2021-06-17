<?php

// namespace App\Http\Core;

session_start();

class View
{
	public function __construct()
	{
		require_once 'vendor/autoload.php';


		if (file_exists('./../config/bootstrap.php')) {
			require './../config/bootstrap.php';
		} else {
			require 'config/bootstrap.php';
		}

		if (file_exists('./../component/app.php')) {
			require './../component/app.php';
		} else {
			require 'component/app.php';
		}
	}

	// public function autoloadClassess()
	// {
	// 	spl_autoload_register(function ($class) {
	// 		if (file_exists('./../app/Http/Core/' . $class . '.php')) {
	// 			include './../app/Http/Core/' . $class . '.php';
	// 		} else {
	// 			include 'app/Http/Core/' . $class . '.php';
	// 		}

	// 		if (file_exists('./../app/Http/Eloquent/' . $class . '.php')) {
	// 			include './../app/Http/Eloquent/' . $class . '.php';
	// 		} else {
	// 			include 'app/Http/Eloquent/' . $class . '.php';
	// 		}

	// 		if (file_exists('./../app/Http/Models/' . $class . '.php')) {
	// 			include './../app/Http/Models/' . $class . '.php';
	// 		} else {
	// 			include 'app/Http/Models/' . $class . '.php';
	// 		}

	// 		if (file_exists('./../app/Http/Controllers/' . $class . '.php')) {
	// 			include './../app/Http/Controllers/' . $class . '.php';
	// 		} else {
	// 			include 'app/Http/Controllers/' . $class . '.php';
	// 		}
	// 	});
	// }

	public function loadContent($page)
	{
		if (strpos($page, '/')) {
			$dir = explode('/', $page);
			if (file_exists('./../resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php')) {
				$filePath = './../resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php';
			} else {
				$filePath = 'resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php';
			}
		} elseif (strpos($page, '.')) {
			$dir = explode('.', $page);
			if (file_exists('./../resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php')) {
				$filePath = './../resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php';
			} else {
				$filePath = 'resource/view/content/' . $dir[0] . '/' . $dir[1] . '.php';
			}
		} else {
			$dir = '';
			if (file_exists('./../resource/view/content/' . $page . '.php')) {
				$filePath = './../resource/view/content/' . $page . '.php';
			} else {
				$filePath = 'resource/view/content/' . $page . '.php';
			}
		}

		if (file_exists($filePath)) {
			include $filePath;
		}
	}

	public function loadLayout($page)
	{
		if (strpos($page, '/')) {
			$dir = explode('/', $page);
			if (file_exists('./../resource/view/include/' . $dir[0] . '/' . $dir[1] . '.php')) {
				$filePath = './../resource/view/include/' . $dir[0] . '/' . $dir[1] . '.php';
			} else {
				$filePath = 'resource/view/include/' . $dir[0] . '/' . $dir[1] . '.php';
			}
		} elseif (strpos($page, '.')) {
			$dir = explode('.', $page);
			if (file_exists('./../resource/view/include/' . $dir[0] . '/' . $dir[1] . '.php')) {
				$filePath = './../resource/view/include/' . $dir[0] . '/' . $dir[1] . '.php';
			} else {
				$filePath = 'resource/view/include/' . $dir[0] . '/' . $dir[1] . '.php';
			}
		} else {
			$dir = '';
			if (file_exists('./../resource/view/include/' . $page . '.php')) {
				$filePath = './../resource/view/include/' . $page . '.php';
			} else {
				$filePath = 'resource/view/include/' . $page . '.php';
			}
		}

		if (file_exists($filePath)) {
			include $filePath;
		}
	}
}