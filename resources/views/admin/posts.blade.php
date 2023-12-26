@extends('layouts.master')

@section('title')
    Post Edit | Morse  
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Delete Posts</h4>
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
                        Id
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Post
                      </th>
                      <th>
                        Image
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($posts as $row)
                      <tr>
                        <td>
                        {{$row->id}}
                        </td>
                        <td>
                        {{$row->title}}
                        </td>
                        <td>
                        {{$row->posttext}}
                        </td>
                        <td>
                        {{$row->image}}
                        </td>
                        <td>
                        <form action="{{ url('post-delete/'.$row->id)}}" method="POST">
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


