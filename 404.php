<?php get_header(); ?>
    <div class="fix">
        <div class="error-page blog-left">
            <h1>
                <?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?>
            </h1>
            <p>
                <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?>
            </p>
            <?php get_search_form(); ?>
        </div>
        <div style="margin-top: 20px;">
            <?php get_sidebar();?>
        </div>
    </div>

<?php get_footer();?>