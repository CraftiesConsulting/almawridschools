@extends('admin')

@section('content')
	<div class="container">
	<hr>

		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-info">
				<div class="panel-body">
					{{ Form::open(array('url' => 'page_settings', 'files' => true)) }}
						<fieldset>
						<legend>Update page info</legend>
							<div class="form-group">
								<label>Logo </label>
								<input type="file" name="logo_image" class="form-control">
							</div>
							<div class="form-group">
								<label>Banner</label>
								<input type="file" name="banner_image" class="form-control">	
							</div>
							<div class="form-group">
								<label>Next admission date</label>
								<input type="date" class="form-control">
							</div>
							<div class="form-group">
								<label>Enter new password</label>	
								<input type="password" class="form-control">
							</div>
							<div class="form-groupp">
								<label>Re enter password</label>
								<input type="password" class="form-control">
							</div>
						</fieldset>
						<input type="submit" class="btn btn-info btn-block" name="update-page" value="Update Page Info">
					{{ Form::close() }}
				</div>
			</div>	
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-info">
				<div class="panel-body">
					{{ Form::open(array('url' => 'page_settings', 'files' => true)) }}
						<fieldset>
						<legend>Current page details</legend>
							<div class="form-group">
								<label>Logo </label>
								<img src="{{ asset('images/logo.jpg') }}">
							</div>
							<div class="form-group">
								<label>Banner</label>
								<img src="{{ asset('images/header_bg.jpg') }}" width="200px" height="100px">
							</div>
							<div class="form-group">
								<label>Next admission date</label>
								<input type="date" class="form-control" disabled>
							</div>
							<div class="form-group">
								<label>Password</label>	
								<input type="password" class="form-control" disabled>
							</div>
						</fieldset>
						<input type="submit" class="btn btn-info btn-block" name="update-page" value="Update Page Info" disabled>
					{{ Form::close() }}
				</div>
			</div>	
			</div>
		</div>
			
	</div>
@endsection