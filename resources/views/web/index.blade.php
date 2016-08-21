@include('includes.header')
<div class="wraper container-fluid">

	@include('includes.alert')

			<!-- Abu talha -->
	<div class="row">
		<div class="col-sm-offset-3 col-md-6">
			<div class="panel panel-default">

				<div class="panel-heading col-">
					<div class="row">
						<div class="page-title text-center">
							<h3 class="title">{!!$title!!}</h3>
						</div>

						{{--<div class="page-title">--}}
						{{--<a class="pull-right" href="{!! route('web.index')!!}"><button class="btn btn-success">Team List</button></a>--}}
						{{--</div>--}}
					</div>
				</div>
				<br>


				<div class="panel-body ">

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							@if(count($webs))
								<table  id="dataTable" class="table table-striped table-bordered">
									<thead>
									<tr>
										<th>Team No.</th>
										<th>Member1</th>
										<th>Reg1</th>
										<th>Member2</th>
										<th>Reg2</th>
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
								No Notice added yet. Be first to add a notice
							@endif
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>









@include('web.footer')
