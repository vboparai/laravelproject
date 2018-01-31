@extends('layouts.admin')



@section('content')

    <h1>Media</h1>

    @if($photos)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>

                @foreach($photos as $photo)
                    <tr>
                        <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                        <td>{{$photo->id}}</td>
                        <td><img height="50" src="{{$photo->file}}" alt=""></td>
                        <td>{{$photo->created_at ? $photo->created_at : 'no date' }}</td>
                        <td>

                            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMediasController@destroy', $photo->id]]) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                </div>
                            {!! Form::close() !!}

                        </td>
                        {{--<td>--}}
                            {{--{!! Form::open(['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}--}}

                            {{--<div class="form-group">--}}
                                {{--{!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-6']) !!}--}}
                            {{--</div>--}}
                            {{--{!! Form::close() !!}--}}
                            {{----}}
                            {{----}}
                        {{--</td>--}}

                    </tr>
                @endforeach

            </tbody>
        </table>
    @endif

@endsection