@extends('layouts.app')

@section('content')

	<h1>User: {{$user->name}}</h1>
	<ul>
		@foreach($user->roles as $role)
			<li>{{$role->label}}</li>
			<ul>
			@foreach($role->permissions as $permission)
				<li>{{$permission->label}}</li>
			@endforeach
			</ul>
		@endforeach
	</ul>

@stop