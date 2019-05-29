<?php

class aulasController extends controller{
	public function index(){
		$dados = array(
			'nome' => 'Luana Melo',
			'qtAulas' => '7'
		);

		$this->loadTemplate('aulas', $dados);
	}
}