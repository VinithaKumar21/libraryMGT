<?php 
use App\Models\User;
use App\Models\Book;
?>
@extends('layouts.master')

@section('title')
	Subscriptions Management
@endsection

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Manage Subscriptions
                
                </h4>
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
                        Book Details
                      </th>
                      <th>
                        Subscribed By
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      @foreach($subscriptions as $subscription)
                        <tr>
                          <td>
                            {{ $subscription->id }}
                          </td>
                          <?php 
                          $userdetails = User::find($subscription->userid);
                          $bookdetails = Book::find($subscription->bookid)
                          //print_r($userdetails);die;
                          ?>
                          <td>
                            Title: {{ $bookdetails->book_title }} </br>
                            Author: {{ $bookdetails->author_name }} </br>
                            ISBN: {{ $bookdetails->isbn_number }} </br>
                            Desc: {{ $bookdetails->description }}
                          </td>
                          <td>
                            {{ $userdetails->name }}
                          </td>
                          <td>
                            <a href="{{ url('/') }}/deletesubscription/{{ $subscription->id }}" class="btn btn-danger">DELETE</a>
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