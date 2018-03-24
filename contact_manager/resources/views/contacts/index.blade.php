@extends('layouts.main')	

@section('content')
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
									<div class="media-body">
										<div>

											<a href="#"  style="float:right" class="btn btn-circle btn-danger btn-xs"><i class="glyphicon glyphicon-remove" title="delete"></i>
												</a>
											<a href="#" style="float:right; margin-right:12px" class="btn btn-circle btn-default btn-xs"><i class="glyphicon glyphicon-edit" title="edit"></i>
											</a>
											
											
										</div>
									</div>

								</div>

							</td>

						</tr>
						@endforeach
					</table>
				</div>
				
			
@endsection