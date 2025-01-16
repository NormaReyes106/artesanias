<?php 

	class Dashboard extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function dashboard()
		{
			$data['page_id'] = 2;
			$data['page_tag'] = " NODESS TESSFP  ";
			$data['page_title'] = "Principal";
			$data['page_name'] = "dashboard";
			
			$this->views->getView($this,"dashboard",$data);
		}

	}
 ?>