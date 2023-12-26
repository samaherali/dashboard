@extends('layouts.master')

@section('title')
  Edit Register Roles | Morse  
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Edit Registered Roles</h4>
              </div>
              <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                <form action="/role-register-update/{{ $users->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" value="{{$users->name}}" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Give Role</label>
                    <select name="usertype" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="admin">Vistor</option>
                    </select>
                </div>
              
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/role-register" class="btn btn-danger">Cancel</a>

                </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
@endsection



@section('scripts')

@endsection


