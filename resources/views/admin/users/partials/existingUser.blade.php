<h2>Existing Users</h2>
@if( count($users) > 0 )
	<ul class="list-group">
		@foreach($users as $user)
			<li class="list-group-item">
				{{ $user->name }} <span class="pull-right">View</span>
			</li>
		@endforeach
	</ul>
@else 
	<div class="">
		There are no users yet! Why don't you <a href=" {{ url('admin/users/create') }}">add one</a>  now?
	</div>
@endif