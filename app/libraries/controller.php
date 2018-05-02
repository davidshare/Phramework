<?php
	/**
	* Base Controller 
	* Loads the Models and views
	*/
	class Controller{
		
		function __construct(argument)
		{
			# code...
		}

		//Load Model
		public function model($model){
			//Require model file
			require_once('../app/models'.$model.'.php');

			//instantiate model
			return new $model();
		}

		//load view 
		public function view($view, $data = []){
			//check for the view file
			if(file_exists('../app/views/'.$view.'.php')){
				require_once '../app/views'.$view.'.php';
			}else{
				//view does not exists
				die('view does not exist');
			}
		}
	}

?>