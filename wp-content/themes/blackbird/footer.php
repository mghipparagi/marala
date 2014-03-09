<div class="clear"></div>
<!--Start Footer-->
<div class="footer-wrapper">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>
            </div>
        </div>
    </div>
</div>
<!--End Footer-->
<div class="clear"></div>
<div class="footer_bottom">
    <div class="container_24">
        <div class="grid_24">
            <div class="footer_bottom_inner"> 
                <span class="blog-desc">				
                    <?php echo get_bloginfo('title'); ?>
                    -
                    <?php echo get_bloginfo('description'); ?>
                </span>
               
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>