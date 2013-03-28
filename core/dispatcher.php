<?php 
	
	class dispatcher {

		var $request;
		
		function __construct()	{
			$this->request= new Request(); 
			router:: parse($this->request->url, $this->request);
			$controller= $this->loadController();	
			if (!in_array($this->request->action, array_diff(get_class_methods($controller),
				get_class_methods('controller')
				))); 
			{
				$this->error('le controller '.$this->request->controller.' n\'a pas de méthode '.$this->request->action);
				die();
}

			call_user_func_array(array($controller, $this->request->action), $this->request->params);
			$controller-> render($this->request->action);
		}

		function  error($message){
			$controller= new Controller($this->request);
			$controller->set('message', $message);
			$controller->render('/errors/404');
			die();
		}	

		function loadController(){
			$name = ucfirst($this->request->controller).'Controller';
			$file = ROOT.DS.'controller'.DS.$name.'.php';
			require $file;
			return new $name($this->request);
		}

	}

			