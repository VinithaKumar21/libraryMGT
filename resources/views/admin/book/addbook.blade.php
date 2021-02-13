@extends('layouts.master')

@section('title')
	Add New Book Entry
@endsection

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>Add Book</h1>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<form action="{{ url('/') }}/createbook" method="post">
								{{ csrf_field() }}
								{{ method_field('POST') }}
							  <div class="mb-3">
							    <label for="book_title" class="form-label">Book Title</label>
							    <input type="text" class="form-control" id="name" placeholder="Enter book title" name="book_title">
							  </div>
							  <div class="mb-3">
							    <label for="author_name" class="form-label">Author Name</label>
							    <input type="text" class="form-control" id="author_name" placeholder="Enter author name" name="author_name">
							  </div>
							  <div class="mb-3">
							    <label for="isbn_number" class="form-label">ISBN Number</label>
							    <input type="text" class="form-control" id="isbn_number" placeholder="Enter ISBN number" name="isbn_number">
							  </div>
							  <div class="form-floating">
							  	  <label for="description" class="form-label">Description</label>
								  <textarea class="form-control" placeholder="" id="description" name="description"></textarea>
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