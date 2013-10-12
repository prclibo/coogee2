<?php get_header(); ?>
<div id="container">
  <div id="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="home-post" id="post-<?php the_ID(); ?>">
			
			
				<div class="box_entry">
			<div class="postdate">
        <div class="month"><?php the_time('M') ?></div>
        <div class="date"><?php the_time('d') ?></div>
      </div><!-- end postdate-->
			<div class="title">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanet Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="postmeta">
					<span class="postmeta_author"><?php the_author() ?></span>
          <span class="postmeta_category"><?php the_category(', ') ?></span>
        	<span class="postmeta_comments"><?php comments_popup_link('Add you comment', '1 comment', '% comments'); ?></span>
        </div><!-- end postmeta -->
					<div class="clear"></div>
		  </div><!-- end title -->
					<div class="new"><?php include('includes/new.php'); ?></div>
					<?php if (is_sticky()) {echo '<div class="sticky-post"></div>';} ?>
					<div class="clear"></div>
					<!-- thumbnail -->
					<div class="thumbnail_box">
						<?php include('includes/thumbnail.php'); ?>
					</div>
					<div class="post_entry">
						<?php if (has_excerpt())
						{ ?> 
							<?php the_excerpt() ?>
						<?php
						}
						else{
							echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 400,"...");
						} 
						?>
						<div class="clear"></div>
						<span class="posttag"><?php the_tags('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', ', ', ''); ?></span><span class="archive_more"><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark" class="title">阅读全文</a></span>
						<div class="clear"></div>
					</div>
				</div>
    </div><!-- end post -->
    <?php endwhile; ?>
			
    	<div class="navi">
        <div class="left"><?php next_posts_link('&laquo; Previous Entries'); ?></div>
			  <div class="right"><?php previous_posts_link('Next Entries &raquo;'); ?></div>
      </div><!-- end navi -->
			
    <?php else : ?>
      
			<div class="post">
				<div class="title"><h2>Sorry, nothing found!</h2></div>
					<p>Sorry, nothing found! Please use the SEARCH on the sidebar, or visit our ARCHIVES page.</p>
		  </div><!-- end post -->
		  
    <?php endif; ?>
  </div><!-- end main -->
<?php get_sidebar(); ?>
</div><!-- end container -->
<?php get_footer(); ?>
