<?php view('partial/header', $data) ?>
		<div class="main-container">
		<section class="cover fullscreen image-bg overlay parallax">
		        <div class="background-image-holder">
		            <img alt="image" class="background-image" src="img/indonesia.jpg">
		        </div>
		        <div class="container v-align-transform">
		            <div class="row">
		                <div class="col-sm-12 text-center">
		                    <h1 class="large uppercase mb16">WELCOME TO<br>SAMICOS RESTAURANT</h1>
		                    <h5 class="uppercase mb0">RESERVATION OF RESTAURANT</h5>
		                </div>
		            </div>
		        </div>
		    </section>
		    <section>
		        <div class="container">
		           	<div class="row" align="center">
		                <div align="center" class="col-sm-12">
		                    <div class="feature bordered" style="margin:0 250px;">
		                        <h1 class="large uppercase mb64 mb-xs-24">Order Cart</h1>
		                        <table class="content">
		                        	<tr>	
		                        		<th>Edit</th>
		                        		<th>Menu</th>
		                        		<th>Harga</th>
		                        		<th>Jumlah</th>
		                        		<th>Sub Total</th>
		                        	</tr>
		                        	<?php foreach ($pesan as $key => $value) { ?>
		                        		<tr style="margin-top: px;">
			                        		<td><a href="#">Hapus</a></td>
			                        		<td><?php echo $value->nama_menu ?></td>
			                        		<td>Rp <?php echo number_format($value->harga_menu, 2, ',', '.') ?></td>
			                        		<td><?php echo $value->jumlah ?></td>
			                        		<td>Rp. <?php echo $value->jumlah * $value->harga_menu ?></td>
			                        	</tr>
		                        	<?php } ?>
		                        	
		                        	<tr style="">
		                        		<td colspan="5" style="">
		                        			<div class="row">
		                        				<div class="button-container">
		                        					<div class="col-md-6"></div>	
		                        					<div class="col-md-6">
		                        						<form action="<?php echo base_url('konfpesan') ?>"">
		                        							<button type="submit">Confirm</button>
		                        						</form>
		                        					</div>
		                        				</div>	
		                        			</div>
		                        		</td>
		                        	</tr>
		                        </table>
		                    </div>
		                </div>
		            </div>
		        </div>
		        </section>

<?php view('partial/footer') ?>
				