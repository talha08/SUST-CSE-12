@extends('layouts.default')
    @section('content')
        @include('includes.alert')

                <div class="page-title"> 
                    <h3 class="title">Responsive Table</h3> 
                </div>

                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $title }}</h3>
                            </div>
                            <div class="panel-body">
                            @if(count($routines))
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th >Day/Time</th>
                                                    <th class="text-center">সকাল ৮ টা</th>
                                                    <th class="text-center">সকাল ৯ টা</th>
                                                    <th class="text-center">সকাল ১০ টা</th>
                                                    <th class="text-center">সকাল ১১ টা</th>
                                                    <th class="text-center">দুপুর ১২ টা</th>
                                                    <th class="text-center">দুপুর ১ টা</th>
                                                    <th class="text-center">দুপুর ২ টা</th>
                                                    <th class="text-center">বিকাল ৩ টা</th>
                                                    <th class="text-center">বিকাল ৪-৫ টা</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($routines as $routine)
                                                <tr>
                                                    <td class="text-center">{!! $routine->day !!}</td>
                                                    <td class="text-center">{!! $routine->am_8 !!}</td>
                                                    <td class="text-center">{!! $routine->am_9 !!}</td>
                                                    <td class="text-center">{!! $routine->am_10 !!}</td>
                                                    <td class="text-center">{!! $routine->am_11 !!}</td>
                                                    <td class="text-center">{!! $routine->pm_12 !!}</td>
                                                    <td class="text-center">{!! $routine->pm_1 !!}</td>
                                                    <td class="text-center">{!! $routine->pm_2 !!}</td>
                                                    <td class="text-center">{!! $routine->pm_3 !!}</td>
                                                    <td class="text-center">{!! $routine->pm_4 !!}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>                                    
                                    </div>
                                </div>
                            @else
                                 No Data Found
                            @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->


          

@stop