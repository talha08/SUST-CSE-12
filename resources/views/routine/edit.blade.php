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
                           <a href="{!! route('routine.index') !!}"><button class="btn btn-success">Full Routine</button></a>
                    </span>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel-body">

                                    {!!Form::model($routine,['route' => ['routine.update',$routine->id], 'method' => 'put' ])!!}


                                    <div class="form-group">
                                        {!! Form::label('day', "Day", array('class' => 'control-label')) !!}
                                        {!! Form::text('day', null, array('class' => 'form-control')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('am_8', "AM 8:", array('class' => 'control-label')) !!}
                                        {!! Form::text('am_8', null, array('class' => 'form-control')) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('am_9', "AM 9:", array('class' => 'control-label')) !!}
                                        {!! Form::text('am_9', null, array('class' => 'form-control', 'placeholder' => 'Enter skill experience')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('am_10', "AM 10:", array('class' => 'control-label')) !!}
                                        {!! Form::text('am_10', null, array('class' => 'form-control')) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('am_11', "AM 11:", array('class' => 'control-label')) !!}
                                        {!! Form::text('am_11', null, array('class' => 'form-control', 'placeholder' => 'Enter skill experience')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('pm_12', "PM 12:", array('class' => 'control-label')) !!}
                                        {!! Form::text('pm_12', null, array('class' => 'form-control')) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('pm_1', "PM 1:", array('class' => 'control-label')) !!}
                                        {!! Form::text('pm_1', null, array('class' => 'form-control', 'placeholder' => 'Enter skill experience')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('pm_2', "PM 2:", array('class' => 'control-label')) !!}
                                        {!! Form::text('pm_2', null, array('class' => 'form-control')) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('pm_3', "PM 3:", array('class' => 'control-label')) !!}
                                        {!! Form::text('pm_3', null, array('class' => 'form-control', 'placeholder' => 'Enter skill experience')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('pm_4', "PM 4:", array('class' => 'control-label')) !!}
                                        {!! Form::text('pm_4', null, array('class' => 'form-control', 'placeholder' => 'Enter skill experience')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Save Changes', array('class' => 'btn btn-primary')) !!}
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





