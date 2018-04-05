@extends('layouts.app')
@section('menu')
    @parent
@endsection
@section('content')
<div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3 pull-left">
        {!! Form::open(array('action'=>'TopicController@search','class'=>'form')) !!}
        <div class="input-group">
            {!! Form::text('searchform', '',array('class'=>'form-control','placeholder'=>'Enter topic'))!!}
            <span class="input-group-btn">
                <button class="btn btn-success btn-secondary" type="submit">Search</button>
            </span>
        </div>
        {!! Form::close() !!}
        <ul style="list-style-type:none">
            @foreach($topics as $t)
            <li>
                <a href="{{url('topic/'.$t->id)}}">
                    {{$t->topicname}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="col-sm-9 col-md-9 col-lg-9 pull-right">
        <div class="container">
            <!-- Check if a topic on the left was clicked -->
            @if($id != 0)
                @foreach($blocks as $b)
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 pull-left">
                        <div>
                            <!-- Block's title -->
                            <h2>{{$b->title}}</h2>
                        </div>
                        <!-- Check if an image exists and show it if it exists-->
                        @if($b->imagepath != "")
                            <a href="{{url($b->imagepath)}}" style="float:left;margin–right:20px" target="_blank" class="wrap-image">
                                <img src="{{asset($b->imagepath)}}" height="150px" alt=""/>
                            </a>
                        @endif
                        <!-- Check if a text content exisis and show it if it exists-->
                        <pre class="pre-text">{{$b->content}}</pre>
                        <!-- Form for Delete button-->
                        {!! Form::open(array('route'=>array('block.destroy',$b->id))) !!}
                            <!-- set HTTP method DELETE for the form-->
                            {{ Form::hidden('_method','DELETE')}}
                            <button class="btn btn-xs btn-danger glyphicon glyphicon-remove" style="float:right" type="submit">DELETE</button>
                        {!! Form::close() !!}
                        <!-- Form for Edit button-->
                        {!! Form::model($b, array('route'=>array('block.edit', $b->id), 'method'=>'GET')) !!}
                            <!-- set HTTP method PUT for the form-->
                            <!--{{ Form::hidden('_method','PUT')}}-->
<!--                                <a class="btn btn-xs btn-info
                                   glyphicon glyphicon-pencil"
                                   style="float:right"
                                   href="{{url('block/'.$b->id.'/edit')}}">EDIT</a>-->
                                <button class="btn btn-xs btn-info glyphicon glyphicon-pencil" style="float:right">EDIT</button>
                        {!! Form::close() !!}
                        <br><br>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection