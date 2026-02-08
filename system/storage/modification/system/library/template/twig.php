<?php
namespace Template;
final class Twig {
	private $data = array();

	public function set($key, $value) {
		$this->data[$key] = $value;
	}
	
	public function render($filename, $code = '') {
		if (!$code) {
			$file = DIR_TEMPLATE . $filename . '.twig';

			if (defined('DIR_CATALOG') && is_file(DIR_MODIFICATION . 'admin/view/template/' . $filename . '.twig')) {	
                $code = file_get_contents(DIR_MODIFICATION . 'admin/view/template/' . $filename . '.twig');
            } elseif (is_file(DIR_MODIFICATION . 'catalog/view/theme/' . $filename . '.twig')) {
                $code = file_get_contents(DIR_MODIFICATION . 'catalog/view/theme/' . $filename . '.twig');
            } elseif (is_file($file)) {
				$code = file_get_contents($file);
			} else {
				throw new \Exception('Error: Could not load template ' . $file . '!');
				exit();
			}
		}

		// initialize Twig environment
		$config = array(
			'autoescape'  => false,
			'debug'       => false,
			'auto_reload' => true,
			'cache'       => DIR_CACHE . 'template/',
			'optimizations' => 0
		);

		try {
			if (class_exists('\\Twig\\Environment')) {
				$loader1 = new \Twig\Loader\ArrayLoader(array($filename . '.twig' => $code));
				$loader2 = new \Twig\Loader\FilesystemLoader(array(DIR_TEMPLATE));
				$loader = new \Twig\Loader\ChainLoader(array($loader1, $loader2));
				$twig = new \Twig\Environment($loader, $config);
				return $twig->render($filename . '.twig', $this->data);
			}

			if (class_exists('\\Twig_Environment')) {
				$loader = new \Twig_Loader_String();
				$twig = new \Twig_Environment($loader, $config);
				return $twig->render($code, $this->data);
			}

			throw new \RuntimeException('Twig environment class not found');
		} catch (\Exception $e) {
			trigger_error('Error: Could not load template ' . $filename . '! ' . $e->getMessage());
			exit();
		}	
	}	
}
