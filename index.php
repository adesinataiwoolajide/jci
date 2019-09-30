<?php require_once("header.php"); ?>

	<div class="main" style="margin-top:10px;">
		<div class="col-md-12" align="center">
			<img src="assets/images/jci.jpg" style="width:100px; height:80px;">
		</div>
		<div class="header" >
			<h1>Application for Membership !</h1>
			<p>Please fill the below form to become a member. </p>
			
		</div>
		
		<form class="form-horizontal" action="process-registration.php" method="POST"  enctype="multipart/form-data">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="inputEmail4">Passport</label>
					<input type="file" class="form-control"  name="passport" required>
				</div>
				<div class="form-group col-md-4">
					<label for="inputEmail4">First (Given) Name</label>
					<input type="text" class="form-control" name="firstname" required  placeholder="Enter First (Given) Name">
				</div>
				<div class="form-group col-md-4">
					<label for="inputtext4">Last (Family) Name </label>
					<input type="text" class="form-control" name="lastname"  placeholder="Enter Last (Family) Name">
				</div>
				<div class="form-group col-md-4">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" name="email" required placeholder="Enter Email">
				</div>
				<div class="form-group col-md-4">
					<label for="inputtext4">Business/Employer</label>
					<input type="text" class="form-control" name="employer" required placeholder="Enter Business/E,ployer">
				</div>
				<div class="form-group col-md-4">
					<label for="inputEmail4">Home Phone </label>
					<input type="number" class="form-control" name="home_phone" required placeholder="Enter Home Phone">
				</div>
				<div class="form-group col-md-4">
					<label for="inputtext4">Position/Occupation </label>
					<input type="text" class="form-control" name="position" required placeholder="Enter Position/Occupation">
				</div>
				<div class="form-group col-md-4">
					<label for="inputEmail4">Mobile Phone </label>
					<input type="number" class="form-control" name="mobile" required placeholder="Enter Mobile Phone">
				</div>
				<div class="form-group col-md-4">
					<label for="inputtext4">Business Phone</label>
					<input type="number" class="form-control" name="business" required placeholder="Enter Business Phone">
				</div>
				<div class="form-group col-md-4">
					<label for="inputEmail4">Home Address </label>
					<textarea class="form-control" name="home_address" required placeholder="Enter Home Address"> </textarea>
				</div>
				<div class="form-group col-md-4">
					<label for="inputtext4">Business Address 
					</label>
					<textarea class="form-control" name="business_address" required placeholder="Enter Home Address"> </textarea>
				</div>
				<div class="form-group col-md-4">
					<label for="inputtext4">Date of Birth (month/day/year)
					</label>
					<input type="date" class="form-control" required name="birth"  placeholder="">
				</div>

				<div class="form-group col-md-6">
					<label for="inputtext4">How did you hear about JCI Lagos Coral?
					</label>
					<input type="text" class="form-control" required name="details"  placeholder="">
				</div>
				<div class="form-group col-md-6">
					<label for="inputtext4">How do you want to contribute and participate in JCI Lagos Coral?
					</label>
					<input type="text" class="form-control" required name="contribute"  placeholder="">
				</div>
				<div class="form-group col-md-12" align="">
					<p>A membership subscription fees in JCI Lagos Coral is #20,000:00 per year. 
					Find updated meeting times and event information on our website www.jcilagoscoral.org <br>
					Please return this application by individual to the Chapter Secretary with 2 passport photograph
						attached.

					</p>
					<p>
						<input type="checkbox" name="check" required> I hereby give full permission to JCI Lagos Coral to share my personal information with JCI
						Nigeria and JCI International. <br>
						JCI Lagos Coral reserves the right to approve or decline all membership applications. 
					</p>
				</div>
				<div class="form-group col-md-12" align="">
				<button type="submit" class="btn btn-primary btn-lg btn-block" role="status" name="register">BECOME A MEMBER 
					</button>
				</div>
			</div>
		</form>
		<!-----start-copyright---->
		<?php require_once("footer.php"); ?>