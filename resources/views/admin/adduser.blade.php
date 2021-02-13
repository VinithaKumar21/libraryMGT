@extends('layouts.master')

@section('title')
	Add New User
@endsection

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>Add User</h1>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<form action="{{ url('/') }}/createuser" method="post">
								{{ csrf_field() }}
								{{ method_field('POST') }}
							  <div class="mb-3">
							    <label for="name" class="form-label">Name</label>
							    <input type="text" class="form-control" id="name" placeholder="Enter user name" name="name">
							  </div>
							  <div class="mb-3">
							    <label for="email" class="form-label">Email</label>
							    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
							  </div>
							  <div class="mb-3">
							    <label for="name" class="form-label">Password</label>
							    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
							  </div>
							  <button type="submit" class="btn btn-success">Submit</button>
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