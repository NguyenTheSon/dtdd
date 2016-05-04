@extends('user.master3')
@section('title','Khuyến mãi')
@section('content')
<section id="columns">
<div id="breadcrumb"><ol class="breadcrumb container">
		<li><a href="http://localhost/shop/index.php?route=common/home"><span>Trang chủ</span></a></li>
		<li><a href="http://localhost/shop/index.php?route=pavblog/category&amp;id=27"><span>Tin khuyến mãi</span></a></li>
	</ol></div><div class="container">
<div class="row">
			<aside class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div id="column-left" class="sidebar">
			<div class="box highlights">
	<div class="box-heading"><span>Blog Category</span></div>
	<div class="box-content" id="pav-categorymenu">
		<ul class="level1 pav-category "><li ><a href="http://localhost/shop/index.php?route=pavblog/category&amp;id=25" title="Bản tin công nghệ">Bản tin công nghệ</a></li><li ><a href="http://localhost/shop/index.php?route=pavblog/category&amp;id=26" title="Cafe công nghệ">Cafe công nghệ</a></li><li ><a href="http://localhost/shop/index.php?route=pavblog/category&amp;id=27" title="Tin khuyến mãi">Tin khuyến mãi</a></li></ul>	</div>
 </div>
<script>
$(document).ready(function(){
// applying the settings
$("#pav-categorymenu li.active span.head").addClass("selected");
	$('#pav-categorymenu ul').Accordion({
		active: 'span.selected',
		header: 'span.head',
		alwaysOpen: false,
		animated: true,
		showSpeed: 400,
		hideSpeed: 800,
		event: 'click'
	});
});

</script>			<div class="box pavblogs-comments-box">
	<div class="box-heading"><span>Latest Comments</span></div>
	<div class="box-content padding">
		<div class="clearfix">
						<div class="pavblog-comments">
								<div class="pav-comment media">
					<a class="pull-left" href="http://localhost/shop/index.php?route=pavblog/blog&amp;id=16#comment2" title="Trương Tuấn Anh">
						<img src="http://www.gravatar.com/avatar/47ab15f43a453d647519f1d6c82de1a8?d=&amp;s=60" class="media-object img-responsive"/>
					</a>
					<div class="media-body">
						<p class="comment">đạt</p>
						<span class="comment-author">Posted By Trương Tuấn Anh...</span>
					</div>					
				</div>
								<div class="pav-comment media">
					<a class="pull-left" href="http://localhost/shop/index.php?route=pavblog/blog&amp;id=16#comment1" title="Phạm Văn Tiến">
						<img src="http://www.gravatar.com/avatar/ed62522432ecc0d68118dbb9563170e5?d=&amp;s=60" class="media-object img-responsive"/>
					</a>
					<div class="media-body">
						<p class="comment">hất chuyến du lịch đây!</p>
						<span class="comment-author">Posted By Phạm Văn Tiến...</span>
					</div>					
				</div>
							</div>
					</div>
	</div>
</div>
	</div>		</aside>	
	 
	<section class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
		<div id="content">
						<header class="pav-header">
				<h1>Tin khuyến mãi</h1>
				<a class="rss-wrapper" href="http://localhost/shop/index.php?route=pavblog/category/rss&amp;id=27"><span class="fa fa-feed"></span></a>	
			</header>  
			<section class="pav-category wrapper blog-wrapper">
							
				<div class="pav-blogs">
											<div class="leading-blogs row">
														<div class="col-lg-12 col-sm-12 col-xs-12">
							<article class="blog-item">	
		<figure class="blog-body image">						
		<img src="http://localhost/shop/image/cache/data/blog/noel2015-818x400w.jpg" title="Khuyến Mại Lớn Chào Đón Noel và Năm Mới 2015" alt="Khuyến Mại Lớn Chào Đón Noel và Năm Mới 2015" class="img-responsive" />
	</figure>	
		
			
	
		<header class="blog-header clearfix">
			<span class="created">
			<span class="day">23</span>
			<span class="month">Nov</span> /
			<span class="month">2014</span>
		</span>
		<h4 class="blog-title"><a href="http://localhost/shop/index.php?route=pavblog/blog&amp;id=15" title="Khuyến Mại Lớn Chào Đón Noel và Năm Mới 2015">Khuyến Mại Lớn Chào Đón Noel và Năm Mới 2015</a></h4>
		</header>
	
	
	<footer>	
		<section class="blog-meta">
						<span class="author">
				<span><i class="fa fa-pencil"></i>Write By: </span> 
				<span class="t-color">11329003</span>
			</span>
						
						<span class="publishin">
				<span><i class="fa fa-thumb-tack"></i>Published In: </span>
				<a href="http://localhost/shop/index.php?route=pavblog/category&amp;id=27" class="t-color" title="Tin khuyến mãi">Tin khuyến mãi</a>
			</span>
						
						<span class="hits">
				<span><i class="fa fa-insert-template"></i>Hits: </span>
				<span class="t-color">3</span>
			</span>
						
						<span class="comment_count">
				<span><i class="fa fa-comment"></i>Comment: </span>
				<span class="t-color">0</span>
			</span>
					</section>
	
	
					
		<section class="description">
			<h2 style="font-size: 12px; color: rgb(0, 0, 255); position: relative; margin: 0px; padding: 0px; font-family: Arial; line-height: 26px; text-align: justify;">Nhân dịp Noel và Năm Mới 2015, chúng tôi&nbsp;đưa ra Chương trình "Noel - rinh quà" dành cho các khách hàng mua sản phẩm&nbsp;từ ngày 01/10 đến hết ngày 31/12.</h2>

