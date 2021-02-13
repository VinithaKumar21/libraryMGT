@extends('layouts.master')

@section('title')
	User Management
@endsection

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User Management
                <a href="{{ url('/') }}/adduser" class="btn btn-primary float-right">Add User</a>
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
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                      @foreach($userDetails as $user)
                        <tr>
                          <td>
                            {{ $user->id }}
                          </td>
                          <td>
                            {{ $user->name }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                            <a href="{{ url('/') }}/edituser/{{ $user->id }}" class="btn btn-success">EDIT</a>
                          </td>
                          <td>
                            <a href="{{ url('/') }}/deleteuser/{{ $user->id }}" class="btn btn-danger">DELETE</a>
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