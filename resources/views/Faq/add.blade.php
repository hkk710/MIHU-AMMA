@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 6vw;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            Add F.A.Q
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    {!! Form::open(array('route' => 'faq.store','data-parsley-validate' => '')) !!}
                    {{ Form::label('ques','Question:')}}
                    {{ Form::text('ques',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::label('ans','Answer')}}
                    {{ Form::textarea('ans',null,array('class'=> 'form-control','required'=> ''))}}
                    {{ Form::submit('Add FAQ',array('class'=>'btn btn-success btn-block','style' =>'margin-top:20px;'))}}
                    <a class="btn btn-danger btn-block" href="{{ url('/faq') }}" role="button">Cancel</a>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr>
@endsection
<footer>
    <footer>

<script src="/js/parsley.js"></script>
