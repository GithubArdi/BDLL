<?php
class Paket{
    public function tambah(){
        try{
            DB::connection()->beginTransaction();
            $id_paket = Input::post('id_paket');
            $nama_paket = Input::post('nama_paket');
            $harga_paket = Input::post('harga_paket');
            // $gambar_paket = Input::post('gambar_paket');

            $sql = "INSERT INTO tb_paket(id_paket,nama_paket, harga_paket) VALUES(?, ?, ?)";

            $prep = DB::connection()->prepare($sql);
            $prep->execute([$id_paket, $nama_paket, $harga_paket]);


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
    public function hapus(){
        try{
            DB::connection()->beginTransaction();
            $id = Input::post('slug');
            $sql = "DELETE FROM paket WHERE id=?";
            $prep = DB::connection()->prepare($sql);
            $prep -> execute(['$id']);
            if($prep->rowCount()){
                msg('Data Berhasil Dihapus', 'info');
            }else{
                msg('Data Gagal Dihapus', 'danger');
            }
            DB::connection()->commit();
        }catch(PDOException $e){
            DB::connection()->rollBack();
            msg('Kesalahan : '.$e->getMessage(),'danger');
            redirect('control-panel/paket');
        }
    }
}