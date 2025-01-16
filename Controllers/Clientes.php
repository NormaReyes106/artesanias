<?php 

	class Clientes extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Clientes()
		{
			$data['page_id'] = 4;
			$data['page_tag'] = " NODESS TESSFP  ";
			$data['page_name'] = "clientes";
			$data['page_title'] = "Clientes ";
			
			$this->views->getView($this,"clientes",$data);
		}

	}
 ?>