<h2>Add New User</h2>
	<div class="row">

	<div class="col-sm-12 col-md-8 col-md-offset-2">
		@include('flash')
		@include('errors')
	</div>
</div>
<div class="row">
	<form class="form-horizontal" action="{{ url('admin/users/create')}}" method="POST">
	{{ csrf_field() }}
	<fieldset>

	<!-- Text input-->
	<div class="form-group col-md-8">
	  <label class="control-label" for="name">Name</label>
	  <div>
	  	<input id="name" name="name" type="text" placeholder="ie: John Doe" class="form-control input-md" required="" value="{{ old('name') }}">
	  </div>
	</div>
	<div class="form-group col-md-8">
	  <label class="control-label" for="email">Email</label>
	  <div>
	  	<input id="email" name="email" type="email" placeholder="ie: user@domain.com" class="form-control input-md" required="" value="{{ old('email')}}">
	  </div>
	</div>
	<div class="form-group col-md-8">
	  <label class="control-label" for="password">Password</label>
	  <div>
	  	<input id="password" name="password" type="password" class="form-control input-md" required="">
	  </div>
	</div>
	<div class="form-group col-md-8">
	  <label class="control-label" for="password_confirmation">Confirm Password</label>
	  <div>
	  	<input id="password_confirmation" name="password_confirmation" type="password" class="form-control input-md" required="">
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group col-md-8">
	  <label class="control-label" for="submit"></label>
	  <div>
	    <button id="submit" name="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add User</button>
	  </div>
	</div>

	</fieldset>

	</form>

</div>