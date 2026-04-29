<?php get_header(); ?>

<main>
    <div class="hero-section">
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri(); ?>/911-turbo-coupe.png" alt="Hero Image" />
        </div>
        <div class="hero-content">
            <h1>Welcome to Our Store</h1>
            <p>Discover the perfect vehicle for your journey.</p>
            <a href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>" class="btn btn-primary btn-large">Buy Now</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
