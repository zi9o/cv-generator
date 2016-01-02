@extends('home.template')

@section('contenu')
		<div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Sign Up to <strong class="text-custom">cv-generator</strong> </h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" action="index.html">

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="email" required="" placeholder="Email">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="text" required="" placeholder="Username">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="password" required="" placeholder="Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<div class="checkbox checkbox-primary">
									<input id="checkbox-signup" type="checkbox" checked="checked">
									<label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
								</div>
							</div>
						</div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
									Register
								</button>
							</div>
						</div>

					</form>

				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 text-center">
					<p>
						Already have account?<a href="login" class="text-primary m-l-5"><b>Sign In</b></a>
					</p>
				</div>
			</div>

@stop