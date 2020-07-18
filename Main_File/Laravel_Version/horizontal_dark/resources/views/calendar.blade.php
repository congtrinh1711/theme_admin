@extends('layouts.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/calendar/clndr.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Default Calendar</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">Default Calendar</li>
								</ol>
							</div>
							<div class="ml-auto pageheader-btn">
								<a href="#" class="btn btn-success btn-icon text-white mr-2">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add Account
								</a>
								<a href="#" class="btn btn-danger btn-icon text-white">
									<span>
										<i class="fe fe-log-in"></i>
									</span> Export
								</a>
							</div>
						</div>
						<!-- PAGE-HEADER END -->
@endsection
@section('content')
						<!-- ROW OPEN-->
						<div class="">
							<div class="card">
								<div class="card-body">
									<div class="cal1"></div>
								</div>
							</div>
						</div>
						<!-- ROW CLOSE-->
					</div>
				</div>
				<!-- CONTAINER CLOSE-->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/calendar/underscore-min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/calendar/moment.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/calendar/clndr.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/calendar/demo.js') }}"></script>
@endsection