<?php
/*
Template Name: Shop Page
*/
get_header(); ?>

<main>
    <div class="container">
        <!-- Shop filter section -->
        <div class="shop-filter">
            <h2>Select a model type</h2>
            <div class="filter-buttons">
                <button type="button" class="btn filter-btn active" data-filter="all">All</button>
                <button type="button" class="btn filter-btn" data-filter="jeep">Jeep</button>
                <button type="button" class="btn filter-btn" data-filter="model-911">911</button>
                <button type="button" class="btn filter-btn" data-filter="special">Special edition</button>
            </div>
            <p class="filter-description">Choose Jeep to show Cayenne and Macan side by side.</p>
        </div>

        <!-- Static Products Section -->
        <div class="products">
            <div class="product-row">
                <article class="product product-card model-911">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/911-turbo-coupe.png" alt="Porsche 911 Turbo Coupe" />
                    </div>
                    <div class="product-info">
                        <h3>Porsche 911 Turbo Coupe</h3>
                        <div class="price">€240,000</div>
                        <p>Original 911 Turbo Coupe displayed with its real-world market price.</p>
                        <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                    </div>
                </article>

                <article class="product product-card model-911">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/911-turbo-sale.jpg" alt="Porsche 911 Turbo Sale" />
                    </div>
                    <div class="product-info">
                        <h3>Porsche 911 Turbo Sale</h3>
                        <div class="price">€225,000</div>
                        <p>Porsche 911 Turbo Sale model shown side by side with the coupe.</p>
                        <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                    </div>
                </article>
            </div>

            <div class="product-row">
                <article class="product product-card jeep">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/jeep1.jpg" alt="Jeep Cayenne" />
                    </div>
                    <div class="product-info">
                        <h3>Jeep Cayenne</h3>
                        <div class="price">€90,000</div>
                        <p>Jeep Cayenne priced at a realistic market value.</p>
                        <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                    </div>
                </article>

                <article class="product product-card jeep">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/jeep2.jpg" alt="Porsche Macan" />
                    </div>
                    <div class="product-info">
                        <h3>Porsche Macan</h3>
                        <div class="price">€85,000</div>
                        <p>Porsche Macan shown beside the Cayenne with its market price.</p>
                        <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                    </div>
                </article>
            </div>

            <div class="product-row product-row--single">
                <article class="product product-card special">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/special.jpg" alt="Special Featured Car" />
                    </div>
                    <div class="product-info">
                        <h3>Special Featured Car</h3>
                        <div class="price">€350,000</div>
                        <p>This premium vehicle is placed alone in its own row.</p>
                        <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>