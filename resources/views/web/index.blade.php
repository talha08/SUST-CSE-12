@include('includes.header')
<div class="wraper container-fluid">

	@include('includes.alert')

			<!-- Abu talha -->
	<div class="row">
		<div class="col-sm-offset-2 col-md-8">
			<div class="panel panel-default">

				<div class="panel-heading col-">
					<div class="row">
						<div class="page-title text-center">
							<h2>Web Engineering (CSE-446)</h2>
							<h3 class="title">{!!$title!!}</h3>
							<h6>Session - 2012-13</h6>
						</div>

						{{--<div class="page-title">--}}
						{{--<a class="pull-right" href="{!! route('web.index')!!}"><button class="btn btn-success">Team List</button></a>--}}
						{{--</div>--}}
					</div>
				</div>
				


				<div class="panel-body ">

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							@if(count($webs))
								<table  id="dataTable" class="table table-striped table-bordered">
									<thead>
									<tr>
										<th class="col-md-1">Team No.</th>
										<th>Member-1</th>
										<th>Reg-1</th>
										<th>Member-2</th>
										<th>Reg-2</th>
									</tr>
									</thead>
									<tbody>
									@foreach ($webs as $web)
										<tr>
											<td>{!! $web->id !!}</td>
											<td>{!! $web->name1 !!}</td>
											<td>{!! $web->reg1 !!}</td>
											<td>{!! $web->name2 !!}</td>
											<td>{!! $web->reg2 !!}</td>

										</tr>

									@endforeach
									</tbody>
								</table>
							@else

								<h3 class="text-center"> No Information added yet. Be first to add your Team Information</h3>
							@endif
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>









@include('web.footer')
