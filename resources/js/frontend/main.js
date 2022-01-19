(function() {
    $("a.services").on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
                scrollTop: $("section.services-area").offset().top - 150
            },
            'slow');
    });
    $("a.about").on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
                scrollTop: $("section.about-us-area").offset().top - 150
            },
            'slow');
    });


    $("a.plans").on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
                scrollTop: $("section.pricing-area ").offset().top - 50
            },
            'slow');
    });
    $("a.team").on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
                scrollTop: $("section.team-area ").offset().top - 50
            },
            'slow');
    });
    $("a.blogs").on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
                scrollTop: $("section.blog-area").offset().top - 100
            },
            'slow');
    });

})()