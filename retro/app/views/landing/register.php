<?php view('partial/header', $data) ?>
<div class="main-container">
  <center>
  <h3>Register</h3>
</center>

<form action="" method="POST">
  <div class="container" style="width: 30%;">
    <?php echo Session::flash('error'); ?>
                        <form action="<?php echo base_url('customer/create') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo old('username') ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" value="<?php echo old('password') ?>">
                            </div>
                            <div class="form-group">
                                <label>No Telepon </label>
                                <input type="text" name="notlp_customer" class="form-control" value="<?php echo old('notlp_customer') ?>">
                            </div>
                             <div class="form-group">
                                <label>Alamat </label>
                                <input type="text" name="alamat_customer" class="form-control" value="<?php echo old('alamat_customer') ?>">
                            </div>
                             <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control" value="<?php echo old('status') ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                            <center>
                              <div class="masuk">Punya akun? <a href="login.php">Masuk</a></div>
                            </center>
  </div>
</form>
</div>
<?php view('admin/partial/footer', $data) ?>
<script>
  $(document).ready(function(){
    $('#inputFoto').change(function(){
      var foto  = $(this)[0].files[0],
        label = $('#labelFoto'),
        nama  = $('#namaFoto');

      if(typeof foto != 'undefined'){
        if(foto.size > 0){
          label.text('Ganti foto');
          label.removeClass('btn-info');
          label.addClass('btn-warning');
          nama.text(foto.name);
          $('.text-foto').show();
        }
      }else{
        label.text('Tambahkan foto');
        label.addClass('btn-info');
        label.removeClass('btn-warning');
        nama.text('');
        $('.text-foto').hide();
      }
    })
  });
</script>


<?php view('partial/footer') ?>

        