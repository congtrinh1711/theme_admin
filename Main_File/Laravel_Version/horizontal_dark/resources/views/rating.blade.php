@extends('layouts.master')
@section('css')
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/ion.rangeSlider/css/ion.rangeSlider.skinSimple.css')}}" rel="stylesheet">
@endsection
@section('page-header')
						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">Ratings</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Components</a></li>
									<li class="breadcrumb-item active" aria-current="page">Ratings</li>
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
						<!-- ROW-1 OPEN -->
						<div class="row row-cards">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Star Rating</h3>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="rating">
											<input type="number" readonly="readonly" class="rating-value" name="rating-stars-value" id="rating-stars-value" value="1">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Heart Rating</h3>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="another-rating">
											<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value" value="2">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multi Star Rating</h3>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="more-rating">
											<input type="number" readonly="readonly" class="rating-value" name="more-rating-stars-value" id="more-rating-stars-value" value="2">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Multi Heart Rating</h3>
									</div>
									<div class="card-body">
										<div class="rating-stars block" id="another-rating1">
											<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value2" value="4">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- ROW-1 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>
@endsection
@section('js')
@endsection