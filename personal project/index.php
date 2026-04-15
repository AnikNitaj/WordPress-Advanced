<?php get_header(); ?>

<main>
    <div class="hero-section">
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Hero Image" />
        </div>
        <div class="hero-content">
            <h1>Welcome to Our Store</h1>
            <p>Discover amazing products for your needs</p>
            <a href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>" class="btn btn-primary btn-large">Buy Now</a>
        </div>
    </div>

    <!-- Dynamic Posts Section -->
    <?php if ( have_posts() ) : ?>
        <div class="container">
            <div class="posts">
                <h2>Latest Posts</h2>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="post">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-image">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                            </div>
                        <?php endif; ?>
                        <div class="post-info">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <div class="tags">
                                <?php the_tags( 'Tags: ', ', ', '' ); ?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>