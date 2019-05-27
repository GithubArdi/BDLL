<?php 
	Class DashboardController{
		private $akun,$customer;
		function __construct()
		{
			$this->akun = model('akun');
			
			checkIfNotLogin();

			if(Session::sess('admin') == false){
				redirect('');
			}
		}
		public function index(){
			$data = [
				'title' => 'Dashboard'
			];
			return view('admin/dashboard/index');
		}
		public function logout(){
			session_destroy();
			redirect('login');
		}
	}
 ?>