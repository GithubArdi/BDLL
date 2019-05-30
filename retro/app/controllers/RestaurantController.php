<?php
class RestaurantController{
	private $Restaurant;
	function __construct(){
		checkIfNotLogin();
		$this->Restaurant = model('restaurant');
	}
	public function index(){
		$tabel = new Table([
			'query' => [
			'sql' => 'SELECT * FROM tb_resto'
			]
		]);
		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
        ->addRow('Id Restaurant','id_resto')
		->addRow('Nama Restaurant','nama_restoran')
		->addRow('Jenis','jenis')
		->addRow('Alamat','alamat_resto')
		->addRow('Jadwal Buka','jadwal_buka')
		->addRow('Jadwal Tutup','jadwal_tutup')
		->addRow('Gambar',function($gambar){
            return '<img src="'.base_url($gambar['gambar_resto']).'" width="100"/>';
        })
		->addRow('Deskripsi','deskripsi')
        ->addRow('id_owner','id_owner')
		->addRow('Aksi',function($data){
			 return '<a href="'.base_url('restaurant/edit/'.$data['id_resto']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
            'id_resto',
			'nama_restoran',
			'jenis',
			'alamat_resto',
			'jadwal_buka',
			'jadwal_tutup',
			'gambar_resto',
			'deskripsi',
            'id_owner'
		]);
		$data = [
				'title' => 'Restaurant',
				'tabel' => $tabel->run()
		];

		return view('admin/restaurant/index',$data);
	}
	function add(){
        $data = [
            'title' => 'Tambah Restaurant'
        ];

        return view('admin/restaurant/add', $data);
    }

    function create(){
         $config = [
            'id_resto' => [
                'required' => true
            ],
            'nama_restoran' => [
                'required' => true
            ],
            'jenis' => [
                'required' => true
            ],
            'alamat_resto' => [
                'required' => true
            ],
             'jadwal_buka' => [
                'required' => true
            ],
            'jadwal_tutup' => [
                'required' => true
            ],
            'deskripsi' => [
                'required' => true
            ],
            'id_owner' => [
                'required' => true
            ],
        ];
        $valid = new Validation($config);
        if($valid->run()){
            $this->Restaurant->tambah();

            redirect('control-panel/restaurant/add');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/restaurant/add');
        }
    }
    function edit($id_resto){
        $restaurant = $this->restaurant->getById($id_resto);

        if($restaurant === false){
            abort(404);
        }

        $data = [
            'title' => 'Edit Restaurant '.$restaurant->restaurant,
            'item'  => $restaurant
        ];

        return view('admin/restaurant/edit', $data);
    }

    function destroy(){
        $config = [
            'id_resto' => [
                'required' => true
            ]
        ];

        $valid = new Validation($config);

        if($valid->run()){
            $this->restaurant->hapus();

            redirect('control-panel/restaurant');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/restaurant');
        }
    }
	
	
}

?>