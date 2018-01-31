@extends('layouts.admin')




@section('content')

    <h1>Edit Post</h1>


    <div class="row">

        <div class="col-sm-3">

            <img src="{{$post->photo ? $photo->photo->file : '/images/placeholder.png'}}" class="img-responsive" />

        </div>

        <div class="col-sm-9">
            {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('category_id', 'Category:') !!}
                    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id', null,['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('body', 'Description:') !!}
                    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-6 col-sm-6']) !!}
                </div>

            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}

                <div class="form-group">
                    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6']) !!}
                </div>
            {!! Form::close() !!}

            @include('includes.form_error')
        </div>
    </div>



@endsection