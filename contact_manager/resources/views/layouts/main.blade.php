<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/jquery-ui-1.11.4.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> 
    <!-- <script src="/js/bootstrap.min.js"></script> -->
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
   <!-- @yield('header') -->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand text-uppercase" href="#">My Contacts</a>
			</div>
			<!-- end of navbar header -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<div class="nav navbar-right navbar-btn">
					<a href="{{ route('contacts.create') }}" class="btn btn-default">
						<strong class="glyphicon glyphicon-plus"></strong>
						Add Contact
					</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- content -->
	<div class="container" id="container-down">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<?php
						$selected_group = Request::get('group_id')
					?>
					<a href="{{ route('contacts.index')}}" class="list-group-item {{empty($selected_group) ? 'active' : ''}}">All contacts<span class="badge">{{App\Contact::all()->count()}}</span></a>
					@foreach(App\Group::all() as $groups)
					<a href="{{ route('contacts.index', ['group_id'=>$groups->id])}}" class="list-group-item {{$selected_group == $groups->id ? 'active': ''}}" >{{$groups->name}}<span class="badge">{{$groups->contacts->count()}}</span></a>
					@endforeach
				</div>
			</div>
			<!-- /col-md-3 -->
			<!-- col-md-9 -->
			
			<div class="col-md-9">
				@yield('content')
			</div>

			<!-- /col-md-9 -->
			<!-- col-md-3 -->
			<div class="col-md-5 col-md-offset-5">
				<nav>
					{!! $contacts->appends( Request::query() )->render() !!}
<!--  
					<ul class="pagination">
						<li>
							<a href="#" arial-label="Previous">
								<span arial-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li>
						<a href="#" arial-label="Next">
							<span arial-hidden="true">&raquo;</span>
						</a>
						</li>
					</ul> -->
				</nav>
			</div>
		</div>
	</div>

</body>
</html>