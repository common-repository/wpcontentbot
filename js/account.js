jQuery(window).ready(function(){

    jQuery.ajax({
        type : "POST",
        url : 'https://wpcontentbot.io/wp-json/wpcb_licensing/account_details',
        dataType: 'html',
        data : {
            license_key: wpcb_license.key,
        },
        success: function(account_details) {
            if(account_details){
                account_details = JSON.parse(account_details);

                if(account_details.account_authorised === 'No'){

                    var account_authorisation_notice = `
                        <div class="wpcb-notice wpcb-container">
                            <div class="wpcb-title">Check your email!</div>
                            <div class="wpcb-text">Please follow the link to authorize your email before continuing.</div>
                        </div>
                    `

                    jQuery(account_authorisation_notice).insertAfter('.wpcb-header')
                }

                jQuery('.wpcb-account-detail').each(function(){
                    var key = jQuery(this).attr('data-cg');
                    jQuery(this).text(account_details[key]);
                })
            }
        }
    });

})