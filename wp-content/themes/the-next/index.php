<?php
if(is_home() && get_option('show_on_front') == 'posts')
    define('THENEXT_HIDE_PAGE_HEADER',1);

get_header(); ?>

<div class="container">
	<div class="col-md-12">
	    <div id="featured-slider" class="carousel slide" data-ride="carousel">
	        <!-- Indicators -->
	        <ol class="carousel-indicators">
	            <?php foreach ($posts as $post) { ?>
	            <li data-target="#featured-slider" data-slide-to="<?php echo $i++; ?>" <?php if($i==1) echo 'class="active"'; ?>>
	                <?php 
	                if(has_post_thumbnail($post->ID ))
	                    wpeden_thumb($post, array(60, 60), array('class'=>'featured-slide-thumb')); 
	                else
	                {
	                    echo '<img class="featured-slide-thumb" src="'.get_template_directory_uri().'/images/thumbnail-ph-60x60.png">';
	                }
	                ?>
	            </li>
	            <?php } ?>
	        </ol>

	        <!-- Wrapper for slides -->
	        <div class="carousel-inner" role="listbox">
	            <?php foreach ($posts as $post) { ?>
	                <div class="item <?php echo $first++ == 1 ? 'active' : ''; ?>" id="slide-<?php echo $first; ?>">
	                    <?php
	                        if(!has_post_thumbnail($post->ID ))
	                            echo '<img class="featured-slide inv" data-animation="animated zoomIn" data-delay="0.3s" src="'.get_template_directory_uri().'/images/thumbnail-ph.jpg">';
	                        else{
	                            wpeden_thumb($post, array(300, 300), array('class'=>'featured-slide inv','data-animation'=>'animated zoomIn', 'data-delay'=> '0.3s')); 
	                        }
	                    ?>
	                    <div class="carousel-caption">
	                        <span class="lead slide-cat inv"  data-animation="animated zoomIn"><?php the_category(', ', 0, $post->ID); ?></span>
	                        <h2 class="slide-title inv"  data-animation="animated fadeInUp" data-duration="2s" data-delay="1s"><?php echo sanitize_text_field($post->post_title); ?></h2>
	                        <p class="lead slide-excerpt inv" data-animation="animated fadeInUp" data-duration="3s" data-delay="2s"><?php echo substr(strip_tags($post->post_content),0, 150); ?>...</p>
	                        <div class="meta">
	                            <a href="<?php echo get_permalink($post->ID);?>" class="btn btn-primary inv slide-btn"  data-animation="animated fadeInUp" data-delay="3s" data-duration="2s"><?php _e('Full Story','the-next');?><i class="tn-arrow-right"></i></a>
	                        </div>

	                    </div>
	                </div>
	            <?php } ?>

	        </div>


	    </div>
	</div>
	
    <div class="row">
        <?php TheNextFramework::DynamicSidebars('left'); ?>
        <div class="<?php TheNextFramework::ContentAreaWidth(); ?>">

            <?php get_template_part('loop', get_post_type()); ?>

        </div>
        <?php TheNextFramework::DynamicSidebars('right'); ?>
    </div>
</div>

<?php get_footer(); 
