<?php view('partial/header', $data) ?>
		<div class="main-container">
		<section class="cover fullscreen image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="image" class="background-image" src="<?php echo base_url($item->gambar_resto) ?>">
		        </div>
		        <div class="container v-align-transform">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h1 class="large uppercase mb16">WELCOME TO<br><?php echo $item->nama_restoran  ?></h1>
		                    <h5 class="uppercase mb0">RESERVATION OF RESTAURANT</h5>
		                </div>
		            </div> 
		        </div>
		        <div class="align-bottom relative-xs text-center">
		            <a class="btn btn-filled btn-lg mb32 mt-xs-40" href="<?php echo base_url('pesan') ?>">ORDER</a><a class="btn btn-filled btn-lg mb32 mt-xs-40" href="<?php echo base_url('konfreservasi') ?>">RESERVE</a>
		        </div>
		    </section>
		    <section>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-6 col-sm-offset-1">
		                    <div class="feature bordered">
		                        <h1 class="large uppercase mb64 mb-xs-24">SAMICOS<br></h1>
		                        <p class="mb80 mb-xs-24">Samicos Restaurant Thai &amp; International Halal Food @ MBK center Bangkok Thailand Yana Restaurant offers Halal food both Thai and International dishes which have very good taste, quality ingredients. Cleanliness and satisfaction guaranteed.
		                        </p>
		                        <a class="btn btn-lg btn-filled inner-link" href="#book-table">OUR STORY</a>
		                    </div>
		                </div>
		                <div class="col-sm-5">
		                    <img class="mt80 mt-xs-0 mb24" alt="Pic" src="<?php echo base_url('img/resto5.jpg') ?>">
		                    <img class="col-md-pull-4 relative" alt="Pic" src="<?php echo base_url('img/resto6.jpg') ?>">
		                </div>
		            </div>
		            
		        </div>
		        
		    </section>
		    <section class="page-title page-title-3 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="<?php echo base_url('img/bg.jpg') ?>">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h3 class="uppercase mb0">Appetizer</h3>
		                </div>
		            </div> 
		        </div>
		    </section><section class="projects pt48">
		        <div class="container">
		            <div class="row pb24">
		                <div class="col-sm-12 text-center">
		                    <ul class="filters mb0">
		                    </ul>
		                </div>
		            </div>
		            
		            <div class="row masonry-loader">
		                <div class="col-sm-12 text-center">
		                    <div class="spinner"></div>
		                </div>
		            </div>
		            <div class="row masonry masonryFlyIn">
		            	<?php foreach ($appetizer as $item) { ?>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url($item->id_menu)?>">
		                            <img alt="Pic" src="<?php echo base_url($item->gambar_menu) ?>">
		                            <div class="title">
		                                <h5 class="uppercase mb0"><?php echo $item->nama_menu ?></h5>
		                                <span>Rp.<?php echo $item->harga_menu ?></span>
		                                <br>
		                               	<a href="<?php echo base_url("pesan/menu/".$item->id_menu)?>"><button class="ordbtt" type="button">Order</button></a>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		                <?php } ?>
		    </section>
		    <section class="page-title page-title-3 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="<?php echo base_url('img/bg.jpg') ?>">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h3 class="uppercase mb0">MAIN COURSE</h3>
		                </div>
		            </div>
		            
		        </div>
		        
		        
		    </section><section class="projects pt48">
		        <div class="container">
		            <div class="row pb24">
		                <div class="col-sm-12 text-center">
		                    <ul class="filters mb0">
		                    </ul>
		                </div>
		            </div>
		            <div class="row masonry-loader">
		                <div class="col-sm-12 text-center">
		                    <div class="spinner"></div>
		                </div>
		            </div>
		            <div class="row masonry masonryFlyIn">
		                <?php foreach ($maincourse as $item) { ?>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url("pesan/menu/".$item->id_menu)?>">
		                            <img alt="Pic" src="<?php echo base_url($item->gambar_menu) ?>">
		                            <div class="title">
		                                <h5 class="uppercase mb0"><?php echo $item->nama_menu ?></h5>
		                                <span>Rp.<?php echo $item->harga_menu ?></span>
		                                <br>
		                               	<a href="<?php echo base_url("pesan/menu/".$item->id_menu)?>"><button class="ordbtt" type="button">Order</button></a>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		                <?php } ?>
		            </div>
		            
		        </div>
		        
		    </section>
		    <section class="page-title page-title-3 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="<?php echo base_url('img/bg.jpg') ?>">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h3 class="uppercase mb0">DESSERT</h3>
		                </div>
		            </div>	            
		        </div>   
		    </section><section class="projects pt48">
		        <div class="container">
		            <div class="row pb24">
		                <div class="col-sm-12 text-center">
		                    <ul class="filters mb0">
		                    </ul>
		                </div>
		            </div>
		            
		            <div class="row masonry-loader">
		                <div class="col-sm-12 text-center">
		                    <div class="spinner"></div>
		                </div>
		            </div>
		            <div class="row masonry masonryFlyIn">
		                <?php foreach ($dessert as $item) { ?>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url($item->id_menu)?>">
		                            <img alt="Pic" src="<?php echo base_url($item->gambar_menu) ?>">
		                            <div class="title">
		                                <h5 class="uppercase mb0"><?php echo $item->nama_menu ?></h5>
		                                <span>Rp.<?php echo $item->harga_menu ?></span>
		                                <br>
		                               	<a href="<?php echo base_url("pesan/menu/".$item->id_menu)?>"><button class="ordbtt" type="button">Order</button></a>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		                <?php } ?>
		            </div>
		            
		        </div>
		        
		    </section>
		   <?php view('partial/footer') ?>
				