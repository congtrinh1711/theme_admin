@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">C3 Bar Charts</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Charts</a></li>
									<li class="breadcrumb-item active" aria-current="page">C3 Bar Charts</li>
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
<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">combination of bar & line chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-combination" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Single Bar chart </h3>
									</div>
									<div class="card-body">
										<div id="chart-monthly" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Bar Chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-bar-stacked" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multiple Bar chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-bar" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-2 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Horizontal Bar chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-bar-rotated" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Area-spline filled chart</h3>
									</div>
									<div class="card-body">
										<div id="chart-tasks" class="chartsh"></div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-3 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>@endsection
@section('js')
<script src="{{ URL::asset('assets/js/charts.js') }}"></script>
<script src="{{ URL::asset('assets/js/index.js') }}"></script>
@endsection