<?php
// Essa classe serve de template para criar as classes das tabelas
class Tabela{
	/**
	 * Função para buscar dados no banco, caso nenhum dado seja passado por parâmetro, ele ira buscar todos registros da mesma
	 *
	 * @access public
	 * @param array $array conjunto de variáveis que serão responsáveis pela busca no banco
	 * @return String JSON com o resultado da pesquisa no banco
	 */
	static function buscar($array = []){
		return Model::buscar('tabela', $array);
	}

	/**
	 * Função para salvar dados no banco, caso tenha uma id específica informada, ele realizará um update
	 *
	 * @access public
	 * @param array $t conjunto de variáveis contendo as colunas da tabela e os dados a serem salvos
	 * @return boolean|int retorna a id gerada caso necessário, senão retorna true se salvou, e false se falhou ao salvar
	 */
	static function salvar($t){
		return Model::salvar('tabela', $t);
	}

	/**
	 * Função para deletar um registro no banco, necessita do id informado
	 * @access public
	 * @param array $t conjunto de variáveis contendo os valores do registro a ser deletado
	 * @return boolean retorna true se deletou ou false caso falhe
	 */
	static function deletar($t){
		return Model::deletar('tabela', $t);
	}
}