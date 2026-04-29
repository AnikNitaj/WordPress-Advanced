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

    <div class="container">
        <div class="products">
            <div class="product-row">
                <article class="product product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/911-turbo-coupe.png" alt="Porsche 911 Turbo Coupe" />
                    </div>
                    <div class="product-info">
                        <h3>Porsche 911 Turbo Coupe</h3>
                        <div class="price">€240,000</div>
                    </div>
                </article>

                <article class="product product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/911-turbo-sale.jpg" alt="Porsche 911 Turbo Sale" />
                    </div>
                    <div class="product-info">
                        <h3>Porsche 911 Turbo Sale</h3>
                        <div class="price">€225,000</div>
                    </div>
                </article>
            </div>

            <div class="product-row">
                <article class="product product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/jeep1.jpg" alt="Jeep Cayenne" />
                    </div>
                    <div class="product-info">
                        <h3>Jeep Cayenne</h3>
                        <div class="price">€90,000</div>
                    </div>
                </article>

                <article class="product product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/jeep2.jpg" alt="Porsche Macan" />
                    </div>
                    <div class="product-info">
                        <h3>Porsche Macan</h3>
                        <div class="price">€85,000</div>
                    </div>
                </article>
            </div>

            <div class="product-row product-row--single">
                <article class="product product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/special.jpg" alt="Special Featured Car" />
                    </div>
                    <div class="product-info">
                        <h3>Special Featured Car</h3>
                        <div class="price">€350,000</div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>