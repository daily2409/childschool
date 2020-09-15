@extends('Home.Layout.Master')
@section('title')
	new detail
@endsection

@section('title-page')
	Detail
@endsection

@section('description-page')
	Giải pháp công nghệ toàn diện cho doanh nghiệp
@endsection
@section('content')
		@include('Home.Layout.BannerPage')
		
		<div class="blog blog_sidebar blog_grid_2 blogpost sidebar">
			<div class="container">
				<div class="padding-100"></div>
					<div class="blog-listing right_sidebar">
					<div class="row">						
						<!-- Content Area -->
						<div class="col-md-8 col-sm-8 content-area">
							<article class="type-post image-post">
								<div class="entry-cover">
									<img alt="bloggrid" src="http://placehold.it/770x398/ddd">
								</div>	
								<div class="entry-contentbox">
									<div class="post-meta">
										<span class="post-date">Posted at<a href="#" title="june 21, 2015">june 21, 2015</a></span>
										<span class="post-by">By<a href="#" title="Admin">Admin</a></span>
										<span class="post-category">In<a href="#" title="Print">Print</a></span>
									</div>
									<div class="entry-content">
										<b>Morbi et accumsan est, non convallis metus. Etiam faucibus, leo et scelerisque facilisis, magna erat dictum nibh, vel congue tortor massa vitae magna. </b>
										<p>Quisque sagittis nisl sit amet nulla rutrum ultrices. Vivamus ut sagittis ligula, sit amet fermentum dolor. Mauris accumsan neque ut odio tempor semper ac vitae ligula. Morbi viverra tincidunt nisl, eget placerat erat. Morbi ornare mollis quam, sit amet vestibulum erat pharetra vitae:</p>
										<ul>
											<li>Consectetur adipiscing elit vtae elit libero</li>
											<li>Nullam id dolor id eget lacinia odio posuere erat a ante</li>
											<li>Integer posuere erat dapibus posuere velit</li>
										</ul>
										<p>Nulla sed mi leo, sit amet molestie nulla. Phasellus lobortis blandit ipsum, at adipiscing eros porta quis. Phasellus in nisi ipsum, quis dapibus magna. <span>@Phasellus odio dolor</span>, pretium sit amet aliquam a, gravida eget dui. Pellentesque eu ipsum et quam faucibus scelerisque vitae ut ligula. Ut luctus fermentum commodo. Mauris eget justo turpis, eget</p>
										<blockquote>   Proin rhoncus semper sem nec aliquet. Aenean lacinia bibendum nulla sed consectetur mattis consectetur purus sit amet.<span class="icon_quotations" aria-hidden="true"></span>	</blockquote>
										<p>Morbi viverra tincidunt nisl, eget placerat erat. Morbi ornare mollis quam, sit amet vestibulum erat pharetra vitae. Vivamus ut sagittis ligula, sit amet fermentum dolor. Crumsi oshine dolor.</p>
									</div>
								</div>
								<div class="tags">
									<h3 class="block-title">Tags :</h3>
									<ul>
										<li><a href="#" title="mazing">mazing</a></li>
										<li><a href="#" title="Envato">Envato</a></li>
										<li><a href="#" title="Themeforest">Themeforest</a></li>
										<li><a href="#" title="WordPress">WordPress</a></li>
										<li><a href="#" title="Knight">Knight</a></li>
										<li><a href="#" title="Logan">Logan</a></li>
									</ul>
								</div>
							</article>
							
							<div class="related-post">
								<h3 class="block-title">Related Post</h3>
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<article class="type-post image-post">
											<div class="entry-cover">
												<a title="Cover" href="#"><img alt="bloggrid" src="http://placehold.it/370x191/000"></a>
											</div>	
											<div class="entry-contentbox">
												<div class="entry-title">
													<a title="Single post with image" href="#"><h3>Single post with image</h3></a>
												</div>
												<div class="post-meta">
													<span class="post-date"><a href="#" title="june 21, 2015">june 21, 2015</a></span>
													<span class="post-by">By<a href="#" title="Admin">Admin</a></span>
													<span class="post-category">In<a href="#" title="Print">Print</a></span>
												</div>
											</div>
										</article>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<article class="type-post image-post">
											<div class="entry-cover">
												<a title="Cover" href="#"><img alt="bloggrid" src="http://placehold.it/370x191/ddd"></a>
											</div>	
											<div class="entry-contentbox">
												<div class="entry-title">
													<a title="Single post with image" href="#"><h3>Single post with image</h3></a>
												</div>
												<div class="post-meta">
													<span class="post-date"><a href="#" title="june 21, 2015">june 21, 2015</a></span>
													<span class="post-by">By<a href="#" title="Admin">Admin</a></span>
													<span class="post-category">In<a href="#" title="Print">Print</a></span>
												</div>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-4 col-xs-12 widget-area">
							<aside class="widget widget-search">
								<h3 class="widget-title">Search</h3>
								<div class="input-group">
									<input type="text" placeholder="Type & Hit Enter..." class="form-control">
								</div>
							</aside>
							<aside class="widget widget_categories">
								<h3 class="widget-title">Categories</h3>
								<ul>
									<li><a title="Business" href="#">Business<span>(05)</span></a></li>
									<li><a title="Design" href="#">Design<span>(07)</span></a></li>
									<li><a title="Print" href="#">Print<span>(12)</span></a></li>
									<li><a title="Photography" href="#">Photography<span>(08)</span></a></li>
									<li><a title="3d Animation" href="#">3d Animation<span>(17)</span></a></li>
								</ul>
							</aside>
							<aside class="widget widget_recent">
								<h3 class="widget-title">Recent Post</h3>
								<div class="recent-contentbox">
									<a href="#" title="recent-thumb"><img src="http://placehold.it/79x64/ddd" alt="recent_post" width="79" height="64"/></a>
									<h3><a href="#" title="Fashion in Country">Fashion in Country</a></h3>
									<a href="#">July 14th, 2015</a>
								</div>
								<div class="recent-contentbox">
									<a href="#" title="recent-thumb"><img src="http://placehold.it/79x64/000" alt="recent_post" width="79" height="64"/></a>
									<h3><a href="#" title="Content is King">" Content is King "</a></h3>
									<a href="#">July 08th, 2015</a>
								</div>
								<div class="recent-contentbox">
									<a href="#" title="recent-thumb"><img src="http://placehold.it/79x64/ddd" alt="recent_post" width="79" height="64"/></a>
									<h3><a href="#" title="Don’t look down !">Don’t look down !</a></h3>
									<a href="#">July 05th, 2015</a>
								</div>
							</aside>
							<aside class="widget widget_tags">
								<h3 class="widget-title">Popular tags</h3>
								<div class="tag-boxes">
									<a title="Amazing" href="#">Amazing</a>
									<a title="Envato" href="#">Envato</a>
									<a title="Premium" href="#">Premium</a>
									<a title="Clean" href="#">Clean</a>
									<a title="Wordpress" href="#">Wordpress</a>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection