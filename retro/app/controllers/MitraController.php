<?php
class MitraController{
	private $Mitra;
	function __construct(){
		checkIfNotLogin();
		$this->Mitra = model('mitra');
	}

	public function index(){
		$tabel = new Table([
			'query' => [
				'sql' => 'SELECT * FROM tb_mitraresto'
			]
		]);

		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
		->addRow('Username','username')
		// ->addRow('Password','password')
		->addRow('Nama Mitra','nama_mitra')
		->addRow('No Telepon','no_telp')
		// ->addRow('Status','status')
		->addRow('Aksi',function($data){
			 return '<a href="'.base_url('mitra/edit/'.$data['id_owner']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
			'username',
			// 'password',
			'nama_mitra',
			'no_telp',
			// 'status'
		]);
		$data = [
				'title' => 'Mitra',
				'tabel' => $tabel->run()
		];

		return view('admin/mitra/index',$data);
	}
	function add(){
        $data = [
            'title' => 'Tambah Mitra'
        ];

        return view('admin/mitra/add', $data);
    }

    function create(){
         $config = [
            'username' => [
                'required' => true
            ],
            // 'password' => [
            //     'required' => true
            // ],
            'nama_mitra' => [
                'required' => true
            ],
             'no_telp' => [
                'required' => true
            ],
            //  'status' => [
            //     'required' => true
            // ],
        ];

        $valid = new Validation($config);

        if($valid->run()){
            $this->Mitra->tambah();

            redirect('control-panel/mitra/add');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/mitra/add');
        }
    }

    function edit($id_owner){
        $mitra = $this->mitra->getById($id_owner);

        if($mitra === false){
            abort(404);
        }

        $data = [
            'title' => 'Edit Mitra '.$mitra->username,
            'item'  => $mitra
        ];

        return view('admin/customer/edit', $data);
    }

    function destroy(){
        $config = [
            'id_owner' => [
                'required' => true
            ]
        ];

        $valid = new Validation($config);

        if($valid->run()){
            $this->customer->hapus();

            redirect('control-panel/mitra');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/mitra');
        }
    }
	
	
	
}
?>