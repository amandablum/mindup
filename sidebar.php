<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mindup
 */


/*
  get_sidebar( 'home' );
elseif ( is_404() ) :
  get_sidebar( '404' );
else :
  get_sidebar();
endif;
*/

if ( is_page() )  { 

if ( ! is_active_sidebar( 'fullwidthtemplatesidebar' ) ) {
	return;
} ?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'fullwidthtemplatesidebar' ); ?>
</aside><!-- #secondary -->

<?php } ?>




<?php if ( is_single() || is_archive() || is_home() )  { ?>


<aside id="secondary" class="widget-area" role="complementary">


<?php get_search_form(); ?>



<ul class="tabs">
    	<li><a href="#tab1">Popular</a></li>
    	<li><a href="#tab2">Recent</a></li>
</ul>
<div id="tab1">
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href=""><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Popular Blog Post Title can extend to three lines, max char 73</a></h4>
                </div>

</div>
<div id="tab2">
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
                </div>
                <div class="postList">
                        <a href=""><img src="/wp-content/uploads/2016/03/2.png"></a>
                        <h4><a href="">Latest Post Title can extend to three lines, max char 73</a></h4>
                </div>
</div>





</aside><!-- #secondary -->

<?php } ?>
