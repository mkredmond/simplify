@extends('layouts.app')

@section('content')
	<section class="col-md-6 col-xs-12">
		@include('admin.users.partials.newUser')
	</section>
	<section class="col-md-6 col-xs-12">
		@include('admin.users.partials.existingUser')
	</section>
@stop