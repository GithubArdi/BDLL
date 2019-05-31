<?php
class Customer{
    public function tambah(){
        try{
            DB::connection()->beginTransaction();
            $username = Input::post('username');
            $password = Input::post('password');
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
            redirect('control-panel/customer/add');
        }
    }
    function login($user, $pass){
        try {
            $sql = "SELECT * FROM tb_customer WHERE username = ? AND password = ?";
            $prep = DB::connection()->prepare($sql);
            $prep->execute([$user, $pass]);
            return $prep->rowCount();
        } catch (PDOException $e) {
            msg('Kesalahan : '.$e->getMessage(), 'danger');
            redirect('login');
        }
    }
}