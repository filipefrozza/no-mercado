<?php 
/**
 * classe responsável por logar no sistema, assim como criar/editar usuários
 *
 * @author Filipe Frozza <filipefrozza.fm@gmail.com>
 * @version 0.1
 * @since 21/03/2018
 */
class Usuario{
	/**
	 * Funçao para buscar usuário no banco com o intuito de logar no sistema
	 *
	 * @access public
	 * @param array $u conjunto de variáveis contendo o email/login e senha
	 * @return String JSON contendo informações para logar
	 */
	static function logar($u){
		return Model::logar($u);
	}

	/**
	 * Função para criar usuário no banco, ou atualizar dados do usuário logado
	 *
	 * @access public
	 * @param array $u conjunto de variáeis contendo dados do usuário a ser criado/atualizado
	 * @return boolean|int retorna ID gerado ou true/false caso salva/falhe
	 */
	static function salvar($u){
		return Model::salvar($u);
	}
}