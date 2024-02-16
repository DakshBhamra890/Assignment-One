<?php
/**
 * Template Name: Advanced Custom fields
 * Template Post Type: page
 */
get_header();
?>
<main class ="masthead" style ="background-image: url('<?php echo wp_kses_post(get_field
    ('masthead_image'));?>')";>
    <section>
        <div>
            <h1>
                <?php echo wp_kses_post(get_field('masthead_title')); ?>
            </h1>
        </div>
    </section>
    <section class = "intro">
        <h2>
        <?php echo wp_kses_post(get_field('intro')); ?>
        </h2>
        <p><?php echo wp_kses_post(get_field('intro_text')); ?></p>
    </section>
</main>
<?php
get_footer();
?>