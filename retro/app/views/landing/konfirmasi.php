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
		        
		        <div class="align-bottom relative-xs text-center">
		            <a class="btn btn-filled btn-lg mb32 mt-xs-40" href="#">CART ORDER</a>
		        </div>
		    </section>
		    <section>
		        <div class="container">
		            <div class="row" align="center">
		                <div align="center" class="col-md-12">
		                    <div class="feature bordered" style="margin: 0 250px;">
		                        <h1 class="large uppercase mb64 mb-xs-24">Book A Table</h1>
		                        <form class="form-email" data-success="Thanks for your booking, we will be in touch to confirm shortly." data-error="Please fill all fields correctly.">
		                            <input type="text" class="validate-required" name="name" placeholder="Samicos Restaurant">
                                    <input type="text" class="validate-required" name="name" placeholder="Id Reservation">
                                    <input type="text" class="validate-required" name="name" placeholder="Name for booking">
		                            <input type="text" class="validate-required" name="phone" placeholder="Phone Number">
		                            
		                            
		                            <div class="select-option col-md-6 p0">
		                                <i class="ti-angle-down"></i>
		                                <select class="validate-required" name="time">
		                                    <option selected="selected" value="">Time Start Reservation</option>
		                                    <option value="6pm">6:00pm</option>
		                                    <option value="630pm">6:30pm</option>
		                                    <option value="7pm">7:00pm</option>
		                                    <option value="730pm">7:30pm</option>
		                                    <option value="8pm">8:00pm</option>
		                                    <option value="830pm">8:30pm</option>
		                                    <option value="9pm">9:00pm</option>
		                                </select>
		                            </div>
                                    <div class="select-option col-md-6 p0">
		                                <i class="ti-angle-down"></i>
		                                <select class="validate-required" name="time">
		                                    <option selected="selected" value="">Time End Reservation</option>
		                                    <option value="6pm">6:00pm</option>
		                                    <option value="630pm">6:30pm</option>
		                                    <option value="7pm">7:00pm</option>
		                                    <option value="730pm">7:30pm</option>
		                                    <option value="8pm">8:00pm</option>
		                                    <option value="830pm">8:30pm</option>
		                                    <option value="9pm">9:00pm</option>
		                                </select>
		                            </div>
                                    <div class="select-option col-md-6 p0">
		                                <i class="ti-angle-down"></i>
		                                <select class="validate-required" name="persons">
		                                    <option selected="selected" value="">Number of Guests</option>
		                                    <option value="1">One</option>
		                                    <option value="2">Two</option>
		                                    <option value="3">Three</option>
		                                    <option value="4">Four</option>
		                                    <option value="5">Five</option>
		                                    <option value="6">Six</option>
		                                    <option value="7">Seven</option>
		                                    <option value="8">Eight</option>
		                                    <option value="9">Nine</option>
		                                    <option value="10">Ten</option>
		                                </select>
		                            </div>
		                            <div class="select-option col-md-6 p0">
		                                <i class="ti-angle-down"></i>
		                                <select class="validate-required" name="persons">
		                                    <option selected="selected" value="">Paket</option>
		                                    <option value="1">Paket A</option>
		                                    <option value="2">Paket B</option>
		                                    <option value="3">Paket C</option>
		                                    <option value="4">Paket D</option>
		                                    <option value="5">Paket E</option>
		                                    <option value="6">Paket F</option>
		                                    <option value="7">Paket G</option>
		                                    <option value="8">Paket H</option>
		                                    <option value="9">Paket I</option>
		                                    <option value="10">Paket J</option>
		                                </select>
		                            </div>
		                            <input type="text" class="validate-required" name="date" placeholder="Date (DD/MM/YYYY)">
                                    <input type="text" class="validate-required" name="name" placeholder="Price">
		                            <button type="submit">Reserve Table</button>
		                        </form>
		                    </div>
		                </div>
		    </section>
<?php view('partial/footer') ?>	