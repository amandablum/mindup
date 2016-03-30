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




<?php if ( is_single() || is_archive() )  { ?>


<aside id="secondary" class="widget-area" role="complementary">


<?php get_search_form(); ?>



<ul class="tabs">
        <li>
          <input type="radio" checked name="tabs" id="tab1">
          <label for="tab1">Popular</label>
          <div id="tab-content1" class="tab-content animated fadeIn">
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Popular Blog Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Popular Blog Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Popular Blog Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Popular Blog Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Popular Blog Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Popular Blog Post Title can extend to three lines, max char 73</h4>
                </div>




          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab2">
          <label for="tab2">Recent</label>
          <div id="tab-content2" class="tab-content animated fadeIn">


                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Latest Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Latest Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Latest Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Latest Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Latest Post Title can extend to three lines, max char 73</h4>
                </div>
                <div class="postList">
                        <img src="/wp-content/uploads/2016/03/2.png">
                        <h4>Latest Post Title can extend to three lines, max char 73</h4>
                </div>


          </div>
        </li>
</ul>


</aside><!-- #secondary -->

<?php } ?>
