@extends('layouts.app')
@section('menu')
    @parent
@endsection
@section('content')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="label lable-info">{{$page}}</div>
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
        <div class="alert alert-success" role="alert" >
            {{session('message')}}
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
    {!! Form::model(
        $block
        , array('action'=>'BlockController@store'
        ,'files'=>true
        ,'class'=>'form')) !!}
    <div class='form-group'>
        {!! Form::label(
            'topicid'
            ,'Select Topic'
            ,array('class'=>'col-md-2'))!!}
        {!! Form::select(
        'topicid'
        , $topics
        , ''
        ,array('class'=>'col-md-8'))!!}
        <a href="{{url('topic/create')}}" class="btn btn-sm btn-info col-md-2" type="submit">Add new Topic</a>
    </div>
    <div class='form-group'>
        {!! Form::label(
        'title'
        ,'Block Title'
        ,array('class'=>'col-md-2'))!!}
        {!! Form::text(
        'title'
        , ''
        , array('class'=>'col-md-10'))!!}
    </div>
    <div class='form-group'>
        {!! Form::label('content','Add Content',
        array('class'=>'col-md-2'))!!}
        {!! Form::textarea('content', '',
        array('class'=>'col-md-10','cols'=>'','rows'=>''))!!}
    </div>
    <div class='form-group'>
        {!! Form::label('imagepath','Add Image',
        array('class'=>'col-md-2'))!!}
        {!! Form::file('imagepath', '',
        array('class'=>'col-md-10'))!!}
    </div>
    <button class="btn btn-success" type="submit">
        Add Block</button>
    {!! Form::close() !!}
    </div>
</div>
@endsection
