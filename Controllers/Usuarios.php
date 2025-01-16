<?php 

	class Usuarios extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Usuarios()
		{
			$data['page_id'] = 3;
			$data['page_tag'] = " NODESS TESSFP  ";
			$data['page_name'] = "usuarios";
			$data['page_title'] = "Usuarios <small> Tienda Artesanal </small>";
			
			$this->views->getView($this,"usuarios",$data);
		}

	}
 ?>