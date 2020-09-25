@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="./posts/create" class="btn btn-primary"> New Post! </a><br /> 
                    <p>{{ __('Your Blog Post(s)') }}</p>
                    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}" class="btn btn-default">Edit</a></td>
                                    <td style="color:red;">
                                        {!! Form::open(['action'=> ['PostController@destroy',$post->id],'method' => 'POST','class' => 'pull-right'])  !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    @else
                        {{__('You have no post')}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
