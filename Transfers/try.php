<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Multiple step form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>
	<style type="text/css">
		#personal_information,
		#my_info,
		#company_information{
			display:none;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-lg-5">
			<form class="form-horizontal" action="submit_data.php" method="POST" id="myform">

				<fieldset id="account_information" class="">
					<legend>What kind of car are you listing?</legend>
					<div class="form-group">
						<label for="username" class="col-lg-4 control-label">Year</label>
						<div class="col-lg-8">
							<select id="username" name="username">
								<option value=""></option>
  								<option value="volvo">Volvo</option>
  								<option value="saab">Saab</option>
  								<option value="mercedes">Mercedes</option>
  								<option value="audi">Audi</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="username1" class="col-lg-4 control-label">Make</label>
						<div class="col-lg-8">
							<select id="username1" name="username1">
								<option value=""></option>
  								<option value="volvo">Volvo</option>
  								<option value="saab">Saab</option>
  								<option value="mercedes">Mercedes</option>
  								<option value="audi">Audi</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="username2" class="col-lg-4 control-label">Model</label>
						<div class="col-lg-8">
							<select id="username2" name="username2">
								<option value=""></option>
  								<option value="volvo">Volvo</option>
  								<option value="saab">Saab</option>
  								<option value="mercedes">Mercedes</option>
  								<option value="audi">Audi</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="username3" class="col-lg-4 control-label">Mileage</label>
						<div class="col-lg-8">
							<select id="username3" name="username3">
								<option value=""></option>
  								<option value="volvo">Volvo</option>
  								<option value="saab">Saab</option>
  								<option value="mercedes">Mercedes</option>
  								<option value="audi">Audi</option>
							</select>
						</div>
					</div>
					
					<p><a class="btn btn-primary next">next</a></p>
				</fieldset>

				<fieldset id="company_information" class="">
					<legend>Where is your car located?</legend>
					<div class="form-group">
						<label for="company" class="col-lg-4 control-label">Street Address</label>
						<div class="col-lg-8">
							<textarea rows="4" cols="50" class="form-control" id="company" name="company" placeholder="Street Address">
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="url" class="col-lg-4 control-label">City</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="url" name="url" placeholder="Website url">
						</div>
					</div>
					<div class="form-group">
						<label for="url1" class="col-lg-4 control-label">State</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="url1" name="url1" placeholder="Website url">
						</div>
					</div>
					<div class="form-group">
						<label for="url2" class="col-lg-4 control-label">ZIP Code</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="url2" name="url2" placeholder="Website url">
						</div>
					</div>
					
					<div class="form-group">
						<label for="url3" class="col-lg-4 control-label">STATE</label>
						<div class="col-lg-8">
							<select id="url3" name="url3">
								<option value="california">California</option>
  								<option value="volvo">Volvo</option>
  								<option value="saab">Saab</option>
  								<option value="mercedes">Mercedes</option>
  								<option value="audi">Audi</option>
							</select>
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label for="url4" class="col-lg-4 control-label">License Plate Number</label>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="url4" name="url4" placeholder="Website url">
						</div>
					</div>
					
					<p><a class="btn btn-primary" id="previous" >Previous</a></p>
					<p><a class="btn btn-primary next">next</a></p>
				</fieldset>
				
				<fieldset id="personal_information" class="">
					<legend>Vehicle Availability</legend>
					<div class="form-group">
						<label for="avail1" class="col-lg-4 control-label">Availability</label>
						<div class="col-lg-8">
							<select id="avail1" name="avail1">
								<option value=""></option>
  								<option value="volvo">Everyday</option>
  								<option value="saab">Weekends</option>
  								<option value="mercedes">Weekdays</option>
  								<option value="audi">Decide Later</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="avail2" class="col-lg-4 control-label">Shortest trip you would consider</label>
						<div class="col-lg-8">
							<select id="avail2" name="avail2">
								<option value=""></option>
  								<option value="volvo">2 days</option>
  								<option value="saab">Saab</option>
  								<option value="mercedes">Mercedes</option>
  								<option value="audi">Audi</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="avail3" class="col-lg-4 control-label">Longest trip you would consider</label>
						<div class="col-lg-8">
							<select id="avail3" name="avail3">
								<option value=""></option>
  								<option value="volvo">2 weeks</option>
  								<option value="saab">Saab</option>
  								<option value="mercedes">Mercedes</option>
  								<option value="audi">Audi</option>
							</select>
						</div>
					</div>
					<p><a class="btn btn-primary" id="previous" >Previous</a></p>
					<p><a class="btn btn-primary next">next</a></p>
				</fieldset>

				<fieldset id="my_info" class="">
					<legend>Upload Photos</legend>
					<div class="form-group">
						<label for="name" class="col-lg-4 control-label">Name</label>
							<input type="file" name="name" id="name">
					</div>
					
					<div class="form-group"><br>
						<label for="description" class="col-lg-4 control-label">Description of your car</label>
							<textarea rows="4" cols="50" class="form-control" id="description" name="description" placeholder="Description">
							</textarea>
					</div>
					<br>
					<div class="form-group"><br>
						<label for="features" class="col-lg-4 control-label">Features of your car</label>
							 <input type="checkbox" name="vehicle" value="hybrid">Hybrid<br>
  							<input type="checkbox" name="vehicle" value="Car" >GPS<br>
  							<input type="checkbox" name="vehicle" value="Car" >4 wheel-drive<br>
  							<input type="checkbox" name="vehicle" value="Car" >Convertible<br>
  							<input type="checkbox" name="vehicle" value="Car" >Long-term rentals<br>
					</div>
				
					
					<p><a class="btn btn-primary" id="previous" >Previous</a></p>
					<p><input class="btn btn-success" type="submit" value="submit"></p>
				</fieldset>

			</form>
		</div>  
	</div>

	<script type="text/javascript">
		$(document).ready(function(){

			// Custom method to validate username
			$.validator.addMethod("usernameRegex", function(value, element) {
				return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
			}, "Username must contain only letters, numbers");

			$(".next").click(function(){
				var form = $("#myform");
				form.validate({
					errorElement: 'span',
					errorClass: 'help-block',
					highlight: function(element, errorClass, validClass) {
						$(element).closest('.form-group').addClass("has-error");
					},
					unhighlight: function(element, errorClass, validClass) {
						$(element).closest('.form-group').removeClass("has-error");
					},
					rules: {
						username: {
							required: true,
						},
						username1: {
							required: true,
						},
						username2: {
							required: true,
						},
						username3: {
							required: true,
						},
						password : {
							required: true,
						},
						conf_password : {
							required: true,
							equalTo: '#password',
						},
						company:{
							required: true,
						},
						url:{
							required: true,
						},
						url1:{
							required: true,
						},
						url2:{
							required: true,
						},
						url3:{
							required: true,
						},
						url4:{
							required: true,
						},
						company:{
							required: true,
						},
						avail1:{
							required: true,
						},
						avail2:{
							required: true,
						},
						avail3:{
							required: true,
						},
						name: {
							required: true,
						},
						email: {
							required: true,
						},
						
					},
					messages: {
						username: {
							required: "Year required",
						},
						username1: {
							required: "Make required",
						},
						username2: {
							required: "Model required",
						},
						username3: {
							required: "Please enter number of miles",
						},
						url:{
							required: "Enter city",
						},
						url1:{
							required: "Enter state",
						},
						url2:{
							required: "Enter zipcode",
						},
						url3:{
							required: "Enter state",
						},
						url4:{
							required: "Enter license number",
						},
						company:{
							required: "Enter street address",
						},
						avail1:{
							required: "Enter vehicle availability",
						},
						avail2:{
							required: "Enter shortest trip",
						},
						avail3:{
							required: "Enter longest trip",
						},
						password : {
							required: "Password required",
						},
						conf_password : {
							required: "Password required",
							equalTo: "Password don't match",
						},
						name: {
							required: "You must upload at least one photo of your car",
						},
						email: {
							required: "Email required",
						},
					}
				});
				if (form.valid() === true){
					if ($('#account_information').is(":visible")){
						current_fs = $('#account_information');
						next_fs = $('#company_information');
					}else if($('#company_information').is(":visible")){
						current_fs = $('#company_information');
						next_fs = $('#personal_information');
					}
					else if($('#personal_information').is(":visible")){
						current_fs = $('#personal_information');
						next_fs = $('#my_info');
					}
					
					next_fs.show(); 
					current_fs.hide();
				}
			});

			$('#previous').click(function(){
				if($('#company_information').is(":visible")){
					current_fs = $('#company_information');
					next_fs = $('#account_information');
				}else if ($('#personal_information').is(":visible")){
					current_fs = $('#personal_information');
					next_fs = $('#company_information');
				}
				else if ($('#my_info').is(":visible")){
					current_fs = $('#my_info');
					next_fs = $('#personal_information');
				}
				next_fs.show(); 
				current_fs.hide();
			});
			
		});
	</script>
</body>
</html>