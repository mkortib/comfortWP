<?php
/**
 * @package WordPress
 * @subpackage wsf
 * @since wsf 2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_post_thumbnail(); ?>

    <header class="entry-header">
        <?php
        if ( is_single() ) :
            the_title( sprintf( '<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' );
        else :
            the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
        endif;
        ?>
    </header>

    <div class="entry-content">
        <?php
        /* translators: %s: Name of current post */
        the_content( sprintf(
            __( 'Continue reading %s', 'wsf_first' ),
            the_title( '<span class="screen-reader-text">', '</span>', false )
        ) );

        wp_link_pages( array(
            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'wsf_first' ) . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'wsf_first' ) . ' </span>%',
            'separator'   => '<span class="screen-reader-text">, </span>',
        ) );
        ?>
    </div>

    <?php
    // Author bio.
    if ( is_single() && get_the_author_meta( 'description' ) ) :
        get_template_part( 'author-bio' );
    endif;
    ?>

    <footer class="entry-footer">
        <?php edit_post_link( __( 'Edit', 'wsf_first' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>

</article>