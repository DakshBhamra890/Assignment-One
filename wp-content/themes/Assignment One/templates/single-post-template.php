<?php
/**
 * Template Name: Single Post Template
 * Template Post Type: post
 */
get_header();
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
?>
<main  class = "post-masthead" style="background: url('<?php echo $featuredImg[0]; ?>');">
    <section>
        <div>
            <h1>
                <?php the_title();?>
            </h1>
        </div>
    </section>
    <!-- This display single post content-->
    <section id ="post">
        <div id=" post_main">
            <?php echo get_the_content();?>
            <p><?php echo get_the_date();?></p>
            <p><?php echo the_Category(',', '',get_the_ID());?></p>
        </div>
        <div id = "post_article">
            <?php
            $the_query = new WP_Query('posts_per_page=3');
            while($the_query -> have_posts()) : $the_query -> the_post(); 
            ?>
            <article id ="article">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo $featuredImg[0];?>" alt=" Post featured image">
                </a>
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                <?php the_excerpt();?>
            </article>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>