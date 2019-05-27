<?php
class RegisterController{
	private $register;
	function __construct(){
		checkIfNotLogin();
		$this->register = model('register');
	}
	function add(){
        $data = [
            'title' => 'Tambah Customer'
        ];
        return view('views/register', $data);
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

            redirect('views/register');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('views/register');
        }
    }