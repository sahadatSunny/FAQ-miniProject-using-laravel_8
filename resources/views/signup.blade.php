
<x-master>

	<div class="signup-form">
		<form action="/examples/actions/confirmation.php" method="post">
			
			<h2>Sign Up</h2>
			<p class="headText">Please fill in this form to create an account!</p>
			
			
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<span class="fa fa-user"></span>
						</span>                    
					</div>
					<input type="text" class="form-control" name="username" placeholder="Username" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-paper-plane"></i>
						</span>                    
					</div>
					<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-lock"></i>
						</span>                    
					</div>
					<input type="text" class="form-control" name="password" placeholder="Password" required="required">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-lock"></i>
							<i class="fa fa-check"></i>
						</span>                    
					</div>
					<input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
				</div>
			</div>
			<div class="form-group">
				<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
			</div>
		</form>

		<!-- Button trigger modal -->
		<div class="text-center color-dark">Already have an account? <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userLoginModal">
		Login here
		</button></a></div>

	</div>

</x-master>
