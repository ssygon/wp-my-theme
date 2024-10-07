window.addEventListener('pageshow', (event) => {
    //console.log('page loaded');

    jQuery(document).ready(($) => {
        //console.log('initialised');
        
        function initialiseCheckScrollPosition() {
            const checkScrollPosition = () => {
                let scrollPosition = $(window).scrollTop();
                let offsetThreshold = 10;
            
                if (scrollPosition > offsetThreshold) {
                    $('body').addClass('sticky-header');
                } else {
                    $('body').removeClass('sticky-header');
                }
            };

            checkScrollPosition();

            // Events
            $(window).scroll(() => {
                checkScrollPosition();
            });
        }

        initialiseCheckScrollPosition();


    });

});