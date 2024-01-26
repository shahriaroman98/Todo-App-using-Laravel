@extends('layouts.app')

@section('page-title')
Info | Todo
@endsection

@section('content')

	<div class="row my-5 justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header text-center">
						<h4 class="card-title">{{ $todo->name }}</h4>
					</div>
					<div class="card-body">
						<p>{{ $todo->details }}</p>
						<p>
							<a href="/todos/edit/{{ $todo->id }}" class="btn btn-info btn-sm mx-2">Edit</a>
							<a href="/todos/delete/{{ $todo->id }}" class="btn btn-danger btn-sm">Delete</a>
						</p>
					</div>
				</div>
			</div>
		</div>

@endsection