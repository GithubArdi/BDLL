<?php
class LandingController
{
	private $akun;
	private $restaurant;
	private $menu;
	private $customer;
	private $keranjang;
	private $pesan;
	// private $order;
	function __construct()
	{
		$this->akun = model('akun');
		$this->restaurant = model('restaurant');
		$this->menu = model('menu');
		$this->customer = model('customer');
		$this->keranjang = model('keranjang');
		$this->pesan = model('pesan');
		// $this->order = model('order');
	}
	function index(){
		checkIfNotLogin();
		$data = [
			'title' => 'Beranda',
			'restaurant' => $this->restaurant->getData()
		];
		return view('landing/index', $data);
	}
	function restaurant($id){
		$restaurant = $this->restaurant->getItem($id);
		if ($restaurant === false){
			abort(404);
		}
		$data = [
			'title' => 'Restaurant',
			'appetizer' => $this->menu->getDataByIdRestoAndCategory($id, 'appetizer'),
			'maincourse' => $this->menu->getDataByIdRestoAndCategory($id, 'maincourse'),
			'dessert' => $this->menu->getDataByIdRestoAndCategory($id, 'dessert'),
			'item' => $restaurant
		];

		return view('landing/home', $data);
	}
	function menu($id){
		$menu = $this->menu->getById($id);
		if ($menu === false){
			abort(404);
		}

		$this->keranjang->tambah($id);

		// $this->menu->tambahPesanan($menu->id)
		redirect('restaurant/'.$menu->id_resto);
	}

	function pesan(){
		$data = [
			'title' => 'Pesanan',
			'pesan' => $this->pesan->getData(),
		];

		return view('landing/pesan', $data);
	}
	// function order(){
	// 	$data = [
	// 		'title' => 'Order',
	// 		'pesan' => $this->pesan->hapus(),
	// 	];

	// 	return view('landing/pesan', $data);
	// }
	function reservasi(){
		return view('landing/reservasi');
	}
	function konfreservasi(){
		return view('landing/konfreservasi');
	}
	function konfpesan(){
		return view('landing/konfpesan');
	}
	function login(){
		checkIfLogin();
		$data = [
			'title' => 'Login',
			'panel' => false
		];
		return view('landing/login', $data);
	}
	function doLogin(){
		checkIfLogin();
		
		$user = Input::post('username');
		$pass = md5(Input::post('password'));


		$config = [
			'username' => [
				'required' => true
			],
			'password' => [
				'required' => true
			]
		];

		$valid = new Validation($config);

		if($valid->run()){
			if($this->akun->login($user, $pass)){
				Session::sess('admin', true);
				Session::sess('login', true);
				redirect('control-panel');
			}
			else if ($this->customer->login($user, $pass)){
				Session::sess('admin', false);
				Session::sess('login', true);
				Session::sess('id_customer', true);
				redirect('');
			}
			else{
				msg('Username atau password Anda salah!', 'danger');
				redirect('login');
			}
		}else{
			msg($valid->getErrors(), 'danger');
			redirect('login');
		}
	}
	function register(){
        checkIfLogin();

        $data = [
            'title' => 'Register',
            'panel' => false
        ];

        return view('landing/register', $data);
    }
    public function logout(){
			session_destroy();
			redirect('login');
	}
}