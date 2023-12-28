<?php
/**
 * @package Classic Coffee Shop
 */
?>

<?php
    $post_date = get_the_date();
    
    $author_name = get_the_author();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
    <?php if (has_post_thumbnail() ){ ?>
        <div class="post-thumb">
           <?php the_post_thumbnail(); ?>
        </div>
    <?php } ?>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>
    <?php if ('post' == get_post_type()) : ?>
        <div class="postmeta">
            <div class="post-date">
                <i class="fas fa-calendar-alt"></i> &nbsp;<?php echo esc_html($post_date); ?>
            </div>
            <div class="post-comment">&nbsp; &nbsp;
                <i class="fa fa-comment"></i> &nbsp; <?php comments_number(); ?>
            </div>
            <div class="post-author">&nbsp; &nbsp;
                <i class="fas fa-user"></i> &nbsp; <?php echo esc_html($author_name); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'classic-coffee-shop' ),
                'after'  => '</div>',
            ) );
        ?>
        <?php the_tags(); ?>
    </div>
    <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'classic-coffee-shop' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>
</article>