<?php
	if ( function_exists('register_sidebar') )
		register_sidebar();
	function widget_mytheme_search() {
?>
<li id="search">
  <form id="searchform" action="<?php bloginfo('url'); ?>" method="get">
	<input type="text" id="searchinput" name="s" class="searchinput" value="Keywords..." onfocus="if (this.value == 'Keywords...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Keywords...';}" />
	<input type="submit" id="searchsubmit" value="" />
	</form>
</li>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_mytheme_search');
?>