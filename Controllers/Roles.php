<?php 

	class Roles extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Roles()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = " NODESS TESSFP  ";
			$data['page_name'] = "rol_usuario";
			$data['page_title'] = "Roles Usurios <small> Tienda Artesanal </small>";
			
			$this->views->getView($this,"roles",$data);
		}

	}
 ?>