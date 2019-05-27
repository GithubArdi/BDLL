<?php
class LandingController
{
	private $akun;
	private $restaurant;
	private $menu;


	function __construct()
	{
		$this->akun = model('akun');
		$this->restaurant = model('restaurant');
		$this->menu = model('menu');
	}

	function index(){
		$data = [
			'title' => 'Beranda',
			'restaurant' => $this->restaurant->getData()
			// 'menu' => $this->menu->getData()
		];

		return view('landing/index', $data);
	}
	function restaurant($id){
		$data = [
			'title' => 'Restaurant',
			'appetizer' => $this->menu->getDataByIdRestoAndCategory($id, 'appetizer'),
			'maincourse' => $this->menu->getDataByIdRestoAndCategory($id, 'maincourse'),
			'dessert' => $this->menu->getDataByIdRestoAndCategory($id, 'dessert'),
		];

		return view('landing/home', $data);
	}
	function pesan(){
		return view('landing/pesan');
	}
	function reservasi(){
		return view('landing/reservasi');
	}
	function konfreservasi(){
		return view('landing/konfreservasi');
	}
	function konfpesan(){
		return view('landing/konfpesan');
	}

	// function whysimponi(){
	//     $data = [
	//         'title' => 'Kenapa milih simponi. ?'
 //        ];
	//     return view('landing/whysimponi', $data);
 //    }
 //    function kontak(){
 //    	$data = [
 //    		'title' => 'Kontak Kami'
 //    	];
 //    	return view('landing/kontakkami', $data);
 //    }
 //    function blog(){
 //    	$data = [
 //    		'title' => 'blog'
 //    	];
 //    	return view('landing/blog', $data);
 //    }
 //    function edukasi(){
 //    	$data = [
 //    		'title' => 'edukasi'	
 //    	];
 //    	return view('landing/edukasi', $data);
 //    }
 //    function marketplace(){
 //    	$data = [
 //    		'tittle' => 'marketplace'
 //    	];
 //    	return view('landing/marketplace',$data);
 //    }



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
				Session::sess('login', true);
				redirect('control-panel');
			}else{
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
}