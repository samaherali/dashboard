@extends('layouts.app')


@section('content')
    <div class="container">


        <div class="form-group">
            <label for="usr">Title:</label>
            {{$post->title}}
        </div>
        <div class="form-group">
            <label for="usr">body:</label>
            {{$post->body}}
        </div>

        <div class="form-group">

            <table class="table table-striped">
                <tr>
                    <td> comments</td>
                </tr>

                @foreach($post->comments as $c)
                    <tr>
                        <td>  {{$c->comment}}
                        </td>
                    </tr>
                @endforeach

            </table>

            <form action="/read/{{$article->id}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="usr">body:</label>
                    <textarea rows="4" cols="50"  name="body" class="form-control">
      </textarea>
                </div>

                </br>
                <input type="submit" value="add comment" class="btn btn-primary"/>
            </form>
        </div>
    </div>
@endsection