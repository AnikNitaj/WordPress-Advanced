// Custom JavaScript for Personal Project theme

jQuery(document).ready(function($) {
    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 1000);
        }
    });

    // Add to cart animation (visual only)
    $('.add-to-cart-btn').on('click', function(e) {
        e.preventDefault();
        var button = $(this);
        button.addClass('loading');
        setTimeout(function() {
            button.removeClass('loading').addClass('added');
            button.text('Added to Cart!');
            setTimeout(function() {
                button.removeClass('added').text('Add to Cart');
            }, 2000);
        }, 1000);
    });

    // Product filter functionality
    $('.filter-btn').on('click', function() {
        var filter = $(this).data('filter');
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');

        if (filter === 'all') {
            $('.product').show();
        } else {
            $('.product').hide();
            $('.product.' + filter).show();
        }
    });

    // Mobile menu toggle
    $('.menu-toggle').on('click', function() {
        $('nav ul').toggleClass('active');
    });

    // Image zoom on hover
    $('.product img').hover(function() {
        $(this).css('transform', 'scale(1.1)');
    }, function() {
        $(this).css('transform', 'scale(1)');
    });
});