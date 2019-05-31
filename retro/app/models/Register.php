<?php
class Register{
    public function tambah(){
        try{
            DB::connection()->beginTransaction();
            $username = Input::post('username');
            $password = md5(Input::post('password'));
            $notlp_customer = Input::post('notlp_customer');
            $alamat_customer = Input::post('alamat_customer');
            $status = Input::post('status');

            $sql = "INSERT INTO tb_customer(username, password, notlp_customer, alamat_customer, status) VALUES(?, ?, ?, ?, ?)";
            $prep = DB::connection()->prepare($sql);
            $prep->execute([$username, $password, $notlp_customer, $alamat_customer, $status]);


            if($prep->rowCount()){
                msg('Data berhasil dimasukkan', 'info');
            }else{
                msg('Data gagal dimasukkan', 'danger');
            }

            DB::connection()->commit();
        }catch (PDOException $e){
            DB::connection()->rollBack();
            msg('Kesalahan : '.$e->getMessage(), 'danger');
            redirect('views/register');
        }
    }
}