<?php get_header(); ?>

<div <?php post_class(array('blogs', 'fix')); ?>>
    <div class="blog-left">
        <h4>Latest Blog</h4>
        <?php get_template_part( 'template-parts/content', 'blogs' ); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
        

<?php get_footer(); ?>