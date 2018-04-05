@extends('layouts.master')
@section('title', 'Page Title')
@section('menu')
    @parent
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="label label-info"
             style="display:inline - block;width:100%;">{{$page}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        @if(count(session('errors')) > 0)
        <div class="alert alert-danger" role="alert">
            @foreach(session('errors')->all() as $er)
                {{$er}}<br/>
            @endforeach
        </div>
        @endif
        @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        {!! Form::model($topic, array('action'=>'TopicController@store')) !!}
        <div class='form-group'>
            {!! Form::label('topicname','Topic name')!!}
            {!! Form::text('topicname', '', array('class'=>'form-control'))!!}
        </div>
        <button class="btn btn-success" type="submit">Add Topic</button>
        {!! Form::close() !!}
    </div>
</div>
@endsection