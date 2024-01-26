@extends('layouts.app')

@section('page-title')
Create | Todo
@endsection

@section('content')

	<div class="row my-5 justify-content-center">
			<div class="col-lg-6">

					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul class="list-group">
					            @foreach ($errors->all() as $error)
					                <li class="list-group-item">{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif

				<div class="card">
					<div class="card-header text-center">
						<h4 class="card-title">Create New Todo</h4>
					</div>
					<div class="card-body">
						<form action="/store-todo" method="POST">
							@csrf
							<div class="mb-3">
								<input type="text" name="name" class="form-control" placeholder="Input Todo Name">
							</div>
							<div class="mb-3">
								<textarea name="details" class="form-control" placeholder="Input Todo Details"></textarea>
							</div>
							<div class="mb-3 d-grid">
								<input type="submit" name="submit" class="btn btn-success" value="Create">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection


