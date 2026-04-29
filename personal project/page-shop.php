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
                <button type="button" class="btn filter-btn" data-filter="model-911">911</button>
                <button type="button" class="btn filter-btn" data-filter="model-taycan">Taycan</button>
                <button type="button" class="btn filter-btn" data-filter="model-cayenne">Cayenne</button>
            </div>
            <p class="filter-description">Browse 911, Taycan, and Cayenne models in the updated shop layout.</p>
            <p class="shop-intro">Explore Porsche engineering with models selected for performance, luxury, and electric innovation. Choose a family to view the matching vehicles and key details.</p>
        </div>

        <!-- Static Products Section -->
        <div class="products">
            <div class="product-section" data-filter="model-911">
                <h2 class="section-title">911 Collection</h2>
                <div class="product-row">
                    <article class="product product-card model-911" data-name="Porsche 911 GT3">
                        <div class="product-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/911 GT3.jpg' ); ?>" alt="Porsche 911 GT3" />
                        </div>
                        <div class="product-info">
                            <h3>Porsche 911 GT3</h3>
                            <div class="price">€235,000</div>
                            <p>Track-focused GT3 built for precision and ultimate speed.</p>
                            <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                        </div>
                    </article>

                    <article class="product product-card model-911" data-name="Porsche 911 Carrera 4 GTS Cabriolet">
                        <div class="product-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/911 Carrera 4 GTS Cabriolet.jpg' ); ?>" alt="Porsche 911 Carrera 4 GTS Cabriolet" />
                        </div>
                        <div class="product-info">
                            <h3>Porsche 911 Carrera 4 GTS Cabriolet</h3>
                            <div class="price">€215,000</div>
                            <p>Open-top GTS with all-wheel drive and premium sports performance.</p>
                            <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="product-section" data-filter="model-taycan">
                <h2 class="section-title">Taycan Models</h2>
                <div class="product-row">
                    <article class="product product-card model-taycan" data-name="Porsche Taycan">
                        <div class="product-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/Taycan.jpg' ); ?>" alt="Porsche Taycan" />
                        </div>
                        <div class="product-info">
                            <h3>Porsche Taycan</h3>
                            <div class="price">€105,000</div>
                            <p>Electric sports sedan with instant torque and luxurious design.</p>
                            <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                        </div>
                    </article>

                    <article class="product product-card model-taycan" data-name="Porsche Taycan GTS">
                        <div class="product-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/Taycan GTS.jpg' ); ?>" alt="Porsche Taycan GTS" />
                        </div>
                        <div class="product-info">
                            <h3>Porsche Taycan GTS</h3>
                            <div class="price">€140,000</div>
                            <p>High-performance Taycan with sport-tuned handling and style.</p>
                            <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="product-section" data-filter="model-cayenne">
                <h2 class="section-title">Cayenne Electric</h2>
                <div class="product-row">
                    <article class="product product-card model-cayenne" data-name="Porsche Cayenne Electric">
                        <div class="product-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/Cayenne Electric.jpg' ); ?>" alt="Cayenne Electric" />
                        </div>
                        <div class="product-info">
                            <h3>Porsche Cayenne Electric</h3>
                            <div class="price">€110,000</div>
                            <p>Electric Cayenne with premium comfort and strong range.</p>
                            <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                        </div>
                    </article>

                    <article class="product product-card model-cayenne" data-name="Porsche Cayenne Coupé Electric">
                        <div class="product-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/Cayenne Coupé Electric.jpg' ); ?>" alt="Cayenne Coupé Electric" />
                        </div>
                        <div class="product-info">
                            <h3>Porsche Cayenne Coupé Electric</h3>
                            <div class="price">€125,000</div>
                            <p>Electric Cayenne Coupé with aggressive looks and modern luxury.</p>
                            <a href="#" class="btn btn-primary add-to-cart-btn">Add to Cart</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    (function () {
        var filterButtons = document.querySelectorAll('.filter-btn');
        var sections = document.querySelectorAll('.product-section');
        var description = document.querySelector('.filter-description');

        function updateDescription(filter) {
            switch (filter) {
                case 'model-911':
                    return 'Showing only 911 models. All other model sections are hidden.';
                case 'model-taycan':
                    return 'Showing only Taycan models. All other model sections are hidden.';
                case 'model-cayenne':
                    return 'Showing only Cayenne models. All other model sections are hidden.';
                default:
                    return 'Browse 911, Taycan, and Cayenne models in the updated shop layout.';
            }
        }

        function filterSections(filter) {
            sections.forEach(function (section) {
                section.style.display = (filter === 'all' || section.dataset.filter === filter) ? '' : 'none';
            });
            if (description) {
                description.textContent = updateDescription(filter);
            }
        }

        filterButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var filterValue = this.dataset.filter;
                filterButtons.forEach(function (btn) {
                    btn.classList.toggle('active', btn === button);
                });
                filterSections(filterValue);
            });
        });

        filterSections('all');
    })();
</script>

<?php get_footer(); ?>