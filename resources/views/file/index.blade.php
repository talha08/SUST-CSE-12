@extends('layouts.default')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            @include('includes.alert')

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>{{ $title }}</h4>
                                </div>
                                <div class="col-md-6">                            
                                     <a class="pull-right" href="{!! route('file.create')!!}"><button class="btn btn-success">Upload/Add file</button></a>
                                </div>
                            </div>
                        </div>
                                                   
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                @if(count($files))
                                    <table  id="dataTable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>File Type</th>
                                            <th>File Name</th>
                                            <th class="text-center">URL</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($files as $file)
                                            <tr>
                                                <td>{!! $file->file_type !!}</td>
                                                <td>{!! $file->file_name !!}</td>
                                                <td class="text-center"><a class="btn btn-info btn-xs btn-archive" href="{{ $file->file_link }}"  style="margin-right: 3px;">Download</a></td>
                                                <td class="text-center"><a class="btn btn-info btn-xs btn-archive Editbtn" href="{!!route('file.edit',$file->id)!!}"  style="margin-right: 3px;">Edit</a>
                                                <a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $file->id !!}">Delete</a></td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    No file added yet. Be first to add a file
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    {!! Form::open(array('route' => array('skill.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {!! Form::submit('Yes, Delete', array('class' => 'btn btn-success')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop

@section('style')

{!! Html::style('assets/datatables/jquery.dataTables.min.css') !!}

@endsection

@section('script')

    {!! Html::script('assets/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/datatables/dataTables.bootstrap.js') !!}




    <!-- for Datatable -->
    <script type="text/javascript">

        $(document).ready(function() {
            
            /* do not add datatable method/function here , its always loaded from footer -- masiur */
            $('#dataTable').dataTable();

            $(document).on("click", ".deleteBtn", function() {
                var deleteId = $(this).attr('deleteId');
                var url = "<?php echo URL::route('file.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });

        });
    </script>


@stop







