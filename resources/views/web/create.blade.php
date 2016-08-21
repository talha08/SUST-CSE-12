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

							<center>
								<a  href="{!! route('web.index')!!}"><button class="btn btn-success btn-sm ">View all Team</button></a>
							</center>
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




