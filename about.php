/*
Template Name: About
*/

<?php get_header(); ?>
<div id="container">
    <div id="content" role="main">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>    
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content">
            <?php if($email){ ?>
                <p><strong>Message succesfully sent. I'll reply as soon as I can</strong></p>
            <?php } else { if($error) { ?>
                <p><strong>Your messange hasn't been sent</strong><p>
                <?php echo $error; ?>
            <?php } else { the_content(); } ?>
            <?php the_post_thumbnail('featured-post'); ?>
                <form action="<?php the_permalink(); ?>" id="contact_me" method="post">
                    <input type="hidden" name="sent" id="sent" value="1" />
                    
            </div><!-- .entry-content -->
        </div><!-- #post-## -->
        <!--<?php //endwhile; ?>-->
    </div><!-- #content -->
</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
		







