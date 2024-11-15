  <?php $this->view("header", $data);?>
	<section id="form" style="margin-top: 5px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center;">
				<div class="col-sm-4" style="float: none; display: inline-block;">
					<div class="login-form" ><!--login form-->
						<h2>Login to your account</h2>
						<form action="#">
							<input type="text" placeholder="Name" />
							<input type="email" placeholder="Email Address" />
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
            <br>
            <div>Don't have an account? <span><a href="<?= ROOT?>signup">Signup here<span></div>
					</div><!--/login form-->
				</div>
		<!--		<div class="col-sm-4">
					<div class="signup-form">
						<h2>New User Signup!</h2>
						<form action="#">
							<input type="text" placeholder="Name"/>
							<input type="email" placeholder="Email Address"/>
							<input type="password" placeholder="Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div>
				</div>
      -->
			</div>
		</div>
	</section><!--/form-->


  <?php $this->view("footer");?>
