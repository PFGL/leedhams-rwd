<?php get_header(); ?>

    <div id="content" class="wrapper">

        <div id="inner-content" class="container">

            <main class="main">

                <?php if (is_category()) { ?>
                    <h1 class="archive-title">
                        <span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
                    </h1>

                <?php } elseif (is_tag()) { ?>
                    <h1 class="archive-title h2">
                        <span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
                    </h1>

                <?php } elseif (is_author()) {
                    global $post;
                    $author_id = $post->post_author;
                ?>
                    <h1 class="archive-title">

                        <span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

                    </h1>
                <?php } elseif (is_day()) { ?>
                    <h1 class="archive-title">
                        <span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
                    </h1>

                <?php } elseif (is_month()) { ?>
                        <h1 class="archive-title">
                            <span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
                        </h1>

                <?php } elseif (is_year()) { ?>
                        <h1 class="archive-title">
                            <span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
                        </h1>
                <?php } ?>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

                        <header class="article-header">

                          <h1 class="entry-title single-title">
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                              <?php the_title(); ?>
                            </a>
                          </h1>

                        <?php get_template_part ( 'partials/post-meta' ); ?>

                        </header>

                        <div class="entry-content">

                            <?php the_post_thumbnail( 'bones-thumb-300' ); ?>

                            <?php the_excerpt(); ?>

                        </div>

                        <?php get_template_part ( 'partials/article-footer' ,'index'); ?>

                    </article>

                <?php endwhile; ?>

                    <?php bones_page_navi(); ?>

                <?php else : ?>

                    <?php get_template_part ('partials/no-post-found');?>

                <?php endif; ?>

            </main>

            <?php get_sidebar(); ?>

        </div>

    </div>

<?php get_footer(); ?>
