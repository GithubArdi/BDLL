<?php
class RegisterController{
	private $register;
	function __construct(){
		$this->register = model('register');
	}

	function add(){
        $data = [
            'title' => 'Register'
        ];
        return view('landing/register', $data);
    }

    function create(){
         $config = [
            'username' => [
                'required' => true
            ],
            'password' => [
                'required' => true
            ],
            'notlp_customer' => [
                'required' => true
            ],
             'alamat_customer' => [
                'required' => true
            ],
             'status' => [
                'required' => true
            ],
        ];

        $valid = new Validation($config);

        if($valid->run()){
            $this->register->tambah();

            redirect('register');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('register');
        }
    }
}