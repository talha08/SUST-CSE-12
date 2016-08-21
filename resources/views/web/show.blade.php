@include('includes.header')
<div class="wraper container-fluid">



			<!-- Abu talha -->
	<div class="row">
		<div class="col-sm-offset-3 col-md-6">
			<div class="panel panel-default">

				<div class="panel-heading col-">
					<div class="row">
						<div class="page-title text-center">
							<h3 class="title">{!!$title!!}</h3>
							<br/>
							<h6>@include('includes.alert')</h6>
						</div>
						<br>
						<center>
						<div class="page-title">
							<a class="pull-in" href="{!! route('web.index')!!}"><button class="btn btn-success">View all Team</button></a>
						</div>
						</center>
					</div>
				</div>


			</div>

		</div>

	</div>



@include('web.footer')