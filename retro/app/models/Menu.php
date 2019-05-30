<?php

class Menu{
    public function tambah(){
        try{
            DB::connection()->beginTransaction();
            $nama_menu = Input::post('nama_menu');
            $jenis_menu = Input::post('jenis_menu');
            $harga_menu = Input::post('harga_menu');
            $gambar_menu = Input::file('foto')->upload('public/uploads');

            if($gambar_menu == false){
                msg('Gambar error', 'warning');
                return;
            }
            $id_resto = Input::post('id_resto');

            $sql = "INSERT INTO tb_menu(nama_menu, jenis_menu, harga_menu, id_resto, gambar_menu) VALUES(?, ?, ?, ?, ?)";

            $prep = DB::connection()->prepare($sql);
            $prep->execute([$nama_menu, $jenis_menu, $harga_menu, $id_resto, str_replace('public/', '', $gambar_menu)]);


            if($prep->rowCount()){
                msg('Data berhasil dimasukkan', 'info');
            }else{
                msg('Data gagal dimasukkan', 'danger');
            }

            DB::connection()->commit();
        }catch (PDOException $e){
            DB::connection()->rollBack();
            msg('Kesalahan : '.$e->getMessage(), 'danger');
            redirect('control-panel/menu/add');
        }
    }
        function getById($id){
        try {
            $sql = "SELECT 
                    * 
                    FROM 
                    tb_menu
                    WHERE id_menu = ?";
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
    public function getData(){
        try {
            $sql = "SELECT * FROM tb_menu";
            $prep = DB::connection()->prepare($sql);
            $prep->execute();

            if($prep->rowCount()){
                return $prep->fetchAll(PDO::FETCH_OBJ);
            }

            return false;

        } catch (PDOException $e) {
            return false;
        }
    }

    public function getDataByIdResto($id){
        try {
            $sql = "SELECT * FROM tb_menu WHERE id_resto = ?";
            $prep = DB::connection()->prepare($sql);
            $prep->execute([$id]);

            if($prep->rowCount()){
                return $prep->fetchAll(PDO::FETCH_OBJ);
            }

            return false;

        } catch (PDOException $e) {
            return false;
        }
    }

    public function getDataByIdRestoAndCategory($id, $jenis_menu){
        try {
            $sql = "SELECT * FROM tb_menu WHERE id_resto = ? AND jenis_menu = ?";
            $prep = DB::connection()->prepare($sql);
            $prep->execute([$id, $jenis_menu]);

            if($prep->rowCount()){
                return $prep->fetchAll(PDO::FETCH_OBJ);
            }

            return false;

        } catch (PDOException $e) {
            return false;
        }
    }
    
}