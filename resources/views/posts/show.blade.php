@extends('layouts.app')

@section('content')
    <a href="{{url()->previous()}}" class="btn btn-success">< Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr />
    <small>Written on {{$post->created_at}}</small>
    <hr />
    <a href="./posts/{{$post->id}}/edit" class="btn ntn-default">Edit</a>
    {!! Form::open(['action'=> ['PostController@destroy',$post->id],'method' => 'POST','class' => 'pull-right'])  !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close() !!}
@endsection