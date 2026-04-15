<?php get_header(); ?>

<main>
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="product-single">
                <div class="product-gallery">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>
                </div>
                <div class="product-details">
                    <h1><?php the_title(); ?></h1>
                    <div class="price">$29.99</div> <!-- Placeholder -->
                    <div class="description">
                        <?php the_content(); ?>
                    </div>
                    <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>