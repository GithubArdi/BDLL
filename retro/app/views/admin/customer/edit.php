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
            Customers
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('control-panel/customer') ?>"><i class="fa fa-users"></i> Customers</a></li>
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
                        <form action="<?php echo base_url('control-panel/customer/create') ?>" method="post" enctype="multipart/form-data">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- disini taruh kontennya anjing  -->
    </section>

</script>
