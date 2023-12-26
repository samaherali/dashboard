@extends('layouts.master')

@section('title')
    Register Roles | Morse  
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles</h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        Id
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Phone Number
                      </th>
                      <th>
                      Email
                      </th>
                      <th>
                        User Type
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                        @foreach ($users as $row)
                      <tr>
                      <td>
                          {{$row->id}}
                        </td>
                        <td>
                          {{$row->name}}
                        </td>
                        <td>
                        {{$row->phone}}
                        </td>
                        <td>
                        {{$row->email}}
                        </td>
                        <td>
                        {{$row->usertype}}
                        </td>
                        <td>
                          <a href="/role-edit/{{$row->id}}" class="btn btn-success" >Edit</a>
                        </td>
                        <td>
                        <form action="/role-delete/{{$row->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
       
        </div>
@endsection



@section('scripts')

@endsection


