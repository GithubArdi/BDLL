<?php
class PaketController{
	private $Paket;
	function __construct(){
		checkIfNotLogin();
		$this->Paket = model('paket');
	}
	public function index(){
		$tabel = new Table([
			'query' => [
				'sql' => 'SELECT * FROM tb_paket'
			]
		]);
		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
		->addRow('Id Paket','id_paket')
		->addRow('Nama Paket','nama_paket')
		->addRow('Harga Paket',function($d){
            return 'Rp '.$d['harga_paket'];
        })
		// ->addRow('Gambar Paket','gambar_paket')
		->addRow('Aksi',function($data){
			 return '<a href="'.base_url('paket/edit/'.$data['id_paket']).'" class="btn btn-warning btn-xs">Edit</a>';
             return '<a href="'.base_url('paket/edit/'.$data['id_paket']).'" class="btn btn-warning btn-xs">Hapus</a>';
		})
		->search([
			'id_paket',
			'nama_paket',
			'harga_paket'
			// 'gambar_paket'
		]);
		$data = [
				'title' => 'Paket Restaurant',
				'tabel' => $tabel->run()
		];

		return view('admin/paket/index',$data);
	}
	function add(){
        $data = [
            'title' => 'Tambah Paket'
        ];

        return view('admin/paket/add', $data);
    }

    function create(){
         $config = [

            'id_paket' => [
                'required' => true
            ],
            'nama_paket' => [
                'required' => true
            ],
            'harga_paket' => [
                'required' => true
            ],
            // 'gambar_paket' => [
            //     'required' => true
            // ],
        ];

        $valid = new Validation($config);

        if($valid->run()){
            $this->Paket->tambah();

            redirect('control-panel/paket/add');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/paket/add');
        }
    }

    function edit($id_paket){
        $paket = $this->paket->getById($id_paket);

        if($paket === false){
            abort(404);
        }

        $data = [
            'title' => 'Edit Paket '.$paket->nama_paket,
            'item'  => $paket
        ];

        return view('admin/paket/edit', $data);
    }

    function destroy(){
        $config = [
            'id_paket' => [
                'required' => true
            ]
        ];

        $valid = new Validation($config);

        if($valid->run()){
            $this->paket->hapus();

            redirect('control-panel/paket');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/paket');
        }
    }
	
	
}
?>