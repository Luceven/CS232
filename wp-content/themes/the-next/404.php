<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>     
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div  id="single-post" class="page-404"> 
                <div <?php post_class('post'); ?>>
                    
                    <div class="clear"></div>
                    <h1 class="entry-title"><?php _e('404, 找不到页面！','the-next');?></h1>
                    <div class="entry-content">
                        <?php _e('抱歉，找不到您所请求的页面...','the-next');?>  
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); 
