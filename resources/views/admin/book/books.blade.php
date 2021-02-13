@extends('layouts.master')

@section('title')
	Books Management
@endsection

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Manage Books
                <a href="{{ url('/') }}/addbook" class="btn btn-primary float-right">Add Book</a>
                </h4></br>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Book Title
                      </th>
                      <th>
                        Author Name
                      </th>
                      <th>
                        ISBN Number
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      @foreach($bookDetails as $book)
                        <tr>
                          <td>
                            {{ $book->id }}
                          </td>
                          <td>
                            {{ $book->book_title }}
                          </td>
                          <td>
                            {{ $book->author_name }}
                          </td>
                          <td>
                            {{ $book->isbn_number }}
                          </td>
                          <td>
                            {{ $book->description }}
                          </td>
                          <td>
                            <a href="{{ url('/') }}/editbook/{{ $book->id }}" class="btn btn-success">EDIT</a>
                          </td>
                          <td>
                            <a href="{{ url('/') }}/deletebook/{{ $book->id }}" class="btn btn-danger">DELETE</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

@endsection


@section('scripts')

@endsection