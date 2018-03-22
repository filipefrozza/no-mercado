<?php
include("conexao.class.php");
/**
 * Classe modelo para acesso genérico de dados no banco
 *
 * @author Filipe Frozza
 * @version 0.1
 * @since 03/2018
 */
class Model{
	/**
	 * Função para buscar dados no banco
	 * 
	 * @access public
	 * @param String $tabela Tabela no banco que será usada na query
	 * @param array $array Conjunto de variáveis que irão configurar a query
	 * @return String JSON do resultado da query
	 */
	static function buscar($tabela, $array=[]){
		$conexao = ConexaoBanco::getInstancia();

		try{
			$stat = $conexao->query("select * from ".$tabela);
			$array = array();
			$array = $stat->fetchAll(PDO::FETCH_ASSOC);
			$conexao = null;
			return json_encode($array);
		}catch(PDOException $e){
			echo 'Erro ao buscar '.$e;
		}
	}
}