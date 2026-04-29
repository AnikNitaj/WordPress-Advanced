<?php get_header(); ?>

<main>
    <div class="hero-section">
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri(); ?>/911-turbo-coupe.png" alt="Hero Image" />
        </div>
        <div class="hero-content">
            <h1>Welcome to Our Store</h1>
            <p>Discover the perfect vehicle for your journey.</p>
            <a href="<?php echo get_permalink( get_page_by_path( 'shop' ) ); ?>" class="btn btn-primary btn-large">Explore the showroom</a>
        </div>
    </div>
    <section class="brand-story">
        <div class="brand-story-inner">
            <h2>Porsche: Ambition in Motion</h2>
            <p>Porsche was founded on a simple but powerful ambition: to build cars that deliver an emotional connection between driver and road. Every Porsche is engineered to fuse performance, luxury, and precision, with a relentless focus on innovation and craftsmanship. From the earliest 911 to the newest electric Taycan, Porsche remains committed to pushing boundaries while preserving the iconic spirit that makes every model instantly recognizable.</p>
            <p>True Porsche ambition is about more than speed. It is the pursuit of refinement across the entire driving experience — from dynamic handling and intelligent design to interior comfort and modern technology. Porsche builds cars for people who value authentic engineering, thoughtful details, and the confidence that comes from exceptional quality.</p>
            <p>This is a brand that believes in heritage and future progress at once. Porsche continues to reinterpret sportiness for a new generation, blending tradition with electric performance, sustainable innovation, and unmatched style. When you choose Porsche, you choose a bold vision of luxury and adventure that is designed to excite, inspire, and endure.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
