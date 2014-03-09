<div class="grid_12 alpha">
    
</div>
<div class="grid_6">
    <div class="widget_inner last">
        <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
            <?php dynamic_sidebar('second-footer-widget-area'); ?>
        <?php else : ?> 
            <h3><?php _e('SOCIAL LINK','black-bird'); ?></h3>
            
                <?php if (blackbird_get_option('blackbird_facebook') != '') { ?>
                    <a href="<?php echo blackbird_get_option('blackbird_facebook'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /><?php _e('&nbsp;&nbsp;Join Us On Facebook','black-bird'); ?></a>
                <?php } ?>  
                <?php if (blackbird_get_option('blackbird_twitter') != '') { ?>
                    <a href="<?php echo blackbird_get_option('blackbird_twitter'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /><?php _e('&nbsp;&nbsp;Join Us On Twitter','black-bird'); ?></a>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_linked') != '') { ?>
                    <a href="<?php echo blackbird_get_option('blackbird_linked'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkdin.png" /><?php _e('&nbsp;&nbsp;Join Us On In.com','black-bird'); ?></a>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_rss') != '') { ?>
                    <a href="<?php echo blackbird_get_option('blackbird_rss'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/subscribe.png" /><?php _e('&nbsp;&nbsp;Subscribe to Our Blog','black-bird'); ?></a>
                <?php } ?>
           
        <?php endif; ?>
    </div>
</div>
