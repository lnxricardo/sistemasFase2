<?php

class galeriaController extends controller{
	public function index(){
		$dados = array(
			'qtFotos' => 129,
			'eventos' => 52
		);
		$this->loadTemplate('galeria', $dados);
	}

	
}