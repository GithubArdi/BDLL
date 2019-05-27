<?php

class Mitra{
    public function tambah(){
        try{
            DB::connection()->beginTransaction();
            $username = Input::post('username');
            $password = Input::post('password');
            $nama_mitra = Input::post('nama_mitra');
            $no_telp = Input::post('no_telp');
            $status = Input::post('status');

            $sql = "INSERT INTO tb_mitraresto(username, password, nama_mitra, no_telp, status) VALUES(?, ?, ?, ?, ?)";

            $prep = DB::connection()->prepare($sql);
            $prep->execute([$username, $password, $nama_mitra, $no_telp, $status]);


            if($prep->rowCount()){
                msg('Data berhasil dimasukkan', 'info');
            }else{
                msg('Data gagal dimasukkan', 'danger');
            }

            DB::connection()->commit();
        }catch (PDOException $e){
            DB::connection()->rollBack();
            msg('Kesalahan : '.$e->getMessage(), 'danger');
            redirect('control-panel/mitra/add');
        }
    }
        function getById($id){
        try {
            $sql = "SELECT 
                    * 
                    FROM 
                    menu
                    WHERE id_owner = ?";
            $prep = DB::connection()->prepare($sql);
            $prep->execute([$id]);

            if($prep->rowCount()){
                return $prep->fetch(PDO::FETCH_OBJ);
            }

            return false;

        } catch (PDOException $e) {
            return false;
        }
    }
}