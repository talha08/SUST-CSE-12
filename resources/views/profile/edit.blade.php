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
                           <a href="{!! route('profile.index') !!}"><button class="btn btn-success">Profile</button></a>
                    </span>
                    </div>




                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel-body">




                                    {!!Form::model($profile,['route' => ['profile.update',Auth::user()->id], 'method' => 'put' ])!!}

                                    <div class="form-group">
                                        {!! Form::label('name', "Complete Name:", array('class' => 'control-label')) !!}
                                        {!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Enter your complete name')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('gender', "Gender:", array('class' => 'control-label')) !!}
                                        {!! Form::select('gender',$gender, Null, array('class' => 'form-control', 'placeholder' => 'Select gender','disable')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('dob', "Date of Birth:", array('class' => 'control-label')) !!}
                                        {!! Form::text('dob', null, array('class' => 'form-control', 'placeholder' => 'Enter your birthday','id'=>'date')) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('home_town', "Home Town:", array('class' => 'control-label')) !!}
                                        {!! Form::text('home_town', null, array('class' => 'form-control', 'placeholder' => 'Enter your hometown')) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('interests', "Interests:", array('class' => 'control-label')) !!}
                                        {!! Form::text('interests', null, array('class' => 'form-control', 'placeholder' => 'Enter your interests')) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Update Profile', array('class' => 'btn btn-info')) !!}
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





        @section('style')
            {!! Html::style('assets/bootstrap-datepicker/css/datepicker.css') !!}

        @stop


        @section('script')

            {!! Html::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}

            <script type="text/javascript">
                $(document).ready(function() {
                    $("#date").datepicker({
                        format: 'yyyy-mm-dd'
                    });

                });
            </script>
@stop
