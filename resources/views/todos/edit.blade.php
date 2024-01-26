@extends('layouts.app')

@section('page-title', 'Edit | Todo')

@section('content')

	<div class="row my-5 justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header text-center">
						<h4 class="card-title">Edit Todo</h4>
					</div>
					<div class="card-body">
						<form action="/todos/update/{{ $todo->id }}" method="POST">
							@csrf
							<div class="mb-3">
								<input type="text" name="name" class="form-control" value="{{ $todo->name }}">
							</div>
							<div class="mb-3">
								<textarea name="details" class="form-control">{{ $todo->details }}</textarea>
							</div>
							<div class="mb-3 d-grid">
								<input type="submit" name="submit" class="btn btn-success" value="Update">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection