<style type="text/css">
	div.button-list>div.btn-group>ul>li>a:hover{
		background-color: rgb(193, 8, 65);
		color: white;
		transition: all 0.2s ease-in; 
	}
	div.list-tags>a{
		display: inline-block;
		margin: 2px !important;
	}
</style>
<aside class="widget list">
	<header class="title-box">
				<h3 class="title">Blog Categories</h3>
	</header>
	<div>
			<?php
				foreach ($blog_categories as $key => $value) {
					
					$qCat = @unserialize($value['cat_name']);
					$qCat = $qCat[$lang_id-1];
					$qCatId = $value['cat_id'];
			
					//fethcing all blog sub-categories
					$subCatExists = count($value['sub_cat']) != 0 ? 1 : 0;

			?>
			<div class="button-list">
				<div class="btn-group">
					<a class="btn" href="{{ url() }}/blog?cat=<?php echo $qCatId; ?>"><?php echo(ucfirst($qCat)); ?></a><?php if($subCatExists == 1) { ?><button class="btn  dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><?php } ?></button>
					<?php
						 if($subCatExists == 1)
						 {	
					?>
					<ul class="dropdown-menu">		
						<?php
							foreach( $value['sub_cat'] as $val ){
								$qSubCat = unserialize($val->name);
								$qSubCat = $qSubCat[$lang_id-1];
								$qSubCatId = $val->id;
						?>
							<li><a href="{{ url() }}/blog?subcat=<?php echo $qSubCatId; ?>"><?php echo $qSubCat; ?></a></li>
						<?php }//for each ends ?>
					</ul>
					<?php }//end of if ?>
				</div><!--- ///btn-group -->	
			
			</div><!-- ///button-list -->
			<?php }//for each ends ?>
	</div>
</aside>

<aside class="widget list list-tags">
	<header>
		<h3 class="title">Tags</h3>
	</header>
	<?php
		// $tags = $blog_obj->fetchAllTags();
		// $tagsArrAfterProcessing = array();
		foreach ($blog_tags as $value){
			$tagsArr = explode(',', $value->post_tags);
			foreach ($tagsArr as $value) {
		 		$tagsArrAfterProcessing[] = $value;
		 	}
		}
		foreach ($tagsArrAfterProcessing as $value) {
		 	echo "<a href='". url() ."/blog?searchTag=".$value."' class='btn btn-sm'>".$value."</a>";
		}
	?>

</aside><!-- .list -->