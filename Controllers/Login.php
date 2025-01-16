<?php 

	class Login extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function login()
		{			
			$data['page_tag'] = "Login - Tienda Artesanal";
			$data['page_title'] = "Login";
			$data['page_name'] = "login";
			$data['page_functions_js'] = "function_login.js";

			$this->views->getView($this, "login", $data);			
		}

	}
 ?>