jQuery(window).ready(function(){

    //Load previously generated articles

    var page = 0;
    function WPCBloadArticles(page){
        jQuery.ajax({
            type : "POST",
            url : 'https://wpcontentbot.io/wp-json/wpcb_licensing/previous_articles',
            dataType: 'html',
            data : {
                license_key: wpcb_license.key,
                page : page
            },
            success: function(previous_articles){
                if(previous_articles == 'no-more-articles'){
                    jQuery('.wpcb-load-previous').hide();
                }else{
                    jQuery('.wpcb-previous-articles-results').append(previous_articles);
                }
            }
        });
    }

    WPCBloadArticles(page);

    jQuery('.wpcb-load-previous').on('click', function(){

        page = jQuery(this).attr('data-page');
        WPCBloadArticles(page);
        page++;
        jQuery(this).attr('data-page', page);
    })

    //Load a previously generated article
    jQuery('body').on('click', '*[data-request-id]', function(){
        var request_id = jQuery(this).attr('data-request-id');
        
        jQuery.ajax({
            type : "POST",
            url : 'https://wpcontentbot.io/wp-json/wpcb_licensing/previous_article',
            dataType: 'html',
            data : {
                license_key: wpcb_license.key,
                request_id: request_id
            },
            success: function(previous_article){
                var article = JSON.parse(previous_article)
                var html = `<div class="wpcb-title">${article.title}</div>
                    <div class="wpcb-text">${article.content}</div>`

               jQuery('.wpcb-previous-article-popup').addClass('wpcb-active');
               jQuery('.wpcb-previous-article-popup .wpcb-previous-article-popup-area').html(html);
            }
        });
    })

    //Close generated article
    jQuery('body').on('click', '.wpcb-previous-article-popup-bg', function(){
        jQuery(this).parents('.wpcb-previous-article-popup').removeClass('wpcb-active');
    })

})