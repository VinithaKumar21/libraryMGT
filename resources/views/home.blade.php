@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Books Available') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($bookDetails as $book)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h4 class="card-title">{{ $book->book_title }}</h4>
                        <h6 class="">Author: {{ $book->author_name }}</h6>
                        <h6 class="">ISBN Number: {{ $book->isbn_number }}</h6>
                        <p class="card-text">{{ $book->description }}</p>
                        <a href="{{ url('/') }}/subscribebook/{{ $book->id }}" class="btn btn-primary">Subscribe</a>
                      </div>
                    </div></br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
