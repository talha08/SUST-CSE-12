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
                                     <a class="pull-right" href="{!! route('dialog.create')!!}"><button class="btn btn-success">Add Dialog</button></a>
                                </div>
                            </div>
                        </div>
                                                   
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                @if(count($dialogs))
                                    <table  id="dataTable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Dialog No.</th>
                                            <th>Dialog</th>
                                            <th>Speaker</th>
                                            <!-- <th>#</th> -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($dialogs as $dialog)
                                            <tr>
                                                <td>{!! $dialog->id !!}</td>
                                                <td>{!! $dialog->dialog !!}</td>
                                                <td>{!! $dialog->speaker !!}</td>
                                                <!-- <td><a class="btn btn-info btn-xs btn-archive Editbtn" href="{!!route('dialog.edit',$dialog->id)!!}"  style="margin-right: 3px;">Edit</a></td> -->
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    No Dialog added yet. Be first to add a dialog
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop

@section('style')

{!! Html::style('assets/datatables/jquery.dataTables.min.css') !!}

@stop

@section('script')

    {!! Html::script('assets/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/datatables/dataTables.bootstrap.js') !!}




    <!-- for Datatable -->
    <script type="text/javascript">

        $(document).ready(function() {
            
            /* do not add datatable method/function here , its always loaded from footer -- masiur */
            $('#dataTable').dataTable();

        });
    </script>


@stop







