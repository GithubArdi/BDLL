<?php view('partial/header', $data) ?>
<div class="main-container">
		<section class="cover fullscreen image-slider slider-arrow-controls controls-inside parallax">
		        <ul class="slides">
		            <li class="overlay image-bg">
		                <div class="background-image-holder">
		                    <img alt="image" class="background-image" src="img/background5.jpg">
		                </div>
		                <div class="container v-align-transform">
		                    <div class="row">
		                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
		                            <img alt="Logo" class="image-small mb8" src="img/logo2.png">
		                            <h6 class="uppercase mb32">RESERVATION OF RESTAURANT</h6>
		                            <p class="text-justify mb0"> </p>
		                        </div>
		                    </div>
		                    
		                </div>
		                
		            </li><li class="overlay image-bg">
		                <div class="background-image-holder">
		                    <img alt="image" class="background-image" src="img/background4.jpg">
		                </div>
		                <div class="container v-align-transform">
		                    <div class="row">
		                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
		                            <img alt="Logo" class="image-small mb8" src="img/logo2.png">
		                            <h6 class="uppercase mb32">RESERVATION OF RESTAURANT</h6>
		                            <p class="text-justify mb0"> </p>
		                        </div>
		                    </div>
		                    
		                </div>
		                
		            </li><li class="overlay image-bg">
		                <div class="background-image-holder">
		                    <img alt="image" class="background-image" src="img/background3.jpg">
		                </div>
		                <div class="container v-align-transform">
		                    <div class="row">
		                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
		                            <img alt="Logo" class="image-small mb8" src="img/logo2.png">
		                            <h6 class="uppercase mb32">RESERVATION OF RESTAURANT</h6>
		                            <p class="text-justify mb0"> </p>
		                        </div>
		                    </div>
		                    
		                </div>
		                
		            </li><li class="overlay image-bg">
		                <div class="background-image-holder">
		                    <img alt="image" class="background-image" src="img/background.jpg">
		                </div>
		                <div class="container v-align-transform">
		                    <div class="row">
		                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
		                            <img alt="Logo" class="image-small mb8" src="img/logo2.png">
		                            <h6 class="uppercase mb32">RESERVATION OF RESTAURANT</h6>
		                            <p class="text-justify mb0"> </p>
		                        </div>
		                    </div>
		                    
		                </div>
		                
		            </li>
		        </ul>
		    </section><section>
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-6 col-sm-offset-1">
		                    <div class="feature bordered">
		                        <h1 class="large uppercase mb64 mb-xs-24">RETRO</h1>
		                        <p class="mb80 mb-xs-24">
		                            Retro (Reservation Of Restaurant) merupakan suatu aplikasi reservasi dan order menu berbasis web yang dapat mengatasi salah satu permasalahan dalam hal reservasi dimana konsumen harus melakukan reservasi secara langsung.</p>
		                        <a class="btn btn-lg btn-filled inner-link" href="#book-table">OUR STORY</a>
		                    </div>
		                </div>
		                <div class="col-sm-5">
		                    <img class="mt80 mt-xs-0 mb24" alt="Pic" src="img/reservasi3.jpg">
		                    <img class="col-md-pull-4 relative" alt="Pic" src="img/reservasi4.png">
		                </div>
		            </div>
		            
		        </div>
		        
		    </section><section class="bg-dark pt64 pb64">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h2 class="mb8">Discover Retro</h2>
		                    <p class="lead mb40 mb-xs-24">
		                        Reservation Of Restaurant</p>
		                    <a class="btn btn-filled btn-lg mb0" href="#purchase-template">Purchase by retro</a>
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
		            	<?php foreach ($restaurant as $item) { ?>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="<?php echo $item->jenis ?>">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url('restaurant/'.$item->id_resto) ?>">
		                            <img alt="Pic" src="<?php echo $item->gambar_resto ?>">
		                            <div class="title">
		                                <h5 class="uppercase mb0"><?php echo $item->nama_restoran ?></h5>
		                                <span><?php echo $item->jadwal_buka ?> - <?php echo $item->jadwal_tutup ?></span>
		                            </div>
		                        </a>
		                    </div>
		                </div>

		                <?php } ?>
		                <!-- <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Chinese">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url('home') ?>	">
		                            <img alt="Pic" src="img/chinese.jpg">
		                            <div class="title">
		                                <h5 class="uppercase mb0">FURAMA CHINESE FOOD</h5>
		                                <span>07.00 - 19.00</span>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Japanese">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url('home') ?>	">
		                            <img alt="Pic" src="img/japanese2.jpg">
		                            <div class="title">
		                                <h5 class="uppercase mb0">SUSHI KYUDEN</h5>
		                                <span>15.00 - 23.00</span>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Middle East">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url('home') ?>	">
		                            <img alt="Pic" src="img/middleeast2.jpg">
		                            <div class="title">
		                                <h5 class="uppercase mb0">TURKUAZ RESTAURANT</h5>
		                                <span>12.00 - 20.00</span>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Indonesian">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url('home') ?>	">
		                            <img alt="Pic" src="img/indonesia2.jpg">
		                            <div class="title">
		                                <h5 class="uppercase mb0">BABI GULING SELINGSING</h5>
		                                <span>15.00 - 23.00</span>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Japanese">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url('home') ?>	">
		                            <img alt="Pic" src="img/japanese.jpg">
		                            <div class="title">
		                                <h5 class="uppercase mb0">HAKATA IKKOUSHA</h5>
		                                <span>11.00 - 20.00</span>
		                            </div>
		                        </a>
		                    </div>
		                </div><div class="col-md-4 col-sm-6 masonry-item project" data-filter="Chinese">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url('home') ?>	">
		                            <img alt="Pic" src="img/chinese2.jpeg">
		                            <div class="title">
		                                <h5 class="uppercase mb0">HAPPY CHAPPY CHINESE</h5>
		                                <span>10.00 - 20.00</span>
		                            </div>
		                        </a>
		                    </div>
		                </div><div class="col-md-4 col-sm-6 masonry-item project" data-filter="Chinese">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url('home') ?>	">
		                            <img alt="Pic" src="img/chinese2.jpeg">
		                            <div class="title">
		                                <h5 class="uppercase mb0">HAPPY CHAPPY CHINESE</h5>
		                                <span>10.00 - 20.00</span>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Middle East">
		                    <div class="image-tile inner-title hover-reveal text-center">
		                        <a href="<?php echo base_url('home') ?>	">
		                            <img alt="Pic" src="img/middleeast.jpg">
		                            <div class="title">
		                                <h5 class="uppercase mb0">AL NEFOURA&nbsp;</h5>
		                                <span>16.00 - 20.00</span>
		                            </div>
		                        </a>
		                    </div>
		                </div>
		            </div> -->
		            
		        </div>
		        
		    </section>

<?php view('partial/footer') ?>