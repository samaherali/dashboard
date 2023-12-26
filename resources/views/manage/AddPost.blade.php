@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Posts') }}</div>

                <div class="card-body">
                    {{ __('Hello You Can Add your Posts!') }}
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                    <form action="add" method="POST">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" class="form-control mb-5" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Post</label>
                        <textarea class="form-control mb-5" name="post" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlFile1">Add Image</label>
                            <input type="file" class="form-control-file mb-5" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Confirm identity</button>

                        </form>
                    
                </div>
            </div>

            </div>
        </div>
        
    </div>
    
</div>
@endsection
