
  <?php
/*
 * This is the default post format.
 *
 * So basically this is a regular post. if you don't want to use post formats,
 * you can just copy ths stuff in here and replace the post format thing in
 * single.php.
 *
 * The other formats are SUPER basic so you can style them as you like.
 *
 * Again, If you want to remove post formats, just delete the post-formats
 * folder and replace the function below with the contents of the "format.php" file.
*/
  ?>

   <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">

    <header>

        <h1 itemprop="headline"><a itemprop="url" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <p>
                    <?php printf( __( 'Posted %1$s by %2$s', 'barebonestheme' ),
                        /* the time the post was published */
                        '<time datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                        /* the author of the post */
                        '<span>by</span> <span itemprop="author">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    ); ?>
        </p>

    </header>

    <section itemprop="articleBody">
        <?php the_content(); ?>
    </section>

    <footer>

        <?php printf( '<p>' . __('filed under', 'barebonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

        <?php the_tags( '<p>' . __( 'Tags:', 'barebonestheme' ) . ' <span itemprop="keywords">', ', ', '</span></p>' ); ?>

    </footer>
    
    <?php comments_template(); ?>

</article>