<?php 
	class Keranjang
	{
		
		function __construct()
		{

		}
		function tambah($id_menu)
		{
			try{
            DB::connection()->beginTransaction();
            $id_customer = Session::sess('id_customer'); 	

            $jumlah = 1;
            $harga = "SELECT * FROM tb_menu WHERE id_menu = ?";

            $prep = DB::connection()->prepare($harga);
            $prep->execute([$id_menu]);

    		if(!$prep->rowCount()){
    			return;
    		}

            $data = $prep->fetch(PDO::FETCH_OBJ);

            $sql1 = "SELECT * FROM keranjang WHERE id_menu = ? AND id_customer = ?";

            $prep = DB::connection()->prepare($sql1);
            $prep->execute([$id_menu, $id_customer]);

    		if(!$prep->rowCount()){
    			$sql = "INSERT INTO keranjang(id_menu, id_customer, jumlah, harga) VALUES(?, ?, ?, ?)";

		        $prep = DB::connection()->prepare($sql);
		        $prep->execute([$id_menu, $id_customer, $jumlah, $data->harga_menu]);
    		}else{
    			$sql = "UPDATE keranjang SET jumlah = jumlah + 1 WHERE id_menu = ? AND id_customer = ?";

		        $prep = DB::connection()->prepare($sql);
		        $prep->execute([$id_menu, $id_customer]);
    		}

            

            DB::connection()->commit();
        }catch (PDOException $e){
            DB::connection()->rollBack();
            msg('Kesalahan : '.$e->getMessage(), 'danger');
            redirect('control-panel/mitra/add');
        }
		}
	}