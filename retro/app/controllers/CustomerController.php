<?php
class CustomerController{
	private $Customer;
	function __construct(){
		checkIfNotLogin();
		$this->Customer = model('customer');
	}

	public function index(){
		$tabel = new Table([
			'query' => [
				'sql' => 'SELECT * FROM tb_customer'
			]
		]);
		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
		->addRow('Username','username')
		// ->addRow('Password','password')
		->addRow('No Telepon','notlp_customer')
		->addRow('Alamat','alamat_customer')
		->addRow('Status','status')
		->addRow('Aksi',function($data){
			 return '<a href="'.base_url('customer/edit/'.$data['id_customer']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
			'username',
			// 'password',
			'notlp_customer',
			'alamat_customer',
			'status'
		]);
		$data = [
				'title' => 'Customer',
				'tabel' => $tabel->run()
		];

		return view('admin/customer/index',$data);
	}
	function add(){
        $data = [
            'title' => 'Tambah Customer'
        ];

        return view('admin/customer/add', $data);
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
            $this->Customer->tambah();

            redirect('control-panel/customer/add');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/customer/add');
        }
    }

    function edit($id_customer){
        $customer = $this->customer->getById($id_customer);

        if($customer === false){
            abort(404);
        }

        $data = [
            'title' => 'Edit Customer '.$customer->username,
            'item'  => $customer
        ];

        return view('admin/customer/edit', $data);
    }

    function destroy(){
        $config = [
            'id_customer' => [
                'required' => true
            ]
        ];

        $valid = new Validation($config);

        if($valid->run()){
            $this->customer->hapus();

            redirect('control-panel/customer');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/customer');
        }
    }

	
	
}
?>