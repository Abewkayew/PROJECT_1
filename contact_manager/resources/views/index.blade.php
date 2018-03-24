@extends('layout')

@section('content')
<!-- navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand text-uppercase" href="#">My Contacts</a>
			</div>
			<!-- end of navbar header -->
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<div class="nav navbar-right navbar-btn">
					<a href="form.html" class="btn-btn-default">
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
					<a href="{{ 'contacts.main'}}" class="list-group-item active">All contacts<span class="badge">{{App\Contact::all()->count()}}</span></a>
					@foreach(App\Group::all() as $groups)
					<a href="{{ 'contacts.main'}}" class="list-group-item">{{$groups->name}}<span class="badge">{{$groups->contacts->count()}}</span></a>
					@endforeach
				</div>
			</div>
			<!-- /col-md-3 -->
			<div class="col-md-9">
				<div class="panel panel-default">
					<table class="table">
					@foreach($contacts as $contact)
						<tr>
							<td class="middle">
								<div class="media">
									<div class="media-left">
										<a href="#">
											<img class="media-object" src="" alt="...">
										</a>
									</div>
									<div class="media-body">
										<h4 class="media-heading" style="color:#A52A2A;">{{$contact->name}}</h4>
										<address>
											<strong>{{$contact->company}}</strong><br>
											 {{$contact->email}}
										</address>
									</div>
									<div class="media-right">
										<a href="#">edit</a>
										
										<a href="#" style="color:red;">delete</a>
									</div>

								</div>

							</td>

						</tr>
						@endforeach
					</table>
				</div>
				
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

@endsection