<?php
/**
* Navigation action
*
* 
* @package      Customizr
* @subpackage   classes
* @since        3.0
* @author       Nicolas GUILLAUME <nicolas@themesandco.com>
* @copyright    Copyright (c) 2013, Nicolas GUILLAUME
* @link         http://themesandco.com/customizr
* @license      http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

class TC_post_navigation {

    //Access any method or var of the class with classname::$instance -> var or method():
    static $instance;

    function __construct () {

        self::$instance =& $this;

        add_action  ( '__after_loop'                         , array( $this , 'tc_post_nav' ), 20 );
    }



    /**
     * The template part for displaying nav links
     *
     * @package Customizr
     * @since Customizr 3.0
     */
    function tc_post_nav() {
      
      // When do we display navigation ?
      //1) we don"t show post navigation for pages by default
      //2) + filter conditions
      $post_navigation_bool         = is_page( tc__f ( '__ID' ) ) ? false : true ;

      if( !apply_filters('tc_show_post_navigation', $post_navigation_bool ) )
        return;
      
      global $wp_query;

      $html_id = 'nav-below';

      ob_start();
      ?>

      <?php if ( is_singular() ) : ?>

        <?php echo apply_filters( 'tc_singular_nav_separator' , '<hr class="featurette-divider '.current_filter().'">'); ?>

        <nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">

            <h3 class="assistive-text">
              <?php echo apply_filters( 'tc_singular_nav_title', __( 'Post navigation' , 'customizr' ) ) ; ?>
            </h3>

            <ul class="pager">
              <?php if ( get_previous_post() != null ) : ?>
                <li class="previous">
                  <span class="nav-previous">
                    <?php 
                      $singular_nav_previous_text   = apply_filters( 'tc_singular_nav_previous_text', _x( '&larr;' , 'Previous post link' , 'customizr' ) );
                      previous_post_link( '%link' , '<span class="meta-nav">' . $singular_nav_previous_text . '</span> %title' ); 
                    ?>
                  </span>
                </li>
              <?php endif; ?>
              <?php if ( get_next_post() != null ) : ?>
                <li class="next">
                  <span class="nav-next">
                    <?php
                      $singular_nav_next_text       = apply_filters( 'tc_singular_nav_next_text', _x( '&rarr;' , 'Next post link' , 'customizr' ) );
                      next_post_link( '%link' , '%title <span class="meta-nav">' . $singular_nav_next_text . '</span>' ); 
                      ?>
                  </span>
                </li>
              <?php endif; ?>
            </ul>

        </nav><!-- #<?php echo $html_id; ?> .navigation -->

      <?php elseif ( $wp_query->max_num_pages > 1 && !is_404() && !tc__f( '__is_home_empty') ) : ?>

        <nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">

          <h3 class="assistive-text">
            <?php echo apply_filters( 'tc_list_nav_title', __( 'Post navigation' , 'customizr' ) ) ; ?>
          </h3>

            <ul class="pager">

              <?php if(get_next_posts_link() != null) : ?>

                <li class="previous">
                  <span class="nav-previous">
                    <?php
                      $list_nav_next_text           = apply_filters( 'tc_list_nav_next_text', __( '<span class="meta-nav">&larr;</span> Older posts' , 'customizr' ) );
                      next_posts_link( $list_nav_next_text ); 
                    ?>
                  </span>
                </li>

              <?php endif; ?>

              <?php if(get_previous_posts_link() != null) : ?>

                <li class="next">
                  <span class="nav-next">
                    <?php
                      $list_nav_previous_text       = apply_filters( 'tc_list_nav_previous_text', __( 'Newer posts <span class="meta-nav">&rarr;</span>' , 'customizr' ) );
                      previous_posts_link( $list_nav_previous_text );
                    ?>
                  </span>
                </li>

              <?php endif; ?>

            </ul>
            
        </nav><!-- #<?php echo $html_id; ?> .navigation -->

      <?php endif; ?>

      <?php
      $html = ob_get_contents();
      if ($html) ob_end_clean();
      echo apply_filters( 'tc_post_nav' , $html );
    }

}//end of class
