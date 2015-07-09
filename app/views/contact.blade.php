@extends('master')

@section('content')
<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1973.0559131264454!2d4.593486999999991!3d8.488507000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMjknMTguNiJOIDTCsDM1JzM2LjUiRQ!5e0!3m2!1sen!2sng!4v1436440019388" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
		<div class="container">
		    <div class="row">
			<div class="col-sm-8">
			<hr/>
				<h3 class="text-center">Mail us</h3>
					<hr/>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-lg-2 control-label" for="inputName">Name</label>
							<div class="col-lg-10">
								<input class="form-control" id="inputName" placeholder="Name" type="text">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-lg-2 control-label" for="inputEmail">Email</label>
							<div class="col-lg-10">
								<input class="form-control" id="inputEmail" placeholder="Email" type="email">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-lg-2 control-label" for="inputMessage">Message</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="inputMessage" placeholder="Message" rows="3"></textarea>
								<button class="btn btn-primary btn-block pull-left" type="submit">Send!</button>
							</div>
						</div>
					</form>
				<hr/>	
			</div>
			  <div class="col-sm-4">
			    <hr>
			        <div class="panel panel-info">
                        <div class="panel-heading">
                            contact info
                        </div>
                        <div class="panel-body">
                            Address: Umar Audi Road, Opp. Tiger House, Beside Unilorin Staff Quarters, Fate Area, GRA., P.M.B., 1604, Ilorin, Kwara State.<br>
                            Phone: <br>
                            email: <br>
                        </div>
			        </div>
			  </div>
			</div>
		</div>

@endsection