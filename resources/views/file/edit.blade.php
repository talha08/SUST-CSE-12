@extends('layouts.default')
@section('content')
    <div class="wraper container-fluid">

        @include('includes.alert')
        <div class="page-title"> 
            <h3 class="title">{!!$title!!}</h3> 
        </div>
        <!-- Masiur Rahman Siddiki ## mrsiddiki@gmail.com-->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                    <h4>ADD Termtest Question/PDF/Book/Powepoint Slide (Anything)</h4>
                            </div>
                            <div class="col-md-6">                            
                                <a class="pull-right" href="{!! route('file.index')!!}"><button class="btn btn-success">File List</button></a>
                            </div>
                         </div>
                    </div>

                    <div class="panel-body">
                            
                        <div class=" form"> 

                                {!! Form::model($file, array('route' => ['file.store',$file->id], 'novalidate' => 'novalidate' , 'method' => 'post', 'class' => 'cmxform form-horizontal tasi-form','files' => true)) !!}


                            <div class="form-group">
                                        {!! Form::label('file_type', "File Type*", array('class' => 'control-label col-lg-2')) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('file_type', null, array('class' => 'form-control', 'placeholder' => 'Enter File Name', 'required' => 'required', 'aria-required' =>'true')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                        {!! Form::label('file_name', "File Name*", array('class' => 'control-label col-lg-2')) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('file_name', null, array('class' => 'form-control', 'placeholder' => 'Name the file', 'required' => 'required')) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                    {!! Form::label('file_link', "File Link*", array('class' => 'control-label col-lg-2')) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('file_link',null,  array('class' => 'form-control', 'placeholder' => 'Enter Any Location URL', 'required' => '', 'aria-required' =>false)) !!}
                                </div>
                            </div>

                            <h5 class="col-md-offset-2"> Or</h5>

                            <div class="form-group">
                                    {!! Form::label('thisfile', "Upload new Version", array('class' => 'control-label col-lg-2')) !!}
                                <div class="col-lg-10">
                                    {!! Form::file('thisfile',null,  array('class' => 'form-control')) !!}
                                </div>
                            </div>

                            <!-- this following field is intentionally left commented -->
                            <!-- <div class="form-group">
                                {!! Form::label('user_id', "P", array('class' => 'control-label')) !!}
                                {!! Form::text('user_id', null, array('class' => 'form-control', 'placeholder' => 'file Developer')) !!}
                            </div> -->

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                     {!! Form::submit('Update File', array('class' => 'btn btn-success m-l-10')) !!}
                                </div>
                            </div>

                                    {!! Form::close() !!}
                        </div>
                             
                    </div>
                </div>

            </div>

        </div>

@stop



@section('script')


    {!! Html::script('assets/jquery.validate/jquery.validate.min.js') !!}
    {!! Html::script('assets/jquery.validate/form-validation-init.js') !!}



    <!-- for editor-->
    <script type="text/javascript">

        jQuery(document).ready(function(){
                
                // $('.wysihtml5').wysihtml5();

                // $('.summernote').summernote({
                //     height: 200,                 // set editor height

                //     minHeight: null,             // set minimum height of editor
                //     maxHeight: null,             // set maximum height of editor

                //     focus: true                 // set focus to editable area after initializing summernote
                // });

        });
    </script>


@stop