<p>&nbsp;</p>
		</section>
			
				<section class="btn-more-link">
			<a href="http://localhost/shop/index.php?route=pavblog/blog&amp;id=15" class="readmore btn btn-theme-default">Read more</a>
		</section>
			
	
	</footer>	

</article>							</div>
															
																				</div>
					
											<div class="secondary row">						
														<div class="col-lg-12 col-sm-12 col-xs-12">
							<article class="blog-item">	
		<figure class="blog-body image">						
		<img src="http://localhost/shop/image/cache/data/blog/mung-sinh-nhat-818x400w.jpg" title="Mừng sinh nhật the-gioi-mobile.tk khuyến mãi Cực lớn!!!" alt="Mừng sinh nhật the-gioi-mobile.tk khuyến mãi Cực lớn!!!" class="img-responsive" />
	</figure>	
		
			
	
		<header class="blog-header clearfix">
			<span class="created">
			<span class="day">23</span>
			<span class="month">Nov</span> /
			<span class="month">2014</span>
		</span>
		<h4 class="blog-title"><a href="http://localhost/shop/index.php?route=pavblog/blog&amp;id=16" title="Mừng sinh nhật the-gioi-mobile.tk khuyến mãi Cực lớn!!!">Mừng sinh nhật the-gioi-mobile.tk khuyến mãi Cực lớn!!!</a></h4>
		</header>
	
	
	<footer>	
		<section class="blog-meta">
						<span class="author">
				<span><i class="fa fa-pencil"></i>Write By: </span> 
				<span class="t-color">11329003</span>
			</span>
						
						<span class="publishin">
				<span><i class="fa fa-thumb-tack"></i>Published In: </span>
				<a href="http://localhost/shop/index.php?route=pavblog/category&amp;id=27" class="t-color" title="Tin khuyến mãi">Tin khuyến mãi</a>
			</span>
						
						<span class="hits">
				<span><i class="fa fa-insert-template"></i>Hits: </span>
				<span class="t-color">6</span>
			</span>
						
						<span class="comment_count">
				<span><i class="fa fa-comment"></i>Comment: </span>
				<span class="t-color">2</span>
			</span>
					</section>
	
	
					
		<section class="description">
			<p>Mừng sinh nhật Thế giới Mobile tròn 1 tuổi, chúng tôi đem đến cho bạn nhiều phần quà hấp dẫn nhằm tri ân khách hàng một năm qua đã ửng hộ.</p>
		</section>
			
				<section class="btn-more-link">
			<a href="http://localhost/shop/index.php?route=pavblog/blog&amp;id=16" class="readmore btn btn-theme-default">Read more</a>
		</section>
			
	
	</footer>	

</article>							</div>
															
																				</div>
											
					<div class="pav-pagination clearfix"><div class="results">Hiển thị 1 đến 2 trong 2 (1 Trang)</div></div>
									</div>
			</section>			
			 
		</div>
	</section>
	
		
	
 </div></div> 
 
</section>
@endsection



