@extends('layouts.default')
  @section('content')  
    @include('includes.alert')
        <div class="page-title"> 
        	<h3 class="title">Widgets</h3> 
        </div>
        <!-- Slider/ Carousel -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-body p-0">
                                <div class="velonic-carousel">
                                    <div id="velonic-slider" class="owl-carousel">
                                    @if(count($notices))
                                        @foreach ($notices as $notice)
                                        <div class="item">
                                            <h4><a href="#">{{ $notice->head }}</a></h4>
                                            <p class="small">{{ $notice->created_at->diffForHumans() }}</p>
                                            <p class="m-t-30"><em>{{ $notice->body }}</em></p>
                                            <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                        </div><!-- /.item -->
                                        @endforeach
<<<<<<< HEAD
=======

                                        <!-- <div class="item">
                                            <h4><a href="#">Hey! Welcome to Velonic</a></h4>
                                            <p class="small">02 April, 2015</p>
                                            <p class="m-t-30"><em>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</em></p>
                                            <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                        </div>

                                        <div class="item">
                                            <h4><a href="#">Hey! Welcome to Velonic</a></h4>
                                            <p class="small">02 April, 2015</p>
                                            <p class="m-t-30"><em>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</em></p>
                                            <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                        </div> -->
>>>>>>> refs/remotes/origin/masiur
                                    @else
                                        No Project added yet. Be first to add a project
                                    @endif
                                    </div><!-- /#tiles-slide-1 -->
                                </div><!-- /.panel-body -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-default text-center text-white slider-bg">
                            <div class="slider-overlay br-radius"></div>
                            <div class="panel-body p-0">
                                <div class="velonic-carousel">
                                    <div id="velonic-slider-2" class="owl-carousel">
                                    @if(count($notices))
                                        @foreach ($notices as $notice)
                                        <div class="item">
                                            <h4><a href="#">{{ $notice->head }}</a></h4>
                                            <p class="small">{{ $notice->created_at->diffForHumans() }}</p>
                                            <p class="m-t-30"><em>{{ $notice->body }}</em></p>
                                            <button class="btn btn-warning btn-sm m-t-40">Read more</button>
                                        </div><!-- /.item -->
                                        @endforeach

<<<<<<< HEAD
=======
                                        <!-- <div class="item">
                                            <h4 class="text-white"><b>Hey! Welcome to Velonic</b></h4>
                                            <p class="small">02 April, 2015</p>
                                            <p class="m-t-30"><em>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</em></p>
                                            <button class="btn btn-warning btn-sm m-t-40">Read more</button> -->
                                        <!-- </div>/.item -->

                                        <!-- <div class="item">
                                            <h4 class="text-white"><b>Hey! Welcome to Velonic</b></h4>
                                            <p class="small">02 April, 2015</p>
                                            <p class="m-t-30"><em>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</em></p>
                                            <button class="btn btn-warning btn-sm m-t-40">Read more</button> -->
>>>>>>> refs/remotes/origin/masiur
                                     @else
                                        No Project added yet. Be first to add a project
                                    @endif   <!-- </div>/.item -->
                                    </div><!-- /#tiles-slide-2 -->
                                </div>
                            </div> <!-- panel-body -->
                        </div><!-- Panel -->
                    </div> <!-- col-->

                </div>  <!-- End row -->
            <div id="calendar"></div>
      
    
@stop
@section('style')
        <!-- Plugins css -->		
		{!! Html::style('assets/owl-carousel/owl.carousel.css') !!}
        {!! Html::style('calendar/css/calendar.css') !!}

@endsection

@section('script')

        <!-- owl-carousel --> 
    {!! Html::script('assets/owl-carousel/owl.carousel.js') !!}
    {!! Html::script('calendar/js/vendor/underscore-min.js') !!}
    {!! Html::script('calendar/js/calendar.js') !!}
        <script type="text/javascript">
            jQuery(document).ready(function($) {
        		//owl carousel
                $("#velonic-slider,#velonic-slider-2").owlCarousel({
                    navigation : true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    autoPlay:true
                });
                var calendar = $("#calendar").calendar(
                {
                    tmpl_path: "calendar/tmpls/",
                    events_source: function () { return []; }
                });
            });
        </script>   
@endsection