<?php 

class homeController extends controller{
	// 1 = controller
	// 2 = action
	// 3 = parametros

	public function index(){
		$dados = array(
			'quantidade' => 5,
			'nome' => 'Ricardo',
			'idade' => 35
			
		);

		$this->loadTemplate('home', $dados);
	}

	



}