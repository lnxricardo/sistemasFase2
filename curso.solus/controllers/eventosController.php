<?php  

class eventosController extends controller{
	public function index(){
		$dados = array(
			'eventos' => 29
		);

		$this->loadTemplate('eventos', $dados);


	}

	




}