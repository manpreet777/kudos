<style type="text/css">
/* search form styling */
  .inline-search-form{
		position: relative;
	}
	form .search-btn{
	    font-size: 14px;
	    background: none;
	    padding: 10px;
	    color: #ccc;
	    height: 38px;
	    outline: none;
	    padding: 0;
	    position: absolute;
	    right: 20px;
	    top: 1px;
	}
	/* ////form-styling ends */

	.title>b{
		font-size: 90%;
		color: rgb(193, 8, 65);
	}
	.most-recent{
		margin: 0;
	}
	.title-box{
		margin-bottom: 20px;
	}
	.post>.content{
		margin: 5px 0 0;
	}
	.latest-main>div,
	.latest-sub-wrap>div,
	.latest-sub>.content{
		padding: 10px 2px;
	}
	.featured-img>img{
		/*min-width: 100%;*/
	}
	.content>h4,
	.content>h6{
		margin-bottom: 5px;
	}
	.latest-sub{
		margin-bottom: 10px;
	}
	.content>h4>a,
	.content>h6>a,
	article .entry-title a{
		color: rgb(220, 20, 80) !important;
		font-weight: 600;
	}
	article{
		max-height: 200px;
	}
	article .featured-img>img{
		/*height: 200px;
		width: auto;*/
	}
	.blog-meta span,
	footer span,
	.comments-link i{
		margin-right: 10px;
	}
	aside.tags a{
		margin: 2px;
		display: inline-block !important;
	}
	.btn-sm{
		margin: 2px;
	}
	.underline{
		color: #7f7f7f;
	    font-size: 18px;
	    font-weight: normal;
	    margin: 0 0 12px 0;
	    padding: 14px 0 0;
	}
</style>

<!-- //facebook share button -->
		<div id="fb-root"></div><div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1676034339325749";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<!-- //facebook share -->
<section id="main">

<div class="container">  
	<div class="title-box">
	  <h4 class="title">Blog <?php if( isset($_REQUEST['cat']) ) echo "<b>search category: ".$subTitle."</b>"; if( isset($_REQUEST['subcat']) ) echo "<b>search category: ".$subTitle."</b>"; if( isset($_REQUEST['searchTag']) ) echo "<b>search tag: ".$subTitle."</b>"; if( isset($_REQUEST['blog_search']) ) echo "<b style='font-size: 90%; color: rgb(193, 8, 65);'>search term(s): ".$subTitle."</b>"; ?></h4>
	</div>	
