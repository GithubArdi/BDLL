<section class="sidebar">
  	<ul class="sidebar-menu" data-widget="tree">
		<li class="header">HEADER</li>
        <?php $url = 'control-panel/' ?>
		<li <?php echo (Input::url(0) === 'control-panel' && Input::url(1) === null) ? 'class="active"' : '' ?>><a href="<?php echo base_url($url);  ?>"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
		<li class="treeview <?php echo (Input::url(0) === 'control-panel' && (Input::url(1) === 'edukasi' || Input::url(1) === 'pengguna' || Input::url(1) === 'produk')) ? 'active menu-open' : '' ?>">
			<a href="#">
				<i class="fa fa-database"></i>
				<span>Master</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
            	<li <?php echo (Input::url(0) === 'control-panel' && Input::url(1) === '#') ? 'class="active"' : '' ?>><a href="<?php echo base_url($url.'#') ?>"><i class="fa fa-circle-o"></i> <span>Slider</span></a></li>
		        <li <?php echo (Input::url(0) === 'control-panel' && Input::url(1) === '#') ? 'class="active"' : '' ?>><a href="<?php echo base_url($url.'#') ?>"><i class="fa fa-circle-o"></i> <span>Kategori</span></a></li>
                <li <?php echo (Input::url(0) === 'control-panel' && Input::url(1) === 'paket') ? 'class="active"' : '' ?>><a href="<?php echo base_url($url.'paket') ?>"><i class="fa fa-circle-o"></i> <span>Paket</span></a></li>
                <li <?php echo (Input::url(0) === 'control-panel' && Input::url(1) === 'menu') ? 'class="active"' : '' ?>><a href="<?php echo base_url($url.'menu') ?>"><i class="fa fa-circle-o"></i> <span>Menu</span></a></li>
                <li <?php echo (Input::url(0) === 'control-panel' && Input::url(1) === 'restaurant') ? 'class="active"' : '' ?>><a href="<?php echo base_url($url.'restaurant') ?>"><i class="fa fa-circle-o"></i> <span>Restaurant</span></a></li>
               
         	</ul>
		</li>
        <li class="treeview <?php echo (Input::url(0) === 'control-panel' && (Input::url(1) === 'kategori-edukasi' || Input::url(1) === 'kategori-produk')) ? 'active menu-open' : '' ?>">
            <a href="#">
                <i class="fa fa-tags"></i>
                <span>Users</span>
                <span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
            </a>
            <ul class="treeview-menu">
                 <li <?php echo (Input::url(0) === 'control-panel' && Input::url(1) === 'customer') ? 'class="active"' : '' ?>><a href="<?php echo base_url($url.'customer') ?>"><i class="fa fa-circle-o"></i> <span>Customers</span></a></li>
                 <li <?php echo (Input::url(0) === 'control-panel' && Input::url(1) === 'mitra') ? 'class="active"' : '' ?>><a href="<?php echo base_url($url.'mitra') ?>"><i class="fa fa-circle-o"></i> <span>Mitra Resto</span></a></li>
            </ul>
        </li>
		
		

		<!-- <li class="treeview">
	  		<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
		  		</span>
	  		</a>
		  	<ul class="treeview-menu">
				<li><a href="#">Link in level 2</a></li>
				<li><a href="#">Link in level 2</a></li>
		  	</ul>
		</li> -->
  	</ul>
</section>