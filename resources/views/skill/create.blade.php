@extends('layouts.default')
@section('content')

    <div class="wraper container-fluid">

        @include('includes.alert')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title">{!!$title!!}</h3>

                    <span class="pull-right">
                           <a href="{!! route('skill.index') !!}"><button class="btn btn-success">Skill  List</button></a>
                    </span>
                    </div>




                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel-body">



                                    {!! Form::open(array('route' => 'skill.store')) !!}


                                    <div class="form-group">
                                        {!! Form::label('skills', "Skill Name:", array('class' => 'control-label')) !!}
                                        {!! Form::text('skills', null, array('class' => 'form-control', 'placeholder' => 'Enter skill name')) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('experience', "Experience:", array('class' => 'control-label')) !!}
                                        {!! Form::text('experience', null, array('class' => 'form-control', 'placeholder' => 'Enter skill experience')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Add Skill', array('class' => 'btn btn-info')) !!}
                                    </div>


                                    {!! Form::close() !!}


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


@stop





