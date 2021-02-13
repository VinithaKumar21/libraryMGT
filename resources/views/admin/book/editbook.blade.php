@extends('layouts.master')

@section('title')
	Edit Book Details
@endsection

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>Edit Book Details</h1>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<form action="{{ url('/') }}/updatebook/{{ $bookDetails->id }}" method="post">
								{{ csrf_field() }}
								{{ method_field('PUT') }}
							  <div class="mb-3">
							    <label for="book_title" class="form-label">Book Title</label>
							    <input type="text" class="form-control" id="book_title" value="{{ $bookDetails->book_title }}" name="book_title">
							  </div>
							  <div class="mb-3">
							    <label for="author_name" class="form-label">Author Name</label>
							    <input type="text" class="form-control" id="author_name" value="{{ $bookDetails->author_name }}" name="author_name">
							  </div>
							  <div class="mb-3">
							    <label for="isbn_number" class="form-label">ISBN Number</label>
							    <input type="text" class="form-control" id="isbn_number" value="{{ $bookDetails->isbn_number }}" name="isbn_number">
							  </div>
							  <div class="form-floating">
							  	  <label for="description" class="form-label">Description</label>
								  <textarea class="form-control" value="{{ $bookDetails->description }}" id="description" name="description"></textarea>
								</div>
							  <button type="submit" class="btn btn-success">Update</button>
							  <a href="{{ url('/') }}/books" class="btn btn-danger">Cancel</a>
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