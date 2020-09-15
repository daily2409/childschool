@extends('Home.Layout.Master')
@section('title')
	new 
@endsection

@section('title-page')
	New
@endsection

@section('description-page')
	Giải pháp công nghệ toàn diện cho doanh nghiệp
@endsection
@section('content')
		@include('Home.Layout.BannerPage')
		
		<div class="blog blog_sidebar blog_grid_2">
			<div class="container">
				<div class="padding-100"></div>
				<div class="blog-listing blog_small_thumb right_sidebar">
					<div class="row">						
					<!-- Content Area -->
						<div class="col-md-8 col-sm-8 content-area">
							<article class="type-post image-post">
								<div class="row">
									<div class="col-md-5 col-sm-12">
										<div class="entry-cover">
											<a title="Cover" href="#"><img width="570" height="294" alt="bloggrid" src="http://placehold.it/303x156/ddd"></a>
										</div>	
									</div>	
									<div class="col-md-7 col-sm-12">
										<div class="entry-contentbox">
											<div class="entry-title">
												<a title="Your title of single post with image" href="#"><h3>Your title of single post with image</h3></a>
											</div>
											<div class="post-meta">
												<span class="post-date"><a href="#" title="june 21, 2015">june 21, 2015</a></span>
												<span class="post-by">By<a href="#" title="Admin">Admin</a></span>
												<span class="post-category">In<a href="#" title="Print">Print</a></span>
											</div>
											<div class="entry-content">
												<p>Praesent eu massa vel diam laoreet elementum acuti pratanos tuxi sed felis. Donec suscipit ultricies risus...</p>
											</div>
											<a href="#" title="Read More">Read More<span class="arrow_right" aria-hidden="true"></span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="type-post gallery-post">
								<div class="row">
									<div class="col-md-5 col-sm-12">
										<div class="entry-cover">
											<div id="blog-carousel" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner" role="listbox">
													<div class="item active">
														<a title="Cover" href="#"><img width="570" height="294" alt="bloggrid" src="http://placehold.it/303x156/ddd"></a>
													</div>
													<div class="item">
														<a title="Cover" href="#"><img width="570" height="294" alt="bloggrid" src="http://placehold.it/303x156/000"></a>
													</div>
													<div class="item">
														<a title="Cover" href="#"><img width="570" height="294" alt="bloggrid" src="http://placehold.it/303x156/ddd"></a>
													</div>
												</div>
												<a class="left carousel-control" href="#blog-carousel" role="button" data-slide="prev">
													<span class="arrow_carrot-left" aria-hidden="true"></span>
												</a>
												<a class="right carousel-control" href="#blog-carousel" role="button" data-slide="next">
													<span class="arrow_carrot-right" aria-hidden="true"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="col-md-7 col-sm-12">
										<div class="entry-contentbox">
											<div class="entry-title">
												<a title="Your title of single post with gallery" href="#"><h3>Your title of single post with gallery</h3></a>
											</div>
											<div class="post-meta">
												<span class="post-date"><a href="#" title="june 21, 2015">june 21, 2015</a></span>
												<span class="post-by">By<a href="#" title="Admin">Admin</a></span>
												<span class="post-category">In<a href="#" title="Print">Print</a></span>
											</div>
											<div class="entry-content">
												<p>Praesent eu massa vel diam laoreet elementum acuti pratanos tuxi sed felis. Donec suscipit ultricies risus...</p>
											</div>
											<a href="#" title="Read More">Read More<span class="arrow_right" aria-hidden="true"></span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="type-post video-post">
								<div class="row">
									<div class="col-md-5 col-sm-12">
										<div class="entry-cover">
											<iframe src="http://www.youtube.com/embed/u-as86FjVZY?hd=1&wmode=opaque&controls=1&showinfo=0"></iframe>
										</div>
									</div>
									<div class="col-md-7 col-sm-12">	
										<div class="entry-contentbox">
											<div class="entry-title">
												<a title="Your title of single post with video" href="#"><h3>Your title of single post with video</h3></a>
											</div>
											<div class="post-meta">
												<span class="post-date"><a href="#" title="june 21, 2015">june 21, 2015</a></span>
												<span class="post-by">By<a href="#" title="Admin">Admin</a></span>
												<span class="post-category">In<a href="#" title="Print">Print</a></span>
											</div>
											<div class="entry-content">
												<p>Praesent eu massa vel diam laoreet elementum acuti pratanos tuxi sed felis. Donec suscipit ultricies risus...</p>
											</div>
											<a href="#" title="Read More">Read More<span class="arrow_right" aria-hidden="true"></span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="type-post video-post">
								<div class="row">
									<div class="col-md-5 col-sm-12">
										<div class="entry-cover">
											<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/149578188&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
										</div>
									</div>
									<div class="col-md-7 col-sm-12">	
										<div class="entry-contentbox">
											<div class="entry-title">
												<a title="Your title of single post with video" href="#"><h3>Your title of single post with video</h3></a>
											</div>
											<div class="post-meta">
												<span class="post-date"><a href="#" title="june 21, 2015">june 21, 2015</a></span>
												<span class="post-by">By<a href="#" title="Admin">Admin</a></span>
												<span class="post-category">In<a href="#" title="Print">Print</a></span>
											</div>
											<div class="entry-content">
												<p>Praesent eu massa vel diam laoreet elementum acuti pratanos tuxi sed felis. Donec suscipit ultricies risus...</p>
											</div>
											<a href="#" title="Read More">Read More<span class="arrow_right" aria-hidden="true"></span></a>
										</div>
									</div>
								</div>
							</article>
							<article class="type-post title-post">
								<div class="row">
									<div class="col-md-5 col-sm-12">
										<div class="entry-cover">
											<a title="Cover" href="#"><img alt="bloggrid" src="http://placehold.it/303x156/ddd"></a>
											<h3>Title text link <span>http://www.yourdomainn.com</span> </h3>
										</div>	
									</div>	
									<div class="col-md-7 col-sm-12">
										<div class="entry-contentbox">
											<div class="entry-title">
												<a title="Your title of single post with text link" href="#"><h3>Your title of single post with text link</h3></a>
											</div>
											<div class="post-meta">
												<span class="post-date"><a href="#" title="june 21, 2015">june 21, 2015</a></span>
												<span class="post-by">By<a href="#" title="Admin">Admin</a></span>
												<span class="post-category">In<a href="#" title="Print">Print</a></span>
											</div>
											<div class="entry-content">
												<p>Praesent eu massa vel diam laoreet elementum acuti pratanos tuxi sed felis. Donec suscipit ultricies risus...</p>
											</div>
											<a href="#" title="Read More">Read More<span class="arrow_right" aria-hidden="true"></span></a>
										</div>
									</div>
								</div>
							</article>
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