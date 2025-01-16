<?php 

	class Productos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Productos()
		{
			$data['page_id'] = 5;
			$data['page_tag'] = " NODESS TESSFP  ";
			$data['page_name'] = "productos";
			$data['page_title'] = "Productos";
			
			$this->views->getView($this,"productos",$data);
		}

	}
 ?>