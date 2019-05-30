<?php

class Restaurant{
    public function tambah(){
        try{
            DB::connection()->beginTransaction();
            $id_resto = Input::post('id_resto');
            $nama_restoran = Input::post('nama_restoran');
            $jenis = Input::post('jenis');
            $alamat_resto = Input::post('alamat_resto');
            $jadwal_buka = Input::post('jadwal_buka');
            $jadwal_tutup = Input::post('jadwal_tutup');
            $gambar_resto = Input::file('foto')->upload('public/uploads');
            if($gambar_resto == false){
                msg('Gambar error', 'warning');
                return;
            }
            $deskripsi = Input::post('deskripsi');
            $id_owner = Input::post('id_owner');
            

            $sql = "INSERT INTO tb_resto(id_resto, nama_restoran, jenis, alamat_resto, jadwal_buka, jadwal_tutup, gambar_resto, deskripsi, id_owner) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $prep = DB::connection()->prepare($sql);
            $prep->execute([$id_resto, $nama_restoran, $jenis, $alamat_resto, $jadwal_buka, $jadwal_tutup, str_replace('public/', '', $gambar_resto), $deskripsi, $id_owner]);

            if($prep->rowCount()){
                msg('Data berhasil dimasukkan', 'info');
            }else{
                msg('Data gagal dimasukkan', 'danger');
            }

            DB::connection()->commit();
        }catch (PDOException $e){
            DB::connection()->rollBack();
            msg('Kesalahan : '.$e->getMessage(), 'danger');
            redirect('control-panel/restaurant/add');
        }
    }
    public function getData(){
        try {
            $sql = "SELECT * FROM tb_resto";
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
    public function getItem($id){
        try {
            $sql = "SELECT * FROM tb_resto WHERE id_resto = ?";
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
