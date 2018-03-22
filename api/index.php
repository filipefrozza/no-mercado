<?php
/**
 * Arquivo responsável por gerenciar a API interna do sistema
 */
include 'model.class.php';
if(isset($_GET['url'])){
	$path = explode('/', $_GET['url']);
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($path[0]) {
		case 'tabela':
			include 'tabela.class.php';
			switch ($method) {
				case 'GET':
					echo Tabela::buscar();
					break;
				
				default:
					header('HTTP/1.1 404 Not Found', 404, true);
					break;
			}
			break;
		
		case 'login':
			include 'usuario.class.php';
			switch ($method) {
				case 'POST':
					echo Usuario::logar($_POST);
					break;
				
				default:
					header('HTTP/1.1 404 Not Found', 404, true);
					break;
			}
			break;

		default:
			header('HTTP/1.1 404 Not Found', 404, true);
			break;
	}
}