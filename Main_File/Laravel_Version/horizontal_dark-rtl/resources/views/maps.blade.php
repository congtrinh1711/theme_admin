@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Maps</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Maps</li>
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
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic</h3>
									</div>
									<div class="card-body">

										<div class="map-header">
											<div class="map-header-layer" id="map"></div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Custom Map</h3>
									</div>
									<div class="card-body">
										<div class="map-header">
											<div class="map-header-layer" id="map2"></div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-2 OPEN -->
						<div class="row row-cards">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Static Maps</h3>
									</div>
									<div class="card-map card-map-placeholder cover-image" data-image-src="{{URL::asset('assets/images/pngs/staticmap.png')}}"></div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multiple locations</h3>
									</div>
									<div class="card-map" id="map3"></div>
								</div>
							</div><!-- COL END -->
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">locations With route</h3>
									</div>
									<div class="card-body">
										<div class="map">
											<div class="map-content" id="map4"></div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">locations With route2</h3>
									</div>
									<div class="card-body">
										<div class="map">
											<div class="map-content" id="map5"></div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-2 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/plugins/maps-google/jquery.googlemap.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/maps-google/map.js') }}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyAykAdIIsNMu0V2wyGOMQcguo8zKngWlyM"></script>
@endsection