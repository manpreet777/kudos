@include('pages.includes.main-slider')
@include('pages.includes.news-widget')
<!-- /// main page content -->
<?php 
  if(isset($main_page_content)){ 
    $title = unserialize( $main_page_content[0]->heading );
    $content = unserialize( $main_page_content[0]->content );
    
?>
    <div class="container">
      
      <div class="title-box text-center">
          <h1 class="title"><?php echo $title[1]; ?></h1>
      </div>
      <div style="padding-bottom: 30px;">
          <?php echo $content[1]; ?>
      </div>

    </div><!--- ///container -->
<!-- //main page content editable by admin -->
<?php } ?>
