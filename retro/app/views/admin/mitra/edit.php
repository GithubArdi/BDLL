<?php view('admin/partial/header', $data) ?>
    <style>
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .text-foto{
            display: none;
        }

    </style>
    <section class="content-header">
        <h1>
            Mitra
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('control-panel/mitra') ?>"><i class="fa fa-users"></i> Mitra</a></li>
            <li class="active">Edit</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title">Edit</h1>
                    </div>
                    <div class="box-body">
                        <?php echo Session::flash('error'); ?>
                        <form action="<?php echo base_url('control-panel/mitra/create') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Username </label>
                                <input type="text" name="username" class="form-control" value="<?php echo old('username') ?>">
                            </div>
                            <div class="form-group">
                                <label>Password </label>
                                <input type="text" name="password" class="form-control" value="<?php echo old('password') ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Mitra</label>
                                <input type="text" name="nama_mitra" class="form-control" value="<?php echo old('nama _mitra') ?>">
                            </div>
                            <div class="form-group">
                                <label>No Telepon</label>
                                <input type="text" name="no_telp" class="form-control" value="<?php echo old('no_telp') ?>">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control" value="<?php echo old('status') ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- disini taruh kontennya anjing  -->
    </section>
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