</div>

  <div class="container">
    <div class="row">
      <div class="content blog col-sm-9 col-md-9">
   		
   		<?php 
   			//displaying 3 latest blogs only if no search button clicked
   			if( !isset($_GET['cat'])  && !isset($_GET['subcat'])  && !isset($_GET['blog_search']) && !isset($_GET['searchTag']) && !isset($_GET['page']) && $total_records > 1 ):
   			//if( $pageCount == 1 || !isset($pageCount) ):
   				$resultsDisplayFrom = 3;

   		?>
      	<div class="row most-recent">

      		<div class="title-box no-underline">
      			<h6 class="title">Most Recent</h6>
      		</div>

      		<div class="col-md-8 latest-main">

      			<div class="featured-img">
      				<a href="{{ url() }}/blog_post?id=<?php echo $blog[0]->ID; ?>" class="img-fluid-wrap"><img src="{{ url() }}/images/admin/blog/<?php echo ($blog[0]->post_files != ""? $blog[0]->post_files : "images/no_image_available.png"); ?>" class="img-fluid"></a>
      			</div><!-- //featured-img -->
      			<div class="content">
      				<?php
      					$title1 = @unserialize( htmlspecialchars_decode( stripslashes( $blog[0]->post_title ) ) );
      					$desc1 = @unserialize( htmlspecialchars_decode( stripslashes( $blog[0]->post_content ) ) );

      				?>
      				<h4><a href="{{ url() }}/blog_post?id=<?php echo $blog[0]->ID; ?>"><?php echo ucfirst($title1[$lang_id]); ?></a></h4>
      				<div class="blog-meta">
      					<span><i class="post-by fa fa-user"></i> <?php echo ucfirst($blog[0]->post_author); ?></span>
      					<span><i class="post-by fa fa-calendar"></i> <?php echo $blog[0]->post_created_at; ?></span>
      					<?php
      						$qCat = @unserialize($blog[0]->cat_name);
      						$qCat = $qCat[$lang_id];
      						$qCatId = $blog[0]->cat_id;

      						$qSubCat = @unserialize($blog[0]->subcat_name);
      						$qSubCat = $qSubCat[$lang_id];
      						$qSubCatId = $blog[0]->subcat_id;

      						echo "<span>";
      						if( $qCat != '' ){
      						 	echo "Posted in  <a class='btn btn-sm' href='". url() ."/blog?cat=".$qCatId."'>".$qCat."</a>";
      						 }
      						 if( $qSubCat != '' ){
      						 	echo "<a class='btn btn-sm' href='". url() ."/blog?subcat=".$qSubCatId."'>".$qSubCat."</a>";
      						 }
      						 echo "</span>";

      					?>
      				</div><!-- //blog-meta -->
      				<div class="blog-desc"><p><?php echo substr(strip_tags(htmlspecialchars_decode($desc1[$lang_id])), 0,200); ?>...</p>
      				</div><!-- ///blog-desc -->
      			</div><!-- //content -->
      			

      		</div><!-- ///latest-main -->

      		<div class="col-md-4 latest-sub-wrap">
      			<div>
      				<?php if( isset($blog[1]) ){ ?>
      				<div class="col-xs-12 latest-sub">
      					
      					<div class="featured-img">
      						<a href="{{ url() }}/blog_post?id=<?php echo $blog[1]->ID; ?>" class="img-fluid-wrap"><img src="{{ url() }}/images/admin/blog/<?php echo ($blog[1]->post_files != "" ? $blog[1]->post_files : "images/no_image_available.png"); ?>" class="img-fluid"></a>
		      			</div><!-- //featured-img -->
		      			<div class="content">
		      				
		      				<?php
		      					$title2 = @unserialize(htmlspecialchars_decode(stripslashes($blog[1]->post_title)));
		      					//$desc2 = @unserialize($blog[1]['post_content']);
		      				?>		

		      				<h6><a href="{{ url() }}/blog_postt?id=<?php echo $blog[1]->ID; ?>"><?php echo ucfirst($title2[$lang_id-1]); ?></a></h6>
		      				<div class="blog-meta">
		      					<span><i class="post-by fa fa-user"></i> <?php echo $blog[1]->post_author; ?></span>
		      					<span><i class="post-by fa fa-calendar"></i> <?php echo $blog[1]->post_created_at; ?></span>
		      				<?php
	      						$qCat = @unserialize($blog[1]->cat_name);
	      						$qCat = $qCat[$lang_id];
	      						$qCatId = $blog[1]->cat_id;

	      						$qSubCat = @unserialize($blog[1]->subcat_name);
	      						$qSubCat = $qSubCat[$lang_id];
	      						$qSubCatId = $blog[1]->subcat_id;

	      						echo "<span>";
	      						if( $qCat != '' ){
	      						 	echo "Posted in  <a class='btn btn-sm' href='". url() ."/blog?cat=".$qCatId."'>".$qCat."</a>";
	      						 }
	      						 if( $qSubCat != '' ){
	      						 	echo "<a class='btn btn-sm' href='". url() ."/blog?subcat=".$qSubCatId."'>".$qSubCat."</a>";
	      						 }
	      						 echo "</span>";

      						?>
		      				</div><!-- //blog-meta -->
		      			
		      			</div><!-- //content -->

      				</div><!-- //latest-sub -->
      				<?php } ?>
      				<?php if( isset($blog[2]) ){ ?>
      				<div class="col-xs-12 latest-sub">
      				
      					<div class="featured-img">
		      				<a href="{{ url() }}/blog_post?id=<?php echo $blog[2]->ID; ?>" class="img-fluid-wrap"><img src="<?php echo ($blog[2]->post_files != "" ? "admin/images/blog/".$blog[2]->post_files."" : "images/no_image_available.png" ); ?>" class="img-fluid"></a>
		      			</div><!-- //featured-img -->
		      			<div class="content">
		      				<?php
		      					$title3 = @unserialize(htmlspecialchars_decode(stripslashes($blog[2]->post_title)));
		      					$desc3 = @unserialize($blog[2]->post_content);
		      				?>
		      				<h6><a href="{{ url() }}/blog_post?id=<?php echo $blog[2]->ID; ?>"><?php echo ucfirst($title3[$lang_id-1]); ?></a></h6>
		      				<div class="blog-meta">
		      					<span><i class="post-by fa fa-user"></i> <?php echo $blog[2]->post_author; ?></span>
		      					<span><i class="post-by fa fa-calendar"></i> <?php echo $blog[2]->post_created_at; ?></span>
		      					
		      					<?php
	      							$qCat = @unserialize($blog[2]->cat_name);
		      						$qCat = $qCat[$lang_id];
		      						$qCatId = $blog[2]->cat_id;

		      						$qSubCat = @unserialize($blog[2]->subcat_name);
		      						$qSubCat = $qSubCat[$lang_id];
		      						$qSubCatId = $blog[1]->subcat_id;

		      						echo "<span>";
		      						if( $qCat != '' ){
		      						 	echo "Posted in  <a class='btn btn-sm' href='". url() ."/blog?cat=".$qCatId."'>".$qCat."</a>";
		      						 }
		      						 if( $qSubCat != '' ){
		      						 	echo "<a class='btn btn-sm' href='". url() ."/blog?subcat=".$qSubCatId."'>".$qSubCat."</a>";
		      						 }
		      						 echo "</span>";

      							?>
	      					</div><!-- //blog-meta -->
		      				
		      			</div><!-- //content -->

      				</div><!-- //latest-sub -->
      				<?php } ?>

      			</div>
      		</div>


      	</div><!-- //most-recent -->
      	<?php
      		else:
      			$resultsDisplayFrom = 0;
      		endif;

      		if( !isset( $blog ) || count($blog) < 1 )
      			echo "No more posts found!";
      		else{
      			for( $j=$resultsDisplayFrom; $j<count($blog); $j++){

      				$title = @unserialize(htmlspecialchars_decode(stripslashes($blog[$j]->post_title)));
					$content = @unserialize(htmlspecialchars_decode(stripslashes($blog[$j]->post_content)));

      	?>
      		<article class="post">
				<div class="clearfix"></div>
				<br>
			  	<div class="col-md-5">
			  		<div class='featured-img'><a href="{{ url() }}/blog_post?id=<?php echo $blog[$j]->ID; ?>" class="img-fluid-wrap"><img class="img-fluid" src="<?php echo ($blog[$j]->post_files != "" ? url().'/images/admin/blog/'.$blog[$j]->post_files : "images/no_image_available.png"); ?>"></a>
			  		</div><!-- //featured-img -->
			  	</div>
			  	<div class="content col-md-7">
			  		<h3 class="entry-title"><a href="{{ url() }}/blog_post?id=<?php echo $blog[$j]->ID; ?>"><?php echo ucfirst($title[$lang_id-1]); ?></a></h3>
			  		<div class="blog-meta">
	      					<span><i class="post-by fa fa-user"></i> <?php echo ucfirst($blog[$j]->post_author); ?></span>
	      					<span><i class="post-by fa fa-calendar"></i> <?php echo date("F d".","." Y",strtotime($blog[$j]->post_created_at)); ?></span>
	      			</div><!-- //blog-meta -->
			  		<div class="entry-content">
						
						<footer>
							<?php

	      						//fetching post category and sub-category
								$qCat = @unserialize($blog[0]->cat_name);
	      						$qCat = $qCat[$lang_id];
	      						$qCatId = $blog[0]->cat_id;

	      						$qSubCat = @unserialize($blog[0]->subcat_name);
	      						$qSubCat = $qSubCat[$lang_id];
	      						$qSubCatId = $blog[0]->subcat_id;

	      						echo "<div>";
	      						if( $qCat != '' ){
	      						 	echo "Posted in  <a class='btn btn-sm' href='". url() ."/blog?cat=".$qCatId."'>".$qCat."</a>";
	      						 }
	      						 if( $qSubCat != '' ){
	      						 	echo "<a class='btn btn-sm' href='". url() ."/blog?subcat=".$qSubCatId."'>".$qSubCat."</a>";
	      						 }
	      						 echo "</div>";
	      						
	      						?>
							<?php
								//fethcing tags
								$post_tags = explode(',', $blog[$j]->post_tags);
							?>
							<span class="meta pull-left"><i class="fa fa-tags"></i> 
								<?php 
									$i=1; foreach($post_tags as $key=> $val){ 
										if($val == '')
											echo "No tags";
										else{
											echo '<a href="'. url() .'/blog?searchTag='.$val.'">'.$val.'</a>';
											if($i < count($post_tags))
												echo ", ";
										}
										$i++;
									} 
								?>
							</span>
							
							<span class="comments-link pull-right">
								<div class="fb-share-button" data-href="{{ url() }}/blog_post?id=<?php echo $blog[$j]->ID; ?>" data-layout="button_count"></div>
							  	<?php //echo $likes_count; ?> <i class="glyphicon glyphicon-thumbs-up"></i><?php //echo $comments_count; ?> <i class="fa fa-comment"></i>
							</span>
						</footer>
					</div><!-- //entry-content -->

			  </div><!-- ///content -->
		  		<div class="clearfix"></div>
				<br>
			
			</article><!-- .post -->

			<div class="clearfix"></div>
			<?php
					}
	      		}
			?>
			<div class="pagination-box">
		  		<ul class="pagination">
					<li <?php  if($pageCount==1) echo'class="disabled active"'; ?>>
						<?php if(isset($_REQUEST['blog_search'])) 
							echo "<a href='". url() ."/blog?page=1&blog_search=".$_REQUEST['blog_search']."'>"; 
						else if(isset($_REQUEST['cat']))
							echo "<a href='". url() ."/blog?page=1&cat=".$_REQUEST['cat']."'>";
						else if(isset($_REQUEST['subcat']))
							echo "<a href='". url() ."/blog?page=1&subcat=".$_REQUEST['subcat']."'>";	
						else
							echo "<a href='". url() ."/blog?page=1'>"; ?>
						<i class="fa fa-angle-left"></i></a>
						</li>
						<?php 
							for ($i=1; $i<=$total_pages; $i++)
							{ 
				            	if($pageCount==$i)
				            		echo "<li class='disabled active'>";
				            	else
				            		echo "<li>";
				            	if(isset($_REQUEST['blog_search']))
				            		echo "<a href='". url() ."/blog?page=".$i."&blog_search=".$_REQUEST['blog_search']."&blog_search_btn=Search'>".$i."</a></li>";
				            	else if(isset($_REQUEST['cat']))
				            		echo "<a href='". url() ."/blog?page=".$i."&cat=".$_REQUEST['cat']."'>".$i."</a></li>";
				            	else if(isset($_REQUEST['subcat']))
				            		echo "<a href='". url() ."/blog?page=".$i."&subcat=".$_REQUEST['subcat']."'>".$i."</a></li>";
				            	else
				            		echo "<a href='". url() ."/blog?page=".$i."'>".$i."</a></li>"; 
				        	}
				        	?>
							<?php // Goto last page
								if(isset($_REQUEST['blog_search']))
								{	
				            		echo "<li ";
				            		if( ($num_rec_per_page * $pageCount) >= $total_records) echo "class='disabled active'";
				            		echo "><a href='". url() ."/blog?page=$total_pages&blog_search=".$_REQUEST['blog_search']."'><i class='fa fa-angle-right'></i></a></li>";
				            	}
				            	else if(isset($_REQUEST['cat']))
				            	{	
				            		echo "<li ";
				            		if( ($num_rec_per_page * $pageCount) >= $total_records) echo "class='disabled active'";
				            		echo "><a href='". url() ."/blog?page=$total_pages&cat=".$_REQUEST['cat']."'><i class='fa fa-angle-right'></i></a></li>";
				            	}
				            	else if(isset($_REQUEST['subcat']))
				            	{	
				            		echo "<li ";
				            		if( ($num_rec_per_page * $pageCount) >= $total_records) echo "class='disabled active'";
				            		echo "><a href='". url() ."/blog?page=$total_pages&subcat=".$_REQUEST['subcat']."'><i class='fa fa-angle-right'></i></a></li>";
				            	}
				            	else
								{	
									echo "<li ";
				            		if( ($num_rec_per_page * $pageCount) >= $total_records) echo " class='disabled active'";
									echo "><a href='". url() ."/blog?page=$total_pages'>
										<i class='fa fa-angle-right'></i></a></li>";
								}
							?>
				</ul>
				<i class="pagination-text">Displaying <?php echo (($pageCount-1)*$num_rec_per_page)+1; ?> to <?php  $lowerlimit = $num_rec_per_page * $pageCount; while($lowerlimit > $total_records){ $lowerlimit--;}; echo ($lowerlimit); ?> (of <?php echo $total_records; ?> posts)</i>
			</div><!-- .pagination-box --><?php //} ?>
	  </div><!-- .content -->
	  
	  <div id="sidebar" class="sidebar col-sm-3 col-md-3">
		
      	<aside class="widget list">
		  <div class="title-box">
			<h3 class="title">Search Blog</h3>
		  </div>
		  <div>
		  	<form class="inline-search-form" name="search-news" class="" method="GET" action="{{ url() }}/blog">
	        	<div class="form-group">
	          		<input class="search-string form-control" type="text" placeholder="Enter search text" name="blog_search" maxlength="15">
	        		<button class="search-btn" value="Search" name="blog_search_btn"><span class="glyphicon glyphicon-arrow-right"></span></button>
	        	</div>
      		</form>
		  </div>
		</aside><!-- .list -->

		<!-- //categories for blog and tags-->
		@include('pages.includes.blog-sidebar-nav')
		<!-- //blog categories and tags ends here -->
		
		
	  </div><!-- .sidebar -->


    </div><!--- //row -->
  </div><!-- .container -->

	
</section>
<br>