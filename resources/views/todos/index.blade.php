@extends('layouts.app')

@section('page-title')
Home | Todo
@endsection

@section('content')

	<div class="row my-5 justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header text-center">
						<h4 class="card-title">All Todos</h4>
					</div>
					<div class="card-body">
						<ul class="list-group">
							@foreach($todos as $todo)
								<li class="list-group-item">{{ $todo->name }}

									@if(!$todo->Completed )
									<a href="/todos/complete/{{ $todo->id }}" class="btn btn-warning btn-sm float-end mx-2">Complete</a>
									@endif

									<a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-end">View</a>

								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>

@endsection