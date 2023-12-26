

@extends('layouts.app')


@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> Title</td>
            </tr>

            @foreach($post as $pos)
                <tr>
                    <td> <a href="{{ "/read/".$pos->id}}">{{$pos->title}}</a>
                    </td>
                </tr>
            @endforeach

        </table>

        <a href="add">Add new Blog</a>
    </div>
@endsection

