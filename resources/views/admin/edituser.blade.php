@extends('layouts.master')

@section('title')
	Edit User
@endsection

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>Edit User</h1>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<form action="{{ url('/') }}/updateuser/{{ $userDetails->id }}" method="post">
								{{ csrf_field() }}
								{{ method_field('PUT') }}
							  <div class="mb-3">
							    <label for="name" class="form-label">Name</label>
							    <input type="text" class="form-control" id="name" value="{{ $userDetails->name }}" name="name">
							  </div>
							  <div class="mb-3">
							    <label for="email" class="form-label">Email</label>
							    <input type="email" class="form-control" id="email" value="{{ $userDetails->email }}" name="email">
							  </div>
							  <button type="submit" class="btn btn-success">Update</button>
							  <a href="{{ url('/') }}/user" class="btn btn-danger">Cancel</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection