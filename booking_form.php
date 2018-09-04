 <!DOCTYPE html>
<div class="main" id="main">
		<div class="w3layouts_main_grid" style="width: 25rem;">
		<div class="booking-form-head-agile">
		<h3>Hotel Booking form</h3>
		</div>
			<form action="booking.php" method="post" class="w3_form_post">				
                              
				<div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Room Type</h5>
						<select id="room_type" name="room_type" required="" style="width: 100%;">
							<option value=" ">None</option>
							<option value="Single Room">Single Room</option>
							<option value="Double Room">Double Room</option>
							<option value="Suite Room">Suite Room</option>
							
						</select>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Start Date</h5>
						
						<div class="agileits_w3layouts_main_gridl" style="width: 23.5rem;">
							<input class="date" id="datepicker" name="start_date" type="text" value="mm/dd/yyyy"
                                                               onfocus="this.value = '';" onblur="if (this.value == '') {this.value = Date();}" 
                                                               required="">
						</div>
					
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>End Date</h5>
						
						<div class="agileits_w3layouts_main_gridl" style="width: 23.5rem;">
							<input class="date" id="datepicker1" name="end_date" type="text" value="mm/dd/yyyy" 
                                                               onfocus="this.value = '';" onblur="if (this.value == '') {this.value = Date();}" 
                                                               required="" >
						</div>
					
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="agileinfo_main_grid">
					<div class="agileits_w3layouts_grid">
						<h5>Number of Rooms</h5>
<!--						<select id="no_of_rooms" name="no_of_rooms" required="">
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
						</select>-->
                                                <input type ="number" placeholder="00" name="no_of_rooms" class="form-control" style="width: 100%;">
                <br><br>
					</div>
				</div>
                                <div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid"  style="color: #FFFFFF;">
					<h5>Pre-book services</h5>	
                                        <br>
                                                    <input type="checkbox" name="spa" value="spa" > Spa <br>
                                                    <input type="checkbox" name="in_room_dining" value="in_room_dining" > In-Room Dining <br>
                                                    <input type="checkbox" name="transport" value="transport" > Transport <br>                                                       
                                                        <br>
				
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right" style="width: 10rem;">
                                            <input type="submit" value="Book Now">
<!--                                            <button onclick="bookroom()">Book Now</button>-->
					</div>
					<div class="clearfix"> </div>
				</div>
			</form>
		</div>

</div>

