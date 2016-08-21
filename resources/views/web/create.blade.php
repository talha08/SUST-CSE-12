@include('includes.header')
	<div class="wraper container-fluid">



		<!-- Abu talha -->
		<div class="row">
			<div class="col-sm-offset-3 col-md-6">
				<div class="panel panel-default">

					<div class="panel-heading col-">
						<div class="row">
							<div class="page-title text-center">
								<h1>Web Engineering </h1>
								<h5>(Team for Project)</h5>
								<h3 class="title">{!!$title!!}</h3>
							</div>

							{{--<div class="page-title">--}}
								{{--<a class="pull-right" href="{!! route('web.index')!!}"><button class="btn btn-success">Team List</button></a>--}}
							{{--</div>--}}
						</div>
					</div>
					<br>
					@include('includes.alert')
					<div class="panel-body ">

						<div class="form ">

							{!! Form::open(array('route' => 'web.store', 'novalidate' => 'novalidate' , 'method' => 'post', 'class' => 'cmxform form-horizontal tasi-form')) !!}


							<div class="form-group">
								{!! Form::label('name1', "First Member Name *", array('class' => 'control-label col-lg-2')) !!}
								<div class="col-lg-10">
									{!! Form::text('name1', null, array('class' => 'form-control', 'placeholder' => 'First Member Name', 'required' => 'required', 'aria-required' =>'true')) !!}
								</div>
							</div>


							<div class="form-group">
								{!! Form::label('reg1', "First Member Registration *", array('class' => 'control-label col-lg-2')) !!}
								<div class="col-lg-10">
									{!! Form::text('reg1', null, array('class' => 'form-control', 'placeholder' => 'First Member Registration', 'required' => 'required', 'aria-required' =>'true')) !!}
								</div>
							</div>


							<div class="form-group">
								{!! Form::label('name2', "Second Member Name *", array('class' => 'control-label col-lg-2')) !!}
								<div class="col-lg-10">
									{!! Form::text('name2',null,  array('class' => 'summernote form-control', 'placeholder' => 'Second Member Name', 'required' => '', 'aria-required' =>false)) !!}
								</div>
							</div>

							<div class="form-group">
								{!! Form::label('reg2', "Second Member Registration *", array('class' => 'control-label col-lg-2')) !!}
								<div class="col-lg-10">
									{!! Form::text('reg2',null,  array('class' => 'summernote form-control', 'placeholder' => 'Second Member Registration', 'required' => '', 'aria-required' =>false)) !!}
								</div>
							</div>


							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									{!! Form::submit('Submit', array('class' => 'btn btn-success m-l-10')) !!}
								</div>
							</div>

							{!! Form::close() !!}
						</div>

					</div>
				</div>

			</div>

		</div>

		@include('web.footer')


		@section('style')

		{!! Html::style('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css') !!}
		{!! Html::style('assets/summernote/summernote.css') !!}
		@stop

		@section('script')

		{!! Html::script('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js') !!}
		{!! Html::script('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js') !!}
		{!! Html::script('assets/summernote/summernote.min.js') !!}


		{!! Html::script('assets/jquery.validate/jquery.validate.min.js') !!}
		{!! Html::script('assets/jquery.validate/form-validation-init.js') !!}



				<!-- for editor-->
		<script type="text/javascript">

			jQuery(document).ready(function(){

				$('.wysihtml5').wysihtml5();

				$('.summernote').summernote({
					height: 200,                 // set editor height

					minHeight: null,             // set minimum height of editor
					maxHeight: null,             // set maximum height of editor

					focus: true                 // set focus to editable area after initializing summernote
				});

			});
		</script>


@stop