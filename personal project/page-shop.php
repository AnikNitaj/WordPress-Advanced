<?php
/*
Template Name: Shop Page
*/
get_header(); ?>

<main>
    <div class="container">
        <!-- Static Products Section -->
        <div class="products">
            <!-- Example Product 1 -->
            <article class="product product-card">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Product 1" />
                </div>
                <div class="product-info">
                    <h3>Sample Product 1</h3>
                    <div class="price">$19.99</div>
                    <p>This is a sample product description. Great for visual display.</p>
                    <div class="tags">
                        <a href="#">electronics</a>
                        <a href="#">gadgets</a>
                    </div>
                    <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                </div>
            </article>

            <!-- Example Product 2 -->
            <article class="product product-card">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Product 2" />
                </div>
                <div class="product-info">
                    <h3>Sample Product 2</h3>
                    <div class="price">$29.99</div>
                    <p>Another sample product for your visual showcase.</p>
                    <div class="tags">
                        <a href="#">clothing</a>
                        <a href="#">fashion</a>
                    </div>
                    <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                </div>
            </article>

            <!-- Example Product 3 -->
            <article class="product product-card">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Product 3" />
                </div>
                <div class="product-info">
                    <h3>Sample Product 3</h3>
                    <div class="price">$39.99</div>
                    <p>Third sample product with tags and visual appeal.</p>
                    <div class="tags">
                        <a href="#">home</a>
                        <a href="#">decor</a>
                    </div>
                    <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                </div>
            </article>

            <!-- Example Product 4 -->
            <article class="product product-card">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Product 4" />
                </div>
                <div class="product-info">
                    <h3>Sample Product 4</h3>
                    <div class="price">$24.99</div>
                    <p>A fourth product listing with a clean and modern layout.</p>
                    <div class="tags">
                        <a href="#">accessories</a>
                        <a href="#">gift</a>
                    </div>
                    <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                </div>
            </article>

            <!-- Example Product 5 -->
            <article class="product product-card">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Product 5" />
                </div>
                <div class="product-info">
                    <h3>Sample Product 5</h3>
                    <div class="price">$34.99</div>
                    <p>A fifth product with a strong visual presence and pricing detail.</p>
                    <div class="tags">
                        <a href="#">lifestyle</a>
                        <a href="#">trending</a>
                    </div>
                    <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                </div>
            </article>

            <!-- Example Product 6 -->
            <article class="product product-card">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Product 6" />
                </div>
                <div class="product-info">
                    <h3>Sample Product 6</h3>
                    <div class="price">$44.99</div>
                    <p>Sixth product listing that completes the grid for a full shop layout.</p>
                    <div class="tags">
                        <a href="#">premium</a>
                        <a href="#">limited</a>
                    </div>
                    <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                </div>
            </article>
        </div>
    </div>
</main>

<?php get_footer(); ?>