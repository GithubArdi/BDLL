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
            Paket
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('control-panel/paket') ?>"><i class="fa fa-users"></i> Paket</a></li>
            <li class="active">Tambah</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        <h1 class="box-title">Tambah</h1>
                    </div>
                    <div class="box-body">
                        <?php echo Session::flash('error'); ?>
                        <form action="<?php echo base_url('control-panel/paket/create') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Id Paket</label>
                                <input type="text" name="id_paket" class="form-control" value="<?php echo old('id_paket') ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Paket</label>
                                <input type="text" name="nama_paket" class="form-control" value="<?php echo old('nama_paket') ?>">
                            </div>
                            <div class="form-group">
                                <label>Harga Paket</label>
                                <input type="text" name="harga_paket" class="form-control" value="<?php echo old('harga_paket') ?>">
                            </div>
                        <!--     <div class="form-group">
                                <label>Gambar</label>
                                <input type="text" name="gambar_paket" class="form-control" value="<?php echo old('gambar_paket') ?>">
                            </div> -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah</button>
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
