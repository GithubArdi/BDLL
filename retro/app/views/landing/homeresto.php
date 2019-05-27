<?php view('partial/header', $data) ?>
		<div class="main-container">
		<section class="cover fullscreen image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="image" class="background-image" src="img/resto/<?php echo $data2['gambar_resto']; ?>">
		        </div>
		        <div class="container v-align-transform">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h1 class="large uppercase mb16">WELCOME TO<br> <?php echo $data2['nama_restoran']; ?>RESTAURANT</h1>
		                    <h5 class="uppercase mb0">RESERVATION OF RESTAURANT</h5>
		                </div>
		            </div> 
		        </div>
		        <div class="align-bottom relative-xs text-center">
		            <a class="btn btn-filled btn-lg mb32 mt-xs-40" href="pesan.php">ORDER</a><a class="btn btn-filled btn-lg mb32 mt-xs-40" href="reservasi.php">RESERVE</a>
		        </div>
		    </section>
		    <section>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-6 col-sm-offset-1">
		                    <div class="feature bordered">
		                        <h1 class="large uppercase mb64 mb-xs-24"><?php echo $data2['nama_restoran']; ?><br></h1>
		                        <p class="mb80 mb-xs-24">
		                        	<?php echo $data2['deskripsi']; ?>
		                        </p>
		                        <a class="btn btn-lg btn-filled inner-link" href="#book-table">OUR STORY</a>
		                    </div>
		                </div>
		                <div class="col-sm-5">
		                    <img class="mt80 mt-xs-0 mb24" alt="Pic" src="img/resto/<?php echo $data2['gambar_resto']; ?>">
		                    <img class="col-md-pull-4 relative" alt="Pic" src="img/resto/<?php echo $data2['gambar_resto']; ?>">
		                </div>
		            </div>
		            
		        </div>
		        
		    </section>
		    <section class="page-title page-title-3 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="img/bg.jpg">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h3 class="uppercase mb0">Main Course</h3>
		                </div>
		            </div> 
		        </div>
		    </section>
		    <section class="projects pt48">
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
		            	
		            	<?php while ($data3 = mysqli_fetch_assoc($query)) { ?>
		            	<?php if($data3['jenis_menu']=="maincourse") { ?>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="#">
		                            <img alt="Pic" src="img/Menu/<?php echo $data3['gambar_menu']; ?>">
		                            <div class="title">
		                                <h5 class="uppercase mb0"><?php echo $data3['nama_menu']; ?></h5>
		                                <span>Rp. <?php echo $data3['harga_menu']; ?>,-</span>
		                                <br>
		                               	<a href="pesan.php"><button class="ordbtt" type="button">Order</button></a>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		         		<?php } ?>
		                <?php } ?>
		            </div>
		            
		        </div>
		        
		    </section>
		        </section>
		    <section class="page-title page-title-3 image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="Background Image" class="background-image" src="img/bg.jpg">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h3 class="uppercase mb0">Appetizer</h3>
		                </div>
		            </div> 
		        </div>
		    </section>
		    <section class="projects pt48">
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
		            	
		            	<!-- <?php while ($data3 = mysqli_fetch_assoc($query)) { ?>
		            	<?php if($data3['jenis_menu']=="appetizer") { ?> -->
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="#">
		                            <img alt="Pic" src="img/Menu/ap1.jpg<!-- <?php echo $data3['gambar_menu']; ?> -->">
		                            <div class="title">
		                                <h5 class="uppercase mb0">Baru resto<!-- <?php echo $data3['nama_menu']; ?> --></h5>
		                                <span>Rp. 15000<!-- <?php echo $data3['harga_menu']; ?> -->,-</span>
		                                <br>
		                               	<a href="pesan.php"><button class="ordbtt" type="button">Order</button></a>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		         		<!-- <?php } ?>
		                <?php } ?> -->
		            </div>
		            
		        </div>
		        
		    </section>
<?php view('partial/footer') ?>
				