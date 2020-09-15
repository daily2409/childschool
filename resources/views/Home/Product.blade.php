@extends('Home.Layout.Master')
@section('title')
	Sản phẩm
@endsection

@section('title-page')
	Sản phẩm
@endsection

@section('description-page')
	Giải pháp công nghệ toàn diện cho doanh nghiệp
@endsection
@section('content')
		@include('Home.Layout.BannerPage')
		
		<div class="portfolio-section latest-portfolio container-fluid no-padding" id="portfolio-section">
			<div class="padding-100"></div>
			<div class="container">
				<div class="section-header section-header2 section-header4 text-center">
					<h3>Sản phẩm</h3>
				</div>
				<div class="section-header">
					<!-- Portfolio Filters --> 
					<ul id="filters" class="portfolio-categories no-left-padding sorting-menu">
						<li><a data-filter="*" class="active" href="#">ALL</a></li>
						<li><a data-filter=".branding" href="#">Giải pháp phi tập trung</a></li>
						<li><a data-filter=".webdesign" href="#">Game/App</a></li>
						<li><a data-filter=".3d" href="#">Website</a></li>
					</ul><!-- / Portfolio Filters -->
				</div>
			</div>
			
		
			<ul class="portfolio-list portfolio-mansory portfolio-mansory-4" style="position: relative; height: 1007.09px;">
				<li class="col-md-3 col-sm-4 col-xs-6 3d" style="position: absolute; left: 0px; top: 0px;">
					<div class="portfolio-image-block">
						<a href="http://placehold.it/443x494" class="portfolio-title">
							<img src="http://placehold.it/443x494" alt="work 1">
							<div class="portfolio-block-hover">
								<h5>knight belt</h5>
								<span>Photography</span>
							</div>
						</a>
					</div>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 motion webdesign" style="position: absolute; left: 465px; top: 0px;">
					<div class="portfolio-image-block">
						<a href="http://placehold.it/443x284" class="portfolio-title">
							<img src="http://placehold.it/443x284" alt="work 2">
							<div class="portfolio-block-hover">
								<h5>APP That Works</h5>
								<span>Photography</span>
							</div>
						</a>
					</div>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 branding" style="position: absolute; left: 930px; top: 0px;">
					<div class="portfolio-image-block">
						<a href="http://placehold.it/443x366" class="portfolio-title">
							<img src="http://placehold.it/443x366" alt="work 7">
							<div class="portfolio-block-hover">
								<h5>design</h5>
								<span>3D</span><span>Montions</span>
							</div>
						</a>							
					</div>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 prints webdesign" style="position: absolute; left: 1395px; top: 0px;">
					<div class="portfolio-image-block">
						<a href="http://placehold.it/443x366" class="portfolio-title">
							<img src="http://placehold.it/443x366" alt="work 3">
							<div class="portfolio-block-hover">
								<h5>website mockup </h5>
								<span>Web Design</span>
							</div>
						</a>
					</div>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 3d webdesign" style="position: absolute; left: 465px; top: 308px;">
					<div class="portfolio-image-block">
						<a href="http://placehold.it/443x366" class="portfolio-title">
							<img src="http://placehold.it/443x366" alt="work 4">
							<div class="portfolio-block-hover">
								<h5>best layout</h5>
								<span>Photography</span>
							</div>
						</a>
					</div>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 motion" style="position: absolute; left: 930px; top: 389px;">
					<div class="portfolio-image-block">
						<a href="http://placehold.it/443x567" class="portfolio-title">
							<img src="http://placehold.it/443x567" alt="work 5">
							<div class="portfolio-block-hover">
								<h5>book grid </h5>
								<span>Prints</span>
							</div>
						</a>
					</div>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 branding webdesign" style="position: absolute; left: 1395px; top: 389px;">
					<div class="portfolio-image-block">
						<a href="http://placehold.it/443x515" class="portfolio-title">
							<img src="http://placehold.it/443x515" alt="work 6">
							<div class="portfolio-block-hover">
								<h5>the moment</h5>
								<span>Photography</span>
							</div>
						</a>
					</div>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 prints" style="position: absolute; left: 0px; top: 515px;">
					<div class="portfolio-image-block">
						<a href="http://placehold.it/443x366" class="portfolio-title">
							<img src="http://placehold.it/443x366" alt="work7">
							<div class="portfolio-block-hover">
								<h5>knight fashion </h5>
								<span>Branding</span>
							</div>
						</a>
					</div>
				</li>
				<li class="col-md-3 col-sm-4 col-xs-6 prints" style="position: absolute; left: 465px; top: 698px;">
					<div class="portfolio-image-block">
						<a href="http://placehold.it/443x284" class="portfolio-title">
							<img src="http://placehold.it/443x284" alt="work7">
							<div class="portfolio-block-hover">
								<h5>knight fashion </h5>
								<span>Branding</span>
							</div>
						</a>
					</div>
				</li>
			</ul>
<!--
			<div class="loadmore">
				<a href="#" title="see all projects">see all projects <i class="arrow_right"></i></a>
			</div>
-->
			<div class="padding-50"></div>
		</div>
@endsection