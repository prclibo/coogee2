<?php 
/* Modified by libo
 * To auto-resize thumbnail 
 **/
?>
<div class="thumbnail_t">
	<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) : ?>
	<?php $image = get_post_meta($post->ID, 'thumbnail', true); ?>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/></a>
	<?php else: ?>
</div>
<!-- 截图 -->
<div class="thumbnail">
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
<?php if (has_post_thumbnail()) { the_post_thumbnail('thumbnail'); }
else { 
    $image_url = catch_first_image(); 
    $size = getimagesize($image_url);
    $width = $size[0];
    $height = $size[1];
    if ($width / $height > 2) $scale = 400.0 / $width;
    else $scale = 140 / $height;
    $scale = min($scale, 1.0);
    $width = $width * $scale;
    $height = $height * $scale;
?>

<img class="home-thumb" src="<?php echo $image_url ?>" width="<?php echo $width; ?>px" height="<?php echo $height; ?>px" alt="<?php the_title(); ?>"/>
<?php } ?></a>
<?php endif; ?>
</div>
