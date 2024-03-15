(function ($) {


    $(document).ready(function(){
      $("#sticky-header").sticky({topSpacing:0});

      // Show scroll-to-top button when user scrolls down
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.newsnest-scrool-top').fadeIn();
        } else {
            $('.newsnest-scrool-top').fadeOut();
        }
    });
    
      // Scroll to top when button is clicked
      $('.newsnest-scrool-top').click(function() {
          $('html, body').animate({ scrollTop: 0 }, 'slow');
      });

        var stickySidebar = new StickySidebar('.sticky-sidebar', {
            topSpacing: 80,
        });

       
    });


})(jQuery);
