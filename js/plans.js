jQuery(window).ready(function(){

    /* 
     * Shows the available plans upon end of WPContentBot requests
     */
    jQuery(window).on('upgrade_plans', function(){
        jQuery.ajax({
                type : "POST",
                url : 'https://wpcontentbot.io/wp-json/wpcb_licensing/plans',
                dataType: 'html',
                success: function(plans){

                    var plans_html = '';

                    plans = JSON.parse(plans);
                    jQuery(plans).each(function(index){
                        
                        var plan = plans[index];

                        plans_html += `
                        <a href="https://wpcontentbot.io/checkout/?add-to-cart=${plan.id}" target="_blank" class="wpcb-plan">	
                            <img src="https://wpcontentbot.io/wp-content/themes/toast/assets/images/bot-${plan.license.toLowerCase()}.svg" alt="Bot">
                            <div class="wpcb-title"><strong>${plan.license}</strong></div>
                
                            <div class="price">£${plan.price} / month</div>
                
                            <div class="plan-description">
                                ${plan.description}
                            </div>
                        </a>

                        `

                    })
                    jQuery('.wpcb-plans').html(plans_html);

                    setTimeout(function(){
                        jQuery('.wpcb-plans-advert').addClass('active');
                    }, 50)

                }
            });
    });

})