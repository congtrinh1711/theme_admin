@extends('layouts.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/fullcalendar/fullcalendar.print.min.css')}}" rel="stylesheet" media='print'>
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Full Calendar</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">Full Calendar</li>
								</ol>
							</div>
							<div class="mr-auto pageheader-btn">
								<a href="#" class="btn btn-success btn-icon text-white">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add Account
								</a>
								<a href="#" class="btn btn-danger btn-icon text-white mr-2">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Export
								</a>
							</div>
						</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW OPEN -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Default Calendar</h3>
									</div>
									<div class="card-body">
										<div id='calendar1'></div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List Calendar</h3>
									</div>
									<div class="card-body">
										<div id='calendar'></div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Calender With different Color Events</h3>
									</div>
									<div class="card-body">
										<div id='calendar2'></div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/fullcalendar/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fullcalendar/jquery-ui.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/fullcalendar.js') }}"></script>
@endsection