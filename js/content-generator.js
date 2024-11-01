jQuery(window).ready(function(){

    /**
     * Loop through example placeholders
     * 
     */
    if(jQuery('.wpcb-generator-input').length){

        var placeholder = [
            'How did dinosaurs die?',
            'What is fusion energy?',
            'Is chatGPT the future?',
            'What is the best supercar?',
            'What is the speed of a cheetah?',
            'How tall is the Eiffel Tower?',
            'The 10 best places to eat in Manhattan.',
            'The 10 cheapest places to visit abroad.',
            'How can I bake a red velvet cake?',
            'What is the hottest place on earth?',
            'The 5 hottest curries in the world.',
            '15 best gift ideas.',
            'Write an article on AI generated art.',
            'What is Cryptocurrency?',
            'Is Bitcoin worth it?',
            'What is the speed of light?',
            'How long does it take to get to the moon?',
            'The 5 most important SEO practices.'
        ];
        var type;

        WPCBTypeRandomString();

        function WPCBTypeRandomString(){
            var random_query = placeholder[Math.floor(Math.random() * placeholder.length) + 0];
            var letter = 0;

            if(random_query.length){
                clearInterval(type);
                type = setInterval(function(){
                    letter++;
                    jQuery('.wpcb-generator-input').attr('placeholder', random_query.substring(0, letter));

                    if(letter == random_query.length){
                        setTimeout(function(){
                            WPCBTypeRandomString();
                        }, 2000);
                    }

                }, 75);
            }else{
                WPCBTypeRandomString();
            }
        }
        
        jQuery('.wpcb-generator-input').on('focus', function(){
            setTimeout(function(){
                clearInterval(type);
                jQuery('.wpcb-generator-input').attr('placeholder', '');
            }, 50);
        })

        jQuery('.wpcb-generator-input').on('focusout', function(){
            WPCBTypeRandomString();
        })

    }

    /** 
     * Return Content Generator result
     */
    jQuery('.wpcb-generator-input').on('keyup', function(e){
        if(e.originalEvent.key == 'Enter' && jQuery('.wpcb-generator-input').val() !== '' && ! jQuery('.wpcb-search-bar').hasClass('wpcb-running')){
            wpcb_update_result();
        }
    })

    jQuery('.wpcb-search-icon').on('click', function(e){
        if(jQuery('.wpcb-generator-input').val() !== '' && ! jQuery('.wpcb-search-bar').hasClass('wpcb-running')){
            wpcb_update_result();
        }
    })

    function wpcb_update_result(){

        var query = jQuery('.wpcb-generator-input').val();
        jQuery('.wpcb-search-bar').addClass('wpcb-running');

        //Loading animation
        jQuery('.wpcb-result-wrapper').addClass('load-slide-1');
        var loading_slide = 0 ;
        var loading_slides = setInterval(function(){
            loading_slide++;
            if(loading_slide % 2 == 0){
                jQuery('.wpcb-result-wrapper').addClass('load-slide-1');
                jQuery('.wpcb-result-wrapper').removeClass('load-slide-2');
            }else{
                jQuery('.wpcb-result-wrapper').removeClass('load-slide-1');
                jQuery('.wpcb-result-wrapper').addClass('load-slide-2');
            }
        }, 5000)

        jQuery.ajax({
            type : "POST",
            url : 'https://wpcontentbot.io/wp-json/wpcb_licensing/generate_content',
            dataType: 'html',
            data : {
                license_key: wpcb_license.key,
                query: query,
            },
            success: function(wpcb_response) {
                clearTimeout(loading_slides);
                jQuery('.wpcb-search-bar').removeClass('wpcb-running');
                jQuery('.wpcb-generator-results .wpcb-result').html(wpcb_response).removeClass('wpcb-introduction');
                jQuery('.wpcb-result-wrapper').removeClass('load-slide-1');
                jQuery('.wpcb-result-wrapper').removeClass('load-slide-2');

                if(wpcb_response == 'upgrade'){
                    jQuery(window).trigger('upgrade_plans');
                    jQuery('.wpcb-generator-results-area').addClass('wpcb-upgrade-now');
                }
            }
        })

    }

})