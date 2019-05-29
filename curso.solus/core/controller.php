<?php 

class controller{
	public function loadView($viewName, $viewData = array()){ /*Recebendo dos controllers as variaveis*/
		extract($viewData); /*Extract transforma as chaves e variaveis*/
		require 'views/'.$viewName.'.php';


	}
	/*Responsável pelo template*/
	public function loadTemplate($viewName, $viewData = array()){
		require 'views/template.php';

	}
	public function loadViewInTemplate($viewName, $viewData =array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}




}


 ?>
