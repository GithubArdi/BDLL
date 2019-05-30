<?php 
	class Pesan
	{
		function getData(){
            try {
            	$id_customer = Session::sess('id_customer');
                $sql = "SELECT * FROM keranjang INNER JOIN tb_menu ON keranjang.id_menu = tb_menu.id_menu WHERE keranjang.id_customer = ?";
                $prep = DB::connection()->prepare($sql);
                $prep->execute([$id_customer]);
                if($prep->rowCount()){
                    return $prep->fetchAll(PDO::FETCH_OBJ);
                }
                return false;
            } catch (PDOException $e) {
                return false;
            }
        }
	}
    // function hapus(){
    //     try{
    //         DB::connection()->beginTransaction();
    //         $id_customer = Session::sess('id_customer');   

    //         $id = Input::post('id');

    //         $sql = "DELETE FROM keranjang WHERE id_menu = ?";

    //         $prep = DB::connection()->prepare($sql);
    //         $prep->execute([$id]);

    //         if($prep->rowCount()){
    //             msg('Data berhasil dihapus', 'info');
    //         }else{
    //             msg('Data gagal dihapus', 'danger');
    //         }

    //         DB::connection()->commit();
    //     }catch (PDOException $e){
    //         DB::connection()->rollBack();
    //         msg('Kesalahan : '.$e->getMessage(), 'danger');
    //         redirect('Pesan');
    //     }
    // }
 ?